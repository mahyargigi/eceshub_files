<?php

class STARTUPS_CTRL_Base extends OW_ActionController{

    private $menu;

    public function __construct()
    {
        parent::__construct();

        $this->menu = $this->getMenu();

    }
    public function index(){
        $this->setPageTitle(OW::getLanguage()->text('startups', 'index_page_title'));
        $this->setPageHeading(OW::getLanguage()->text('startups', 'index_page_heading'));
        $tmpmenu = $this->getMenu();
        $tmpmenu->getElement('latest')->setActive(true);
        $this->addComponent('menu', $tmpmenu);
        $allStartups = STARTUPS_BOL_StartupDao::getInstance()->getAllStartups();
        $count = count($allStartups);
        foreach ($allStartups as $startup ){
            if (OW::getUser()->getId() == $startup->creator){
                $startup->isOwner = true;
            }else{
                $startup->isOwner = false;
            }
        }
        $this->assign('allStartups' , $allStartups);
        $this->assign('count' , $count);
//        exit("everything is alright!");
    }
    public function yourStartups(){
        if(OW::getUser()->isAuthenticated()){
            $userId = OW::getUser()->getId();
            $this->setPageTitle('استارتاپ های شما');
            $this->setPageHeading('استارتاپ های شما');
            $tmpmenu = $this->getMenu();
            $tmpmenu->getElement('yourstartups')->setActive(true);
            $this->addComponent('menu' , $tmpmenu);
            $yourStartups = STARTUPS_BOL_StartupDao::getInstance()->getUserStartups($userId);
            $count = count($yourStartups);
            foreach ($yourStartups as $yourStartup){
                $yourStartup->isOwner = true;
            }
            $this->assign('allStartups' , $yourStartups);
            $this->assign('count' , $count);
        }


    }
    public function newStartup(){

        if (OW::getUser()->isAuthenticated()){
            $userId = OW::getUser()->getId();
            $this->setPageTitle(OW::getLanguage()->text('startups', 'new_startup_title'));
            $this->setPageHeading(OW::getLanguage()->text('startups', 'new_startup_heading'));
            $form = new Form('startup_form');

            $title = new TextField('title');
            $title->setLabel(OW::getLanguage()->text('startups', 'startup_title'));
            $title->setRequired();
            $form->addElement($title);

            $shortDesc = new TextField('shortDesc');
            $shortDesc->setLabel(OW::getLanguage()->text('startups', 'startup_shortDesc'));
            $shortDesc->setRequired();
            $form->addElement($shortDesc);

            $img = new FileField('image');
            $img->setLabel(OW::getLanguage()->text('startups', 'startup_image'));
            $img->setRequired();
            $form->addElement($img);

            $LongDesc = new WysiwygTextarea('LongDesc');
            $LongDesc->setLabel(OW::getLanguage()->text('startups', 'startup_LongDesc'));
            $LongDesc->setRequired();
            $form->addElement($LongDesc);

            $website = new TextField('website');
            $website->setLabel(OW::getLanguage()->text('startups', 'startup_Website'));
//            $website->setRequired();
            $website->addValidator(new UrlValidator());
            $form->addElement($website);

            $address = new TextField('address');
            $address->setLabel(OW::getLanguage()->text('startups', 'startup_Address'));
            $form->addElement($address);

            $telephoneNumber = new TextField('telephoneNumber');
            $telephoneNumber->addValidator(new IntValidator());
            $telephoneNumber->setLabel(OW::getLanguage()->text('startups', 'startup_TelephoneNumber'));
            $form->addElement($telephoneNumber);

            $submit = new Submit('send');
            $submit->setValue(OW::getLanguage()->text('startups', 'form_label_submit'));
            $form->addElement($submit);

            $this->addForm($form);


            if (OW::getRequest()->isPost()) {
                if ($form->isValid($_POST)) {

                    $values = $form->getValues();
                    $val = STARTUPS_BOL_StartupDao::getInstance()->newStartup($values['title'] , $values['LongDesc'] ,$values['image'] , $values['shortDesc'] ,
                        $values['website'] , $values['address'] , $values['telephoneNumber'] , $userId  );
//                    exit($val);
//                    exit(STARTUPS_BOL_StartupDao::getInstance()->test());
                    $this->redirect('startups');
                }
            }



        }
    }
    public function deleteStartup($params){
        if(OW::getUser()->isAuthenticated()){
            $userId = OW::getUser()->getId();
            $startupId = $params['startupId'];
            if(STARTUPS_BOL_StartupDao::getInstance()->getStartup($startupId)->creator == $userId){
                STARTUPS_BOL_StartupDao::getInstance()->deleteStartup($startupId);
                $this->redirect('startups');
            }
        }
    }
    public function showStartup($params){
        if(STARTUPS_BOL_StartupDao::getInstance()->getStartup($params['startupId']) == null){
            throw new Redirect404Exception();
        }
        else {
            $startupId = $params['startupId'];
            $startup = STARTUPS_BOL_StartupDao::getInstance()->getStartup($startupId);
            $userId = OW::getUser()->getId();
            $isLoggedIn = true;
            if ($userId == 0) {
                $isLoggedIn = false;
            }
            $this->assign('isLoggedIn', $isLoggedIn);
            $isLiked = false;
            if (STARTUPS_BOL_LikeDao::getInstance()->isLiked($userId, $startupId)) {
                $isLiked = true;
            }
//        exit(OW::getPluginManager()->getPlugin("startups")->getStaticJsUrl() . 'showstartup.js');
            OW::getDocument()->addScript(OW::getPluginManager()->getPlugin("startups")->getStaticJsUrl() . 'showstartup.js');
            $this->assign('isLiked', $isLiked);
            $this->setPageHeading($startup->title);
            $this->setPageTitle($startup->title);
            $this->assign('startup', $startup);
            $this->assign('startupId', $startupId);
            $tmpmenu = $this->getStartupMenu($startupId);
//        $tmpmenu->getElement('description')->setActive(true);

            $this->addComponent('menu', $tmpmenu);
            if (OW::getUser()->isAuthenticated()) {
                OW::getDocument()->addOnloadScript("
                $('.is-not-liked').live('click' , function (e){
                    $.ajax({
                        type: 'POST',
                        url: '/eceshub/startups/addlike/" . json_encode($userId) . "/" . (string)($startupId) . "',
                        dataType: 'json' ,
                        success:function(data){
                            console.log(data);
                        }
                    });
                });
            ");
                OW::getDocument()->addOnloadScript("
                $('.is-liked').live('click' , function(e){
                    $.ajax({
                        type: 'POST',
                        url: '/eceshub/startups/deletelike/" . json_encode($userId) . "/" . (string)($startupId) . "',
                        dataType: 'json' ,
                        success:function(data){
                            console.log(data);
                        }
                    });
                });
            ");
            }
        }
    }
    public function startupAds($params){
        $this->showStartup($params);
        $startupId = $params['startupId'];
        $adIds = STARTUPS_BOL_AdDao::getInstance()->getStartupAdIds($startupId);
//        exit(json_encode($adIds));
        $ads = array();
        foreach ($adIds as $adId){
            array_push($ads , JOBADS_BOL_AdDao::getInstance()->getAd($adId));
        }
        foreach ($ads as $ad){
            $ad->skills = json_decode($ad->skills);
        }
        $this->assign('adscount' ,count($ads) );
        $this->assign('ads' , $ads);
    }
    public function startupNews($params){
        $this->showStartup($params);
        $startupId = $params['startupId'];
        $startup = STARTUPS_BOL_StartupDao::getInstance()->getStartup($startupId);
        $this->assign('startup' , $startup);
        $news = STARTUPS_BOL_NewsDao::getInstance()->getStartupNews($startupId);
        $newsCount = count($news);
        $this->assign('newsCount' , $newsCount);
        $this->assign('news' , $news);
    }
    public function addStartupNews($params){
        if (OW::getUser()->isAuthenticated()){
            $userId = OW::getUser()->getId();
            $creator = STARTUPS_BOL_StartupDao::getInstance()->getStartup($params['startupId'])->creator;
            if($creator = $userId){
                $this->setPageTitle('افزودن خبر');
                $this->setPageHeading('افزودن خبر');
                $form = new Form('startup_news');

                $title = new TextField('title');
                $title->setLabel('عنوان');
                $title->setRequired();
                $form->addElement($title);

                $description = new WysiwygTextarea('description');
                $description->setLabel('توضیحات');
                $description->setRequired();
                $form->addElement($description);

                $image = new FileField('image');
                $image->setLabel('تصویر');
                $form->addElement($image);

                $submit = new Submit('send');
                $submit->setValue('ارسال');
                $form->addElement($submit);
                $this->addForm($form);
            }
            else{
                $this->redirect('startups');
            }
            if(OW::getRequest()->isPost()){
                if ($form->isValid($_POST)){
                    $values = $form->getValues();
                    STARTUPS_BOL_NewsDao::getInstance()->saveNews($values['title'] , $values['description'] , $values['image'] , $params['startupId']);
                }
            }


        }
    }
    public function addLike($params){
        if(STARTUPS_BOL_LikeDao::getInstance()->isLiked($params['userId'] , $params['startupId']) == false){
            STARTUPS_BOL_LikeDao::getInstance()->newLike($params['userId'] , $params['startupId']);
            exit(json_encode("Liked!"));
        }
    }
    public function unLike($params){
        if(STARTUPS_BOL_LikeDao::getInstance()->isLiked($params['userId'] , $params['startupId']) == true){
            $test = STARTUPS_BOL_LikeDao::getInstance()->disLike($params['userId'] , $params['startupId']);
            exit(json_encode("UnLiked!"));
        }

    }
    private function getStartupMenu($id){
        $validLists = array('description', 'jobads', 'news');
        $classes = array('ow_ic_push_pin', 'ow_ic_clock', 'ow_ic_user');
        $language = OW::getLanguage();
        $menuItems = array();
        $order = 0;
        foreach ($validLists as $type){
            $item = new BASE_MenuItem();
            $item->setLabel($language->text('startups', 'menu_' . $type));
            if($type == 'description'){
                $item->setUrl(OW::getRouter()->urlForRoute('startups_showstartup' , array('startupId'=>$id) ));
            }
            else if($type == 'jobads'){
                $item->setUrl(OW::getRouter()->urlForRoute('startups_startupads' , array ("startupId"=>$id)));
            }
            else if($type == 'news'){
                $item->setUrl(OW::getRouter()->urlForRoute('startups_startupnews' , array ("startupId"=>$id)) );
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
        $menu = new BASE_CMP_ContentMenu($menuItems);
        return $menu;
    }
    private function getMenu(){
        $validLists = array('newstartup', 'latest', 'yourstartups');
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
            $item->setLabel($language->text('startups', 'menu_' . $type));
            if($type == 'newstartup'){
                $item->setUrl(OW::getRouter()->urlForRoute('startups.newstartup'));
            }
            else if($type == 'latest'){
                $item->setUrl(OW::getRouter()->urlForRoute('startups'));
            }
            else if($type == 'yourstartups'){
                $item->setUrl(OW::getRouter()->urlForRoute('startups_yourstartups'));
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

}