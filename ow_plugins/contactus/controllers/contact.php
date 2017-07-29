<?php
class CONTACTUS_CTRL_Contact extends OW_ActionController
{
	public function index()
	{
		$this->setPageTitle(OW::getLanguage()->text('contactus', 'index_page_title'));
		$this->setPageHeading(OW::getLanguage()->text('contactus', 'index_page_heading'));
        $contactEmails = array();
        $contacts = CONTACTUS_BOL_Service::getInstance()->getDepartmentList();
        foreach ( $contacts as $contact )
        {
            /* @var $contact CONTACTUS_BOL_Department */
            $contactEmails[$contact->email] = CONTACTUS_BOL_Service::getInstance()->getDepartmentLabel($contact->id);
        }
        $form = new Form('contact_form');
        $fieldTo =new Selectbox('to');
        foreach ( $contactEmails as $email => $label )
        {
            $fieldTo->addOption($email, $label);
        }
        $fieldTo->setRequired();
        $fieldTo->setHasInvitation(false);
        $fieldTo->setLabel($this->text('contactus', 'form_label_to'));
        $form->addElement($fieldTo);

        $fieldFrom = new TextField('from');
        $fieldFrom->setLabel($this->text('contactus', 'form_label_from'));
        $fieldFrom->setRequired();
        $fieldFrom->addValidator(new EmailValidator());
        $form->addElement($fieldFrom);

        $fieldSubject = new TextField('subject');
        $fieldSubject->setLabel($this->text('contactus', 'form_label_subject'));
        $fieldSubject->setRequired();
        $form->addElement($fieldSubject);

        $fieldMessage = new Textarea('message');
        $fieldMessage->setLabel($this->text('contactus', 'form_label_message'));
        $fieldMessage->setRequired();
        $form->addElement($fieldMessage);

// Using captcha here to prevent bot spam
        $fieldCaptcha = new CaptchaField('captcha');
        $fieldCaptcha->setLabel($this->text('contactus', 'form_label_captcha'));
        $form->addElement($fieldCaptcha);

        $submit = new Submit('send');
        $submit->setValue($this->text('contactus', 'form_label_submit'));
        $form->addElement($submit);

        $this->addForm($form);
        if(OW::getRequest()->isPost()){
            if ( $form->isValid($_POST) )
            {
                $data = $form->getValues();

                $mail = OW::getMailer()->createMail();
                $mail->addRecipientEmail($data['to']);
                $mail->setSender($data['from']);
                $mail->setSubject($data['subject']);
                $mail->setTextContent($data['message']);
                OW::getMailer()->addToQueue($mail);

                OW::getSession()->set('contactus.dept', $contactEmails[$data['to']]);
                $this->redirectToAction('sent');
            }
        }
	}
    public function sent()
    {
        $dept = null;
        if ( OW::getSession()->isKeySet('contactus.dept') )
        {
            $dept = OW::getSession()->get('contactus.dept');
            OW::getSession()->delete('contactus.dept');
        }
        else
        {
            $this->redirectToAction('index');
        }

        $feedback = $this->text('contactus', 'message_sent', ( $dept === null ) ? null : array('dept' => $dept));
        $this->assign('feedback', $feedback);
    }
    private function text( $prefix, $key, array $vars = null )
    {
        return OW::getLanguage()->text($prefix, $key, $vars);
    }

}