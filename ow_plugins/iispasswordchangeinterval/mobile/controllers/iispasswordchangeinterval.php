<?php

/**
 * Copyright (c) 2016, Yaser Alimardany
 * All rights reserved.
 */

/**
 *
 * @author Yaser Alimardany <yaser.alimardany@gmail.com>
 * @package ow_plugins.iispasswordchangeinterval.controllers
 * @since 1.0
 */
class IISPASSWORDCHANGEINTERVAL_MCTRL_Iispasswordchangeinterval extends OW_MobileActionController
{
    private $service;

    public function __construct()
    {
        parent::__construct();

        $this->service = IISPASSWORDCHANGEINTERVAL_BOL_Service::getInstance();
    }

    /**
     * @param null $params
     */
    public function index($params = NULL)
    {
        if (!OW::getUser()->isAuthenticated() || OW::getUser()->isAdmin()) {
            $this->redirect(OW_URL_HOME);
        }

        $passwordValidation = $this->service->getCurrentUser();
        if ($passwordValidation != null && !$passwordValidation->valid) {
            $this->assign('password_is_invalid', true);
            if ($this->service->isTokenExpired($passwordValidation->tokentime)) {
                $this->assign('token_is_expired', true);
                $this->assign('resendEmailChangePasswordUrl', OW::getRouter()->urlForRoute('iispasswordchangeinterval.resend-link-generate-token', array('username' => $passwordValidation->username)));
            } else {
                $this->assign('token_is_expired', false);
                $receiverId = uniqid();
                $code='';
                $iisSecuritymanagerEvent= OW::getEventManager()->trigger(new OW_Event('iissecurityessentials.on.generate.request.manager',
                    array('senderId'=>Ow::getUser()->getId(),'receiverId'=>$receiverId,'isPermanent'=>true,'activityType'=>'resend_passwordLink')));
                if(isset($iisSecuritymanagerEvent->getData()['code'])){
                    $code = $iisSecuritymanagerEvent->getData()['code'];
                }
                $this->assign('resendEmailChangePasswordUrl', OW::getRequest()->buildUrlQueryString(
                    OW::getRouter()->urlForRoute('iispasswordchangeinterval.resend-link'),array('code'=>$code)));
            }
        } else if ($passwordValidation != null && $passwordValidation->valid && !$this->service->isChangable($passwordValidation)) {
            $this->redirect(OW_URL_HOME);
        } else {
            $username = OW::getUser()->getUserObject()->username;
            if($passwordValidation!=null){
                $username = $passwordValidation->username;
            }else{
                $this->service->updateTimePasswordChanged(OW::getUser()->getUserObject()->getJoinStamp());
            }
            $changePassword = BOL_UserService::getInstance()->getResetPasswordForm('change-user-password');
            $changePassword->setAction(OW::getRouter()->urlForRoute('iispasswordchangeinterval.change-user-password-with-username', array('username' => $username)));
            $changePassword->bindJsFunction(Form::BIND_SUCCESS, "function( json ){if( json.result ){window.location.reload();}} ");
            $this->addForm($changePassword);
            $this->assign('formText', OW::getLanguage()->text('base', 'reset_password_form_text', array('username' => $username)));
            $this->assign('password_is_invalid', false);
        }
    }

    /**
     * @throws Redirect404Exception
     */
    public function resendlLink()
    {
        if (!OW::getUser()->isAuthenticated()) {
            throw new Redirect404Exception();
        }
        $pluginIisSecurity = BOL_PluginDao::getInstance()->findPluginByKey('iissecurityessentials');
        if(isset($pluginIisSecurity) && $pluginIisSecurity->isActive()) {
            $code =$_GET['code'];
            if(!isset($code)){
                throw new Redirect404Exception();
            }
            OW::getEventManager()->trigger(new OW_Event('iissecurityessentials.on.check.request.manager',
                array('senderId' => ow::getUser()->getId(), 'code'=>$code,'activityType'=>'resend_passwordLink')));
        }

        $passwordValidation = $this->service->getCurrentUser();
        if ($this->service->isTokenExpired($passwordValidation->tokentime)) {
            $this->service->resendLinkTotUserByUsername(true, $passwordValidation->username);
        } else {
            $this->service->resendLinkTotUserByUsername(false, $passwordValidation->username);
        }
        OW::getFeedback()->info(OW::getLanguage()->text('iispasswordchangeinterval', 'change_password_link_sent'));
        $this->redirect(OW_URL_HOME);
    }

    /**
     * @param $params
     * @throws Redirect404Exception
     */
    public function resendlLinkGenerateToken($params)
    {
        $username = $params['username'];
        if ($username == null) {
            throw new Redirect404Exception();
        } else {
            $passwordValidation = $this->service->getUserByUsername($username);
            if ($passwordValidation == null) {
                throw new Redirect404Exception();
            } else if ($passwordValidation->valid) {
                $this->redirect(OW_URL_HOME);
            } else {
                if ($this->service->isTokenExpired($passwordValidation->tokentime)) {
                    $this->service->resendLinkTotUserByUsername(true, $username);
                } else {
                    $this->service->resendLinkTotUserByUsername(false, $username);
                }
                OW::getFeedback()->info(OW::getLanguage()->text('iispasswordchangeinterval', 'change_password_link_sent'));
                $this->redirect(OW_URL_HOME);
            }
        }
    }

    /**
     * @param $params
     * @throws AuthenticateException
     */
    public function changeUserPassword($params)
    {
        if ($params['token']) {
            $passwordValidationByToken = $this->service->getUserByToken($params['token']);
            $password = $_POST['password'];
            $repeatPassword = $_POST['repeatPassword'];

            $redirectUrl = OW::getRouter()->urlForRoute('iispasswordchangeinterval.check-validate-password', array('token' => $params['token']));

            if ($passwordValidationByToken == null) {
                throw new AuthenticateException();
            } else if ($password == null) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_empty'), $redirectUrl);
            } else if ($repeatPassword == null) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'repeated_password_is_empty'), $redirectUrl);
            } else if ($password != $repeatPassword) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_not_equal_with_repeated_password'), $redirectUrl);
            }

            $user = BOL_UserService::getInstance()->findByUsername($passwordValidationByToken->username);
            if (BOL_UserService::getInstance()->hashPassword($password) == $user->password) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_equal_with_old_password'), $redirectUrl);
            }

            $form = BOL_UserService::getInstance()->getResetPasswordForm('change-user-password');
            $form->getElement('password')->addValidator(new NewPasswordValidator());
            if (!$form->isValid($_POST)) {
                $errors = $form->getElement('password')->getErrors();
                if (sizeof($errors) > 0) {
                    $this->setErrorAndRedirectToCheckValidatePassword($errors[0], $redirectUrl);
                } else {
                    $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_not_secure'), $redirectUrl);
                }
            } else {
                BOL_UserService::getInstance()->updatePassword($user->getId(), $password);
                $this->redirect(OW_URL_HOME);
            }

        } else {
            throw new AuthenticateException();
        }
    }

    /**
     * @param $params
     * @throws AuthenticateException
     */
    public function changeUserPasswordWithUsername($params)
    {
        if ($params['username']) {
            $passwordValidationByToken = $this->service->getUserByUsername($params['username']);
            $password = $_POST['password'];
            $repeatPassword = $_POST['repeatPassword'];
            $redirectUrl = OW::getRouter()->urlForRoute('iispasswordchangeinterval.change-password');

            if ($passwordValidationByToken == null) {
                throw new AuthenticateException();
            } else if ($password == null) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_empty'), $redirectUrl);
            } else if ($repeatPassword == null) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'repeated_password_is_empty'), $redirectUrl);
            } else if ($password != $repeatPassword) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_not_equal_with_repeated_password'), $redirectUrl);
            }

            $user = BOL_UserService::getInstance()->findByUsername($passwordValidationByToken->username);
            if (BOL_UserService::getInstance()->hashPassword($password) == $user->password) {
                $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_equal_with_old_password'), $redirectUrl);
            }

            $form = BOL_UserService::getInstance()->getResetPasswordForm('change-user-password');
            $form->getElement('password')->addValidator(new NewPasswordValidator());
            if (!$form->isValid($_POST)) {
                $errors = $form->getElement('password')->getErrors();
                if (sizeof($errors) > 0) {
                    $this->setErrorAndRedirectToCheckValidatePassword($errors[0], $redirectUrl);
                } else {
                    $this->setErrorAndRedirectToCheckValidatePassword(OW::getLanguage()->text('iispasswordchangeinterval', 'password_is_not_secure'), $redirectUrl);
                }
            } else {
                BOL_UserService::getInstance()->updatePassword($user->getId(), $password);
                $this->redirect(OW_URL_HOME);
            }
        } else {
            throw new AuthenticateException();
        }
    }

    /**
     * @param $msg
     * @param $redirectUrl
     */
    public function setErrorAndRedirectToCheckValidatePassword($msg, $redirectUrl)
    {
        OW::getFeedback()->error($msg);
        $this->redirect($redirectUrl);
    }

    /**
     * @param $params
     * @throws Redirect404Exception
     */
    public function invalidPassword($params)
    {
        $username = $params['username'];
        $passwordValidation = $this->service->getUserByUsername($username);
        if ($passwordValidation == null) {
            throw new Redirect404Exception();
        } else {
            $this->assign('token_is_expired', $this->service->isTokenExpired($passwordValidation->tokentime));
            $this->assign('resendEmailChangePasswordUrl', OW::getRouter()->urlForRoute('iispasswordchangeinterval.resend-link-generate-token', array('username' => $username)));
        }
    }

    /**
     * @param $params
     * @throws Redirect404Exception
     */
    public function checkValidatePassword($params)
    {
        $passwordValidation = $this->service->getUserByToken($params['token']);
        if ($passwordValidation == null) {
            throw new Redirect404Exception();
        } else if ($passwordValidation->valid) {
            $this->redirect(OW_URL_HOME);
        } else {
            $isTokenExpired = $this->service->isTokenExpired($passwordValidation->tokentime);
            if ($isTokenExpired) {
                $this->assign('token_is_expired', true);
                $this->assign('resendEmailChangePasswordUrl', OW::getRouter()->urlForRoute('iispasswordchangeinterval.resend-link-generate-token', array('username' => $passwordValidation->username)));
            } else {
                $this->assign('token_is_expired', false);
                $this->assign('formText', OW::getLanguage()->text('base', 'reset_password_form_text', array('username' => $passwordValidation->username)));
                $changePassword = BOL_UserService::getInstance()->getResetPasswordForm('change-user-password');
                $changePassword->setAction(OW::getRouter()->urlForRoute('iispasswordchangeinterval.change-user-password', array('token' => $passwordValidation->token)));
                $changePassword->bindJsFunction(Form::BIND_SUCCESS, "function( json ){if( json.result ){window.location.reload();}} ");
                $this->addForm($changePassword);
            }
        }
    }
}


class NewPasswordValidator extends BASE_CLASS_PasswordValidator
{
    public function __construct()
    {
        parent::__construct();
    }

}
