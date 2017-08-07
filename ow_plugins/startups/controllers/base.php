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
//        $tmpmenu->getElement('yourstartups')->setActive(true);
//        exit(gettype($tmpmenu));
        $this->addComponent('menu', $tmpmenu);
//        STARTUPS_BOL_StartupDao::getInstance()->test();
//        exit("yooriii");
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
    public function newStartup(){
//        $testarr = array();
//        array_push($testarr , 'hi');
//        array_push($testarr , 'bye');
//        array_push($testarr , 'zoooo');
//        if (in_array('hi', $testarr))
//        {
//            unset($testarr[array_search('strawberry',$testarr)]);
//        }
//        exit(json_encode($testarr));

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
    public function showStartup($params){
        $startupId = $params['startupId'];
        $startup = STARTUPS_BOL_StartupDao::getInstance()->getStartup($startupId);
        $this->assign('startup' , $startup);
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
                $item->setUrl(OW::getRouter()->urlForRoute('startups'));
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