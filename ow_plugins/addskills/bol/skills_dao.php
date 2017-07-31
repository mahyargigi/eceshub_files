<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7/30/2017
 * Time: 12:52 PM
 */
class ADDSKILLS_BOL_SkillsDao extends OW_BaseDao
{
    protected function __construct()
    {
        parent::__construct();
    }
    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }
    public function getDtoClassName()
    {
        return 'ADDSKILLS_BOL_Skills';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'addskills_skills';
    }
    public function suggestSkill($str){
        $exmp = new OW_Example();
        $exmp->andFieldLike($str);
    }
}