<?php

class JOBADS_CTRL_Base extends OW_ActionController{
    public function index(){
        $this->setPageTitle(OW::getLanguage()->text('jobads', 'index_page_title'));
        $this->setPageHeading(OW::getLanguage()->text('jobads', 'index_page_heading'));
    }
    public function newad(){
        $this->setPageTitle(OW::getLanguage()->text('jobads', 'add_ad_title'));
        $this->setPageHeading(OW::getLanguage()->text('jobads', 'add_ad_heading'));
        $form = new Form('ad_form');

        $img = new FileField('image');
        $img->setLabel(OW::getLanguage()->text('jobads','ad_image'));
        $img->setRequired();
        $form->addElement($img);

        $dsc = new WysiwygTextarea('description');
        $dsc->setLabel(OW::getLanguage()->text('jobads' , 'ad_description'));
        $dsc->setRequired();
        $form->addElement($dsc);
//
        $allSkills = ADDSKILLS_BOL_SkillsDao::getInstance()->getAllSkills();
//
        $skills = new Selectbox("skills");
        $skills->setLabel(OW::getLanguage()->text('jobads' , 'ad_skills'));
        foreach ($allSkills as $skill){
            $skills->addOption($skill->name, $skill->name);
        }

        OW::getDocument()->addScript(OW::getPluginManager()->getPlugin("jobads")->getStaticJsUrl() . 'newad.js');

        $form->addElement($skills);

        $email = new TextField('email');
        $email->setLabel(OW::getLanguage()->text('jobads' , 'ad_email'));
        $email->setRequired();
        $email->addValidator(new EmailValidator());
        $form->addElement($email);

        $submit = new Submit('send');
        $submit->setValue(OW::getLanguage()->text('jobads', 'form_label_submit'));
        $form->addElement($submit);

        $skills = new HiddenField('chosen_skills');
        $form->addElement($skills);

        $this ->addForm($form);
        if ( OW::getRequest()->isPost() ){
            if ( $form->isValid($_POST) ){
                $values = $form->getValues();
                exit($values['chosen_skills']);
                json_encode($skills);
            }
        }
    }
}