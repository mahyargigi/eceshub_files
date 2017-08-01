<?php
OW::getRouter()->addRoute(new OW_Route('addskills.upload', 'uploadcc', "ADDSKILLS_CTRL_Add", 'upload'));
if(!OW::getConfig()->configExists('addskills', "save_skills")){
    OW::getConfig()->addConfig('addskills', "save_skills", false); //install
}
if(!OW::getConfig()->getValue('addskills', "save_skills")){
//    echo "hiiiii";
    $file_directory = OW::getPluginManager()->getPlugin("addskills")->getStaticDir()."allLinkedSkills.txt";
    $myfile = fopen($file_directory, "r") or die("Unable to open file!");
//    ADDSKILLS_BOL_Service::getInstance()->addSkill("chert");
// Output one line until end-of-file
    while(!feof($myfile)) {
        ADDSKILLS_BOL_Service::getInstance()->addSkill(fgets($myfile));
    }
    fclose($myfile);
    OW::getConfig()->saveConfig('addskills', "save_skills", true); //install
}


