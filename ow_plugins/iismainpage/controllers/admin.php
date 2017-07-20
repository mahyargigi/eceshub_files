<?php




class IISMAINPAGE_CTRL_Admin extends ADMIN_CTRL_Abstract
{

    public function index($params)
    {
        $service = IISMAINPAGE_BOL_Service::getInstance();
        $orders = OW::getConfig()->getValue('iismainpage', 'orders');
        $list = $orders!=''?json_decode(OW::getConfig()->getValue('iismainpage', 'orders')):null;
        $list_result = array();
        if($list == null || empty($list)){
            $list = $service->getMenuByDefaultOrder();
        }

        foreach ($list as $item){
            $list_result[] = array('id'=>$item, 'label' => $service->getLableOfMenu($item));
        }

        $this->assign('list', $list_result);
    }

    public function ajaxSaveOrder()
    {
        if (!empty($_POST['list']) && is_array($_POST['list'])) {
            $service = IISMAINPAGE_BOL_Service::getInstance();
            $list = array();
            foreach ($_POST['list'] as $index => $id) {
                $list[] = $id;
            }
            $service->savePageOrdered($list);
        }
    }
}
