<?php

class JOBADS_CTRL_Base extends OW_ActionController{

    private $menu;

    public function __construct()
    {
        parent::__construct();

        $this->menu = $this->getMenu();

    }

    public function index(){
        $this->setPageTitle(OW::getLanguage()->text('jobads', 'index_page_title'));
        $this->setPageHeading(OW::getLanguage()->text('jobads', 'index_page_heading'));
        $tmpmenu = $this->getMenu();
        $tmpmenu->getElement('newad')->setActive(true);
//        $tmpmenu->getElement('latest')->setActive(true);
//        $tmpmenu->getElement('yourads')->setActive(true);
        $this->addComponent('menu' , $tmpmenu) ;
    }
    public function yourads(){
        exit("nothing yet!");
    }
    private function getMenu(){
        $validLists = array('newad', 'latest', 'yourads');
        $classes = array('ow_ic_push_pin', 'ow_ic_clock', 'ow_ic_user');
        $language = OW::getLanguage();
        $menuItems = array();
        if(!OW::getUser()->isAuthenticated()){
            array_shift($validLists);
            array_shift($classes);
        }
        $order = 0;
        foreach ($validLists as $type){
            $item = new BASE_MenuItem();
            $item->setLabel($language->text('jobads', 'menu_' . $type));
            if($type == 'newad'){
                $item->setUrl(OW::getRouter()->urlForRoute('jobads_newad'));
            }
            else if($type == 'latest'){
                $item->setUrl(OW::getRouter()->urlForRoute('jobads'));
            }
            else if($type == 'yourads'){
                $item->setUrl(OW::getRouter()->urlForRoute('jobads'));
            }
            else{
                exit($type);
            }

            $item->setKey($type);
            $item->setIconClass($classes[$order]);
            $item->setOrder($order);

            array_push($menuItems, $item);

            $order++;
        }
//        $validListsEvent = OW::getEventManager()->trigger(new OW_Event(IISEventManager::ADD_LIST_TYPE_TO_,array('menuItems' => $menuItems)));
//        if(isset($validListsEvent->getData()['menuItems'])){
//            $menuItems = $validListsEvent->getData()['menuItems'];
//        }

        $menu = new BASE_CMP_ContentMenu($menuItems);

        return $menu;

    }
    public function newad()
    {
        if (OW::getUser()->isAuthenticated()){
            $userId = OW::getUser()->getId();

            $this->setPageTitle(OW::getLanguage()->text('jobads', 'add_ad_title'));
            $this->setPageHeading(OW::getLanguage()->text('jobads', 'add_ad_heading'));
            $form = new Form('ad_form');

            $img = new FileField('image');
            $img->setLabel(OW::getLanguage()->text('jobads', 'ad_image'));
            $img->setRequired();
            $form->addElement($img);

            $dsc = new WysiwygTextarea('description');
            $dsc->setLabel(OW::getLanguage()->text('jobads', 'ad_description'));
            $dsc->setRequired();
            $form->addElement($dsc);
    //
            $allSkills = ADDSKILLS_BOL_SkillsDao::getInstance()->getAllSkills();
    //
            $skills = new Selectbox("skills");
            $skills->setLabel(OW::getLanguage()->text('jobads', 'ad_skills'));
            foreach ($allSkills as $skill) {
                $skills->addOption($skill->name, $skill->name);
            }

            OW::getDocument()->addScript(OW::getPluginManager()->getPlugin("jobads")->getStaticJsUrl() . 'newad.js');

            $form->addElement($skills);

            $email = new TextField('email');
            $email->setLabel(OW::getLanguage()->text('jobads', 'ad_email'));
            $email->setRequired();
            $email->addValidator(new EmailValidator());
            $form->addElement($email);

            $submit = new Submit('send');
            $submit->setValue(OW::getLanguage()->text('jobads', 'form_label_submit'));
            $form->addElement($submit);

            $skills = new HiddenField('chosen_skills');
            $form->addElement($skills);

            $this->addForm($form);
            if (OW::getRequest()->isPost()) {
                if ($form->isValid($_POST)) {
                    $values = $form->getValues();
                    $image_element = $form->getElement('image');
                    $chosen_skills = explode(',', $values['chosen_skills']);
                    $chosen_skills = json_encode($chosen_skills);
//                    exit(gettype($image_element));
                    JOBADS_BOL_AdDao::getInstance()->addAd($image_element , $values['description'] , $chosen_skills , $values['email'] , $userId);
//                    $this->redirectToAction('index');
                }
            }
        }
        else{
            exit("you can not add a new job ad!");
        }
    }
    public function showad($params){
        $this->setPageTitle("آگهی مشاغل");
        $ad = JOBADS_BOL_AdDao::getInstance()->getAd($params['adId']);
//        exit($ad->description);
        $infoArray = array();
        if($ad == NULL){
            throw new Redirect404Exception();
        }
        else{
            $infoArray = array(
              'image' => OW::getPluginManager()->getPlugin('jobads')->getUserFilesUrl()."girls-1000.png",
              'description' => $ad->description,
              'skills' => json_decode($ad->skills),
              'email' => $ad->email,
            );
        }
        $this->assign('info' , $infoArray);
    }
}