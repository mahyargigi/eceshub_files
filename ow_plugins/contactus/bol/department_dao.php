<?php

class CONTACTUS_BOL_DepartmentDao extends OW_BaseDao
{

    /**
     * Constructor.
     *
     */
    protected function __construct()
    {
        parent::__construct();
    }
    /**
     * Singleton instance.
     *
     * @var CONTACTUS_BOL_DepartmentDao
     */
    private static $classInstance;

    /**
     * Returns an instance of class (singleton pattern implementation).
     *
     * @return CONTACTUS_BOL_DepartmentDao
     */
    public static function getInstance()
    {
        if ( self::$classInstance === null )
        {
            self::$classInstance = new self();
        }

        return self::$classInstance;
    }

    /**
     * @see OW_BaseDao::getDtoClassName()
     *
     */
    public function getDtoClassName()
    {
        return 'CONTACTUS_BOL_Department';
    }

//    public function getCusto(){
//        $wx = new OW_Example();
//        $wx->andFieldBetween('' , '');
//        $ret = $this->findIdByExample($wx);
//        return $ret;
//    }

    /**
     * @see OW_BaseDao::getTableName()
     *
     */
    public function getTableName()
    {
        return OW_DB_PREFIX . 'contactus_department';
    }
}