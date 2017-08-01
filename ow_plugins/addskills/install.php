<?php
//BOL_LanguageService::getInstance()->addPrefix('addskills', 'add skills');
//$path = OW::getPluginManager()->getPlugin('addskills')->getRootDir() . 'langs.zip';
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('addskills')->getRootDir() . 'langs.zip', 'addskills');
//OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('addskills')->getRootDir() . 'langs.zip', 'addskills');
$sql = "CREATE TABLE `" . OW_DB_PREFIX . "addskills_skills` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE=MyISAM
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql);
//$line = fopen("allLinkedSkills.txt" , "r");
//$line = file("allLinkedSkills.txt");
//foreach ($line as $value){
//    file_put_contents( "test.txt" , $value , FILE_APPEND);
//}
//
//$myfile = fopen("static/allLinkedSkills.txt", "r") or die("Unable to open file!");
//// Output one line until end-of-file
//while(!feof($myfile)) {
//    exit(fgets($myfile));
//}
//fclose($myfile);