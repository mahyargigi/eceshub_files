<?php

class JOBADS_CTRL_Base extends OW_ActionController{

    private $menu;

    public function __construct()
    {
        parent::__construct();

        $this->menu = $this->getMenu();

    }

    public function index(){
//        if(OW::getUser()->isAuthenticated()) {
            $this->setPageTitle(OW::getLanguage()->text('jobads', 'index_page_title'));
            $this->setPageHeading(OW::getLanguage()->text('jobads', 'index_page_heading'));
            $tmpmenu = $this->getMenu();
//            $tmpmenu->getElement('newad')->setActive(true);
            $this->addComponent('menu', $tmpmenu);

            $allAds = JOBADS_BOL_AdDao::getInstance()->getAllAds();
            $count = count($allAds);
            foreach ($allAds as $ad) {
                $ad->description = substr($ad->description, 0, 100) . "....";
                $ad->skills = json_decode($ad->skills);
                $ad->isOwner = true;
                if (OW::getUser()->getId() == $ad->userid) {
                    $ad->isOwner = true;
                } else {
                    $ad->isOwner = false;
                }
            }
            $this->assign('allAds', $allAds);
            $this->assign('count', $count);
//        }
//        else{
//            exit("you are not logged in!");
//        }
    }
    public function yourads(){
        if(OW::getUser()->isAuthenticated()){
            $this->setPageTitle("آگهی های شما");
            $this->setPageHeading("آگهی های شما");
            $tmpmenu = $this->getMenu();
            $tmpmenu->getElement('yourads')->setActive(true);
            $this->addComponent('menu' , $tmpmenu) ;

            $allAds = JOBADS_BOL_AdDao::getInstance()->getAdByUserId(OW::getUser()->getId());
            $count = count($allAds);
            foreach ($allAds as $ad){
                $ad->description = substr($ad->description,0 ,100)."....";
                $ad->skills = json_decode($ad->skills);
            }
            $this->assign('allAds' , $allAds);
            $this->assign('count' , $count);
        }
        else{
            throw new AuthenticateException();
        }

    }
    private function getMenu(){
        $validLists = array('newad', 'latest', 'yourads');
        $classes = array('ow_ic_push_pin', 'ow_ic_clock', 'ow_ic_user');
        $language = OW::getLanguage();
        $menuItems = array();
        if(!OW::getUser()->isAuthenticated()){
            array_shift($validLists);
            array_shift($classes);
            array_pop($validLists);
            array_pop($classes);
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
                $item->setUrl(OW::getRouter()->urlForRoute('yourads'));
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
            $startupObjects = STARTUPS_BOL_StartupDao::getInstance()->getUserStartups($userId);
            $hasStartup = false;
//enctype
            $this->setPageTitle(OW::getLanguage()->text('jobads', 'add_ad_title'));
            $this->setPageHeading(OW::getLanguage()->text('jobads', 'add_ad_heading'));
            $form = new Form('ad_form');
//            $form->setEnctype(Form::ENCTYPE_MULTYPART_FORMDATA);

            $img = new FileField('image');
            $img->setLabel(OW::getLanguage()->text('jobads', 'ad_image'));
            $img->setRequired();
            $form->addElement($img);

            $dsc = new WysiwygTextarea('description');
            $dsc->setLabel(OW::getLanguage()->text('jobads', 'ad_description'));
            $dsc->setRequired();
            $form->addElement($dsc);
            if($startupObjects != null){
                $startup = new Selectbox("startup");
                $startup->setLabel('استارتاپ');
//                exit(json_encode($startupObjects));
                foreach ($startupObjects as $sobject){
                    $startup->addOption($sobject->id , $sobject->title);
                }
                $form->addElement($startup);
                $hasStartup = true;
            }
            $this->assign('hasStartup' , $hasStartup);

    //
            $allSkills = ADDSKILLS_BOL_SkillsDao::getInstance()->getAllSkills();
    //
            $skills = new Selectbox("skills");
            $skills->setLabel(OW::getLanguage()->text('jobads', 'ad_skills'));
            $skills->setId("select_skills");
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
                    $photoFile = $_FILES['photo'];
                    $values = $form->getValues();
                    $image_element = $form->getElement('image');
                    $chosen_skills = explode(',', $values['chosen_skills']);
                    $chosen_skills = json_encode($chosen_skills);
                    $ad = JOBADS_BOL_AdDao::getInstance()->addAd($image_element , $values['description'] , $chosen_skills , $values['email'] , $userId);
                    if($hasStartup == true){
                        if(! $values['startup'] == null){
                            STARTUPS_BOL_AdDao::getInstance()->addAd($values['startup'] , $userId , $ad->id);
                        }
                    }
                    $this->redirect('jobads');
                }
            }
        }
        else{
            throw new AuthenticateException();
        }
    }
    public function deletead($params){
        $ad = JOBADS_BOL_AdDao::getInstance()->getAd($params['adId']);
        if(OW::getUser()->isAuthenticated()){
            $userId = OW::getUser()->getId();
            if($ad->userid == $userId){
                JOBADS_BOL_AdDao::getInstance()->deleteAd($params['adId']);
                if(STARTUPS_BOL_AdDao::getInstance()->existStartup($ad->id)){
//                    $startupId = STARTUPS_BOL_AdDao::getInstance()->getStartupId($ad->id);
                    STARTUPS_BOL_AdDao::getInstance()->deleteAdsAd($ad->id);
                }
                $this->redirect('jobads');
            }
        }

    }
    public function showad($params){

        $this->setPageTitle("آگهی مشاغل");
        $ad = JOBADS_BOL_AdDao::getInstance()->getAd($params['adId']);
        if($ad == null){
            throw new Redirect404Exception();
        }
        $existStartup = false;
//        exit(json_encode(JOBADS_BOL_AdDao::getInstance()->findById($params['adId'])));
//        exit(json_encode(STARTUPS_BOL_AdDao::getInstance()->existStartup($ad->id)));
        if (STARTUPS_BOL_AdDao::getInstance()->existStartup($ad->id)){
            $existStartup = true;
        }
        if($existStartup == true){
            $startupId = STARTUPS_BOL_AdDao::getInstance()->getStartupId($ad->id);
            $startup = STARTUPS_BOL_StartupDao::getInstance()->getStartup($startupId);
//            exit(json_encode($startupId));
            $this->assign('startup' , $startup);
            $this->assign('startupId' , $startupId);
        }
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
        $this->assign('existStartup' , $existStartup);

    }
}