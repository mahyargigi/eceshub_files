<?php

/**
 * iismainpage
 */
/**
 * @author Yaser Alimardany <yaser.alimardany@gmail.com>
 * @package ow_plugins.iismainpage
 * @since 1.0
 */

class IISMAINPAGE_BOL_Service
{

    static $item_count = 20;

    /**
     * Constructor.
     */
    private function __construct()
    {
    }
    /**
     * Singleton instance.
     *
     * @var IISMAINPAGE_BOL_Service
     */
    private static $classInstance;

    /**
     * Returns an instance of class (singleton pattern implementation).
     *
     * @return IISMAINPAGE_BOL_Service
     */
    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    public function getMenu($type){
        $menus = array();
        $imgSource = OW::getPluginManager()->getPlugin('iismainpage')->getStaticUrl() . 'img/';

        $orders = OW::getConfig()->getValue('iismainpage', 'orders');
        if($orders==''){
            $orders = $this->getMenuByDefaultOrder();
        }else{
            $orders = json_decode($orders);
        }

        foreach ($orders as $orderMenu) {
            if ($orderMenu =='dashboard' && OW::getPluginManager()->isPluginActive('newsfeed')) {
                $menu = array();
                $menu['title'] = $this->getLableOfMenu($orderMenu);
                $menu['iconUrl'] = $imgSource . 'dashboard.svg';
                if ($type == 'dashboard') {
                    $menu['active'] = true;
                    $menu['iconUrl'] = $imgSource . 'dashboard_select.svg';
                } else {
                    $menu['active'] = false;
                }
                $menu['class'] = 'main_menu_dashboard';
                $menu['url'] = OW::getRouter()->urlForRoute('iismainpage.dashboard');
                $menus[] = $menu;
            }

            if ($orderMenu =='user-groups' && OW::getPluginManager()->isPluginActive('groups')) {
                $menu = array();
                $menu['title'] = $this->getLableOfMenu($orderMenu);
                $menu['iconUrl'] = $imgSource . 'groups.svg';
                if ($type == 'user-groups') {
                    $menu['active'] = true;
                    $menu['iconUrl'] = $imgSource . 'groups_select.svg';
                } else {
                    $menu['active'] = false;
                }
                $menu['class'] = 'main_menu_user_groups';
                $menu['url'] = OW::getRouter()->urlForRoute('iismainpage.user.groups');
                $menus[] = $menu;
            }

            if ($orderMenu =='friends' && OW::getPluginManager()->isPluginActive('friends')) {
                $menu = array();
                $menu['title'] = $this->getLableOfMenu($orderMenu);
                $menu['iconUrl'] = $imgSource . 'friend.svg';
                if ($type == 'friends') {
                    $menu['active'] = true;
                    $menu['iconUrl'] = $imgSource . 'friend_select.svg';
                } else {
                    $menu['active'] = false;
                }
                $menu['class'] = 'main_menu_friends';
                $menu['url'] = OW::getRouter()->urlForRoute('iismainpage.friends');
                $menus[] = $menu;
            }

            if ($orderMenu =='mailbox' && OW::getPluginManager()->isPluginActive('mailbox')) {
                $menu = array();
                $menu['title'] = $this->getLableOfMenu($orderMenu);
                $menu['iconUrl'] = $imgSource . 'chat.svg';
                $menu['class'] = 'menu_messages';
                if ($type == 'mailbox') {
                    $menu['active'] = true;
                    $menu['iconUrl'] = $imgSource . 'chat_select.svg';
                } else {
                    $menu['active'] = false;
                }
                $menu['class'] = 'main_menu_mailbox';
                $menu['url'] = OW::getRouter()->urlForRoute('iismainpage.mailbox');
                $menus[] = $menu;
            }

            if($orderMenu =='settings'){
                $menu = array();
                $menu['title'] = $this->getLableOfMenu($orderMenu);
                $menu['iconUrl'] = $imgSource . 'Settings.svg';
                if ($type == 'settings') {
                    $menu['active'] = true;
                    $menu['iconUrl'] = $imgSource . 'Settings_select.svg';
                } else {
                    $menu['active'] = false;
                }
                $menu['class'] = 'main_menu_settings';
                $menu['url'] = OW::getRouter()->urlForRoute('iismainpage.settings');
                $menus[] = $menu;
            }
        }

        return $menus;
    }

    /***
     * @return array
     */
    public function getMenuByDefaultOrder(){
        $list = array();
        $list[] = 'dashboard';
        $list[] = 'user-groups';
        $list[] = 'friends';
        $list[] = 'mailbox';
        $list[] = 'settings';
        return $list;
    }

    /***
     * @param $list
     */
    public function savePageOrdered($list){
        OW::getConfig()->saveConfig('iismainpage', 'orders', json_encode($list));
    }

    public function getLableOfMenu($key){
        $languages = OW::getLanguage();
        if($key == 'dashboard'){
            return $languages->text('base', 'console_item_label_dashboard');
        }else if($key == 'user-groups'){
            return $languages->text('groups', 'group_list_menu_item_my');
        }else if($key == 'friends'){
            return $languages->text('friends', 'notification_section_label');
        }else if($key == 'mailbox'){
            return $languages->text('mailbox', 'messages_console_title');
        }else if($key == 'settings'){
            return $languages->text('iismainpage', 'settings');
        }

        return '';
    }

    public function isPluginExist($key){
        if($key == 'dashboard'){
            OW::getPluginManager()->isPluginActive('newsfeed');
        }else if($key == 'user-groups'){
            OW::getPluginManager()->isPluginActive('groups');
        }else if($key == 'friends'){
            OW::getPluginManager()->isPluginActive($key);
        }else if($key == 'mailbox'){
            OW::getPluginManager()->isPluginActive($key);
        }

        return true;
    }
}