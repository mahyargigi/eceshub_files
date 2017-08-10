<?php
class STARTUPS_BOL_AdDao extends OW_BaseDao{

    private static $classInstance;

    const STARTUP_ID = 'startupId';
    const USER_ID = 'userId';
    const AD_ID = 'adId';

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
        return 'STARTUPS_BOL_Ad';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'startups_ad';
    }
    public function addAd($startupId , $userId , $adId){
        $ad = new STARTUPS_BOL_Ad();
        $ad->startupId = $startupId;
        $ad->userId = $userId;
        $ad->adId = $adId;
        STARTUPS_BOL_AdDao::getInstance()->save($ad);
    }
    public function existStartup($adId){
        $example = new OW_Example();
        $example->andFieldEqual(self::AD_ID , $adId);
        $answer = $this->findListByExample($example);
        if(empty($answer)){
            return false;
        }
        else{
            return true;
        }
    }
    public function existAd($startupId){
        $example = new OW_Example();
        $example->andFieldEqual(self::STARTUP_ID , $startupId);
        $answer = $this->findListByExample($example);
        if(empty($answer)){
            return false;
        }
        else{
            return true;
        }
    }

    public function getStartupId($adId){
        $example = new OW_Example();
        $example->andFieldEqual(self::AD_ID , $adId);
//        $example->andFieldEqual(self::USER_ID , $userId);
        $startupId = $this->findById($this->findIdByExample($example))->startupId;
        return $startupId;
    }
    public function deleteStartupAds($startupId){
        $example = new OW_Example();
        $example->andFieldEqual(self::STARTUP_ID , $startupId);
        $ads = $this->findListByExample($example);
        foreach ($ads as $ad){
            $this->deleteById($ad->id);
        }
    }
    public function deleteAdsAd($adId){
        $example = new OW_Example();
        $example->andFieldEqual(self::AD_ID , $adId);
        $ads = $this->findListByExample($example);
        foreach ($ads as $ad){
            $this->deleteById($ad->id);
        }
    }

    public function getStartupAdIds($startupId){
        $example = new OW_Example();
        $example->andFieldEqual(self::STARTUP_ID , $startupId);
        $ads = $this->findListByExample($example);
        $adIds = array();
        foreach ($ads as $ad) {
            array_push($adIds , $ad->adId);
        }
        return $adIds;
    }

}