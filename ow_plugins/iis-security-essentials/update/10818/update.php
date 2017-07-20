<?php
/**
 * @author Mohammad Agha Abbasloo
 */

try {
    $languageService = Updater::getLanguageService();

    $languageService->addOrUpdateValueByLanguageTag('fa-IR', 'iissecurityessentials', 'change_user_password_by_code', 'تغییر رمز عبور');
    $languageService->addOrUpdateValueByLanguageTag('en', 'iissecurityessentials', 'change_user_password_by_code', 'change user password');

    $languageService->addOrUpdateValueByLanguageTag('fa-IR', 'iissecurityessentials', 'email_is_not_registered', 'کاربری با ایمیل وارد شده یافت نشد');
    $languageService->addOrUpdateValueByLanguageTag('en', 'iissecurityessentials', 'email_is_not_registered', 'No user found with this email');

    $languageService->addOrUpdateValueByLanguageTag('fa-IR', 'iissecurityessentials', 'password_changed_successfully', 'رمز عبور با موفقیت تغییر کرد');
    $languageService->addOrUpdateValueByLanguageTag('en', 'iissecurityessentials', 'password_changed_successfully', 'user password changed successfully');
}catch(Exception $e){

}