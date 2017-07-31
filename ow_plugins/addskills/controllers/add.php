<?php
class ADDSKILLS_CTRL_Add extends OW_ActionController {
    public function index(){

    }
    public function upload()
    {
        $this->setPageTitle("testing!");
        $this->setPageHeading("testing2!");
//        $this->setPageTitle(OW::getLanguage()->text('addskills', 'add_title'));
//        $this->setPageHeading(OW::getLanguage()->text('addskills', 'add_heading'));

//        $form = new Form('add_skills');
//        $this->addForm($form);

//        $fieldFile = new FileField('file');
//        $fieldFile->setRequired();
//        $fieldFile->setInvitation(OW::getLanguage()->text('contactus', 'upload_file_field'));
//        $fieldFile->setHasInvitation(true);
//        $form->addElement($fieldFile);

//        $submit = new Submit('submit');
//        $submit->setValue(OW::getLanguage()->text('addskills', 'form_add_skills_submit'));
//        $form->addElement($submit);
//        if ( OW::getRequest()->isPost() )
//        {
//            if ( $form->isValid($_POST) )
//            {
//                $data = $form->getValues();
//                $line = fopen($data['email'], "r") or die("Unable to open file!");
//                // Output one line until end-of-file
//                while(!feof($line)) {
//                    file_put_contents( "test.txt" , $line , FILE_APPEND);
//                }
//                fclose($line);
//                $this->redirect();
//            }
//        }
    }
}