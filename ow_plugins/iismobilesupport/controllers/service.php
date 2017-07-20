<?php

class IISMOBILESUPPORT_CTRL_Service extends OW_ActionController
{

    public function useMobile($params)
    {
        $service = IISMOBILESUPPORT_BOL_Service::getInstance();
        if(!$service->isUserShoouldUseOnlyMobile()){
            $this->redirect(OW_URL_HOME);
        }else {
            $androidLastVersion = $service->getLastVersions($service->AndroidKey);
            $iosLastVersion = $service->getLastVersions($service->iOSKey);

            if($androidLastVersion != null){
                $this->assign('androidDownloadUrl', $androidLastVersion->url);
            }

            if($iosLastVersion != null){
                $this->assign('iosDownloadUrl', $iosLastVersion->url);
            }

            $cssUrl = OW::getPluginManager()->getPlugin('iismobilesupport')->getStaticCssUrl() . "iismobilesupport.css";
            OW::getDocument()->addStyleSheet($cssUrl);

            $masterPageFileDir = OW::getThemeManager()->getMasterPageTemplate('blank');
            OW::getDocument()->getMasterPage()->setTemplate($masterPageFileDir);
            $this->assign('logout', '<a href="' . OW::getRouter()->urlForRoute('base_sign_out') . '">' . OW::getLanguage()->text('base', 'console_item_label_sign_out') . '</a>');
        }
    }
}