<?php
class STARTUPS_BOL_StartupDao extends OW_BaseDao{
    private static $classInstance;
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
        return 'STARTUPS_BOL_Startup';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'startups_startup';
    }

    public function getAllStartups(){
        return $this->findAll();

    }

    public function getStartup($id){
        return $this->findById($id);
    }

    public function newStartup($title , $description , $image , $shortDescription , $website , $address , $telephoneNumber , $creator){
//        $stt = "here is runned!";

        $startup = new STARTUPS_BOL_Startup();
        $startup->title = $title;
        $startup->description = $description;
        $startup->image = $image;
        $startup->shortDescription = $shortDescription;
        $startup->website = $website;
        $startup->address = $address;
        $startup->telephoneNumber = $telephoneNumber;
        $startup->creator = $creator;
//        return $stt;


        STARTUPS_BOL_StartupDao::getInstance()->save($startup);
//        return $startup;
    }
}