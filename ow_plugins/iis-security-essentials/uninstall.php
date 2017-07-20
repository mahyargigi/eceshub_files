<?php
$config = OW::getConfig();
if($config->configExists('iissecurityessentials', 'disabled_home_page_action_types'))
{
    $config->deleteConfig('iissecurityessentials', 'disabled_home_page_action_types');
}

try {
    $questionService = BOL_QuestionService::getInstance();
    $questionIds = array();
    $questionNames = array();
    $question = $questionService->findQuestionByName('securityCode');
    $questionIds[] = $question->id;
    $questionNames[]='securityCode';
    $questionService->deleteQuestion($questionIds);
    BOL_QuestionDataDao::getInstance()->deleteByQuestionNamesList($questionNames);
}catch(Exception $e){

}