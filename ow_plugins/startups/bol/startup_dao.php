<?php
class STARTUPS_BOL_StartupDao extends OW_BaseDao{
    private static $classInstance;
    const CREATOR = 'creator';
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
    public function getUserStartups($userId){
        $example = new OW_Example();
        $example->andFieldEqual(self::CREATOR , $userId);
        return($this->findListByExample($example));
    }
    public function deleteStartup($startupId){
        $this->deleteById($startupId);
        $adIds = STARTUPS_BOL_AdDao::getInstance()->getStartupAdIds($startupId);
        STARTUPS_BOL_AdDao::getInstance()->deleteStartupAds($startupId);
        STARTUPS_BOL_NewsDao::getInstance()->deleteStartupNews($startupId);
        foreach ($adIds as $adId){
            JOBADS_BOL_AdDao::getInstance()->deleteAd($adId);
        }
        return true;
    }
}