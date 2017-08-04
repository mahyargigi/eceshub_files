<?php

class JOBADS_BOL_AdDao extends OW_BaseDao{

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
        return 'JOBADS_BOL_Ad';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'jobads_ad';
    }
    public function addAd($image , $description , $skills , $email , $userid)
    {
        $advertise = new JOBADS_BOL_Ad();
        $advertise->description = $description;
        $advertise->skills = $skills;
        $advertise->email = $email;
        $advertise->userid = $userid;

        $pluginfilesDir = OW::getPluginManager()->getPlugin('jobads')->getUserFilesDir();
        $tmpImgPath = $pluginfilesDir.uniqid().'.jpg';
//        $tmpImage = new UTIL_Image($image);
//        $tmpImage->saveImage($tmpImgPath);
        $advertise->image = $tmpImgPath;
//        $advertise->image = $image;
//        $tmpImgPath = $pluginfilesDir.uniqid().'.jpg';
//        $tmpImage = new UTIL_Image($image);
//        $tmpImage->copyImage($tmpImgPath);
        $advertise->image = $tmpImgPath;

        JOBADS_BOL_AdDao::getInstance()->save($advertise);
        return $advertise;
    }
    public function getAllAds(){
        return $this->findAll();
    }
    public function getAd($id){
        return $this->findById($id);
    }
}