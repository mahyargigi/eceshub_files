<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/30/2017
 * Time: 2:28 PM
 */
class ADDSKILLS_BOL_Service{

    private static $classInstance;
    public static function getInstance()
    {
        if (self::$classInstance === null) {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    private function __construct()
    {
    }

    public function addSkill($name)
    {
        return ADDSKILLS_BOL_SkillsDao::getInstance()->addSkill($name);
    }

}