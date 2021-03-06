<?php

class IISMOBILESUPPORT_CTRL_Admin extends ADMIN_CTRL_Abstract
{

    public function __construct()
    {
        parent::__construct();

        if ( OW::getRequest()->isAjax() )
        {
            return;
        }

        $lang = OW::getLanguage();

        $this->setPageHeading($lang->text('iismobilesupport', 'admin_settings_title'));
        $this->setPageTitle($lang->text('iismobilesupport', 'admin_settings_title'));
        $this->setPageHeadingIconClass('ow_ic_gear_wheel');
    }

    public function versions(){
        $service = IISMOBILESUPPORT_BOL_Service::getInstance();

        $this->assign("sections", $service->getAllSections("versions"));

        $versionForm = new Form('versionsForm');
        $lang = OW::getLanguage();

        $versionNameField = new TextField('version_name');
        $versionNameField->setLabel($lang->text('iismobilesupport','version_name'));
        $versionNameField->setRequired(true);
        $versionForm->addElement($versionNameField);

        $versionCodeField = new TextField('version_code');
        $versionCodeField->setLabel($lang->text('iismobilesupport','version_code'));
        $versionCodeField->addValidator(new IntValidator());
        $versionCodeField->setRequired(true);
        $versionForm->addElement($versionCodeField);

        $typeField = new Selectbox('type');
        $options = array();
        $options[$service::getInstance()->AndroidKey] = 'Android';
        $options[$service::getInstance()->iOSKey] = 'iOS';
        $typeField->setOptions($options);
        $typeField->setHasInvitation(false);
        $typeField->setRequired(true);
        $typeField->setLabel($lang->text('iismobilesupport','type'));
        $versionForm->addElement($typeField);

        $urlField = new TextField('url');
        $urlField->setLabel($lang->text('iismobilesupport','url'));
        $urlField->setRequired(true);
        $versionForm->addElement($urlField);

        $element = new Submit('saveSettings');
        $element->setValue($lang->text('iismobilesupport', 'versions'));
        $versionForm->addElement($element);

        if ( OW::getRequest()->isPost() ) {
            if ($versionForm->isValid($_POST)) {
                $values = $versionForm->getValues();
                $service->saveVersion($values['type'], $values['version_name'], $values['version_code'], $values['url']);
                OW::getFeedback()->info($lang->text('iismobilesupport', 'save_success'));
                $this->redirect(OW::getRouter()->urlForRoute('iismobilesupport-admin-versions'));
            }
        }

        $this->addForm($versionForm);

    }

    public function androidVersions(){
        $service = IISMOBILESUPPORT_BOL_Service::getInstance();
        $this->assign("sections", $service->getAllSections("android-versions"));
        $this->assign('values', $service->getArraysOfVersions($service->AndroidKey));
    }

    public function iosVersions(){
        $service = IISMOBILESUPPORT_BOL_Service::getInstance();
        $this->assign("sections", $service->getAllSections("ios-versions"));
        $this->assign('values', $service->getArraysOfVersions($service->iOSKey));
    }

    public function downloadShow(){

        $config = OW::getConfig();
        $service = IISMOBILESUPPORT_BOL_Service::getInstance();
        $this->assign("sections", $service->getAllSections("download-show"));

        $form = new Form('customHTML');

        $customHtmlRecord = new Textarea('custom_download_link');
        $customHtmlRecord->setLabel(OW::getLanguage()->text('iismobilesupport', 'custom_download_link_label'));
        $customHtmlRecord->setDescription(OW::getLanguage()->text('iismobilesupport', 'custom_download_link_desc'));
        if(OW::getConfig()->getValue('iismobilesupport', 'custom_download_link_code')){
            $customHtmlRecord->setValue(OW::getConfig()->getValue('iismobilesupport', 'custom_download_link_code'));
        }
        $form->addElement($customHtmlRecord);

        $linkActtivation = new CheckboxField('download_activation');
        $linkActtivation->setValue(OW::getConfig()->getValue('iismobilesupport','custom_download_link_activation'));
        $form->addElement($linkActtivation);

        $submit = new Submit('save');
        $form->addElement($submit);

        $this->addForm($form);

        if ( OW::getRequest()->isPost() && $form->isValid($_POST) && OW::getUser()->isAuthenticated() && OW::getUser()->isAdmin())
        {
            $configValue=$form->getElement('custom_download_link')->getValue();
            $configActivate=$form->getElement('download_activation')->getValue();
            $config->saveConfig('iismobilesupport', 'custom_download_link_code', $configValue);
            $config->saveConfig('iismobilesupport', 'custom_download_link_activation', $configActivate);

        }
    }

    public function useMobile(){

    }

    public function deprecateVersion($params){

        $pluginIisSecurity = BOL_PluginDao::getInstance()->findPluginByKey('iissecurityessentials');
        if(isset($pluginIisSecurity) && $pluginIisSecurity->isActive()) {
            $code =$_GET['code'];
            if(!isset($code)){
                throw new Redirect404Exception();
            }
            OW::getEventManager()->trigger(new OW_Event('iissecurityessentials.on.check.request.manager',
                array('senderId' => OW::getUser()->getId(), 'code'=>$code,'activityType'=>'deprecate_mobileVersion')));
        }

        if(!isset($params['id'])){
            throw new Redirect404Exception();
        }else{
            $service = IISMOBILESUPPORT_BOL_Service::getInstance();
            $service->deprecateVersion($params['id']);
            OW::getFeedback()->info(OW::getLanguage()->text('iismobilesupport', 'deprecate_version_success'));
            $this->redirect(OW::getRouter()->urlForRoute('iismobilesupport-admin-versions'));
        }
    }

    public function approveVersion($params){
        $pluginIisSecurity = BOL_PluginDao::getInstance()->findPluginByKey('iissecurityessentials');
        if(isset($pluginIisSecurity) && $pluginIisSecurity->isActive()) {
            $code =$_GET['code'];
            if(!isset($code)){
                throw new Redirect404Exception();
            }
            OW::getEventManager()->trigger(new OW_Event('iissecurityessentials.on.check.request.manager',
                array('senderId' => OW::getUser()->getId(), 'code'=>$code,'activityType'=>'approve_mobileVersion')));
        }
        if(!isset($params['id'])){
            throw new Redirect404Exception();
        }else{
            $service = IISMOBILESUPPORT_BOL_Service::getInstance();
            $service->approveVersion($params['id']);
            OW::getFeedback()->info(OW::getLanguage()->text('iismobilesupport', 'approve_version_success'));
            $this->redirect(OW::getRouter()->urlForRoute('iismobilesupport-admin-versions'));
        }
    }

    public function deleteVersion($params){
        $pluginIisSecurity = BOL_PluginDao::getInstance()->findPluginByKey('iissecurityessentials');
        if(isset($pluginIisSecurity) && $pluginIisSecurity->isActive()) {
            $code =$_GET['code'];
            if(!isset($code)){
                throw new Redirect404Exception();
            }
            OW::getEventManager()->trigger(new OW_Event('iissecurityessentials.on.check.request.manager',
                array('senderId' => OW::getUser()->getId(), 'code'=>$code,'activityType'=>'delete_mobileVersion')));
        }
        if(!isset($params['id'])){
            throw new Redirect404Exception();
        }else{
            $service = IISMOBILESUPPORT_BOL_Service::getInstance();
            $service->deleteVersion($params['id']);
            OW::getFeedback()->info(OW::getLanguage()->text('iismobilesupport', 'delete_version_success'));
            $this->redirect(OW::getRouter()->urlForRoute('iismobilesupport-admin-versions'));
        }
    }

    public function settings()
    {

        $service = IISMOBILESUPPORT_BOL_Service::getInstance();

        $this->assign("sections", $service->getAllSections("settings"));

        $adminForm = new Form('adminForm');      

        $lang = OW::getLanguage();
        $config = OW::getConfig();

        $field = new TextField('fcm_api_key');
        $field->setLabel($lang->text('iismobilesupport','fcm_api_key_label'));
        $field->setValue($config->getValue('iismobilesupport', 'fcm_api_key'));
        $adminForm->addElement($field);

        $field = new TextField('fcm_api_url');
        $field->setLabel($lang->text('iismobilesupport','fcm_api_url_label'));
        $field->setValue($config->getValue('iismobilesupport', 'fcm_api_url'));
        $adminForm->addElement($field);

        $field = new TextField('constraint_user_device');
        $field->setRequired();
        $validator = new IntValidator();
        $validator->setMinValue(2);
        $validator->setMaxValue(999);
        $field->addValidator($validator);
        $field->setLabel($lang->text('iismobilesupport','constraint_user_device_label'));
        $field->setValue($config->getValue('iismobilesupport', 'constraint_user_device'));
        $adminForm->addElement($field);

        $field = new CheckboxField('disable_notification_content');
        $field->setLabel($lang->text('iismobilesupport','disable_notification_content'));
        $field->setValue($config->getValue('iismobilesupport', 'disable_notification_content'));
        $adminForm->addElement($field);
        
        $element = new Submit('saveSettings');
        $element->setValue($lang->text('iismobilesupport', 'admin_save_settings'));
        $adminForm->addElement($element);

        if ( OW::getRequest()->isPost() ) {
            if ($adminForm->isValid($_POST)) {
                $config = OW::getConfig();
                $values = $adminForm->getValues();
                $config->saveConfig('iismobilesupport', 'disable_notification_content', $values['disable_notification_content']);
                $config->saveConfig('iismobilesupport', 'fcm_api_key', $values['fcm_api_key']);
                $config->saveConfig('iismobilesupport', 'constraint_user_device', $values['constraint_user_device']);
                $config->saveConfig('iismobilesupport', 'fcm_api_url', $values['fcm_api_url']);
                OW::getFeedback()->info($lang->text('iismobilesupport', 'user_save_success'));
            }
        }

       $this->addForm($adminForm);
   } 
}
