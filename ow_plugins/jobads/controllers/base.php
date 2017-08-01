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
        $form->addElement($img);

        $dsc = new TextField('description');
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
        $form->addElement($skills);
        $this ->addForm($form);
    }
}