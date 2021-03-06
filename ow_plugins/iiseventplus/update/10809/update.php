<?php
/**
 * @author Seyed Ismail Mirvakili
 * Date: 7/1/2017
 * Time: 4:17 PM
 */

$languageService = Updater::getLanguageService();

$languages = $languageService->getLanguages();
$langFaId = null;
foreach ($languages as $lang) {
    if ($lang->tag == 'fa-IR') {
        $langFaId = $lang->id;
    }
}

if ($langFaId != null) {
    $languageService->addOrUpdateValue($langFaId, 'iiseventplus', 'feed_add_file_string', 'فایل <a href="{$fileUrl}">{$fileName}</a>  را در <a href="{$eventUrl}">{$eventTitle}</a> بارگذاری کرد');
    $languageService->addOrUpdateValue($langFaId, 'iiseventplus', 'notif_add_file_string', '<a href="{$userUrl}">{$userName}</a>  فایل <a href="{$eventUrl}">{$fileName}</a>  را در <a href="{$eventUrl}">{$eventTitle}</a> بارگذاری کرد');
    $languageService->addOrUpdateValue($langFaId, 'iiseventplus', 'file_list_widget_empty', 'هیچ فایلی وجود ندارد.');
    $languageService->addOrUpdateValue($langFaId, 'iiseventplus', 'files_count', 'تعداد کل فایل‌ها');
}