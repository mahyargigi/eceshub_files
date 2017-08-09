<?php
class STARTUPS_BOL_LikeDao extends OW_BaseDao{

    private static $classInstance;

    const USER_ID = 'userid';
    const STARTUP_ID = 'startupid';

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
        return 'STARTUPS_BOL_Like';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'startups_like';
    }

    public function getAllLikes(){
        return $this->findAll();
    }
    public function isLiked($userId , $startupId){
        $example = new OW_Example();
        $example->andFieldEqual(self::USER_ID , $userId);
        $example->andFieldEqual(self::STARTUP_ID , $startupId);
        $answer = $this->findListByExample($example);

        if(empty($answer)){
            return false;
        }
        else{
            return true;
        }
    }
    public function newLike($userId , $startupId){
        if($this->isLiked($userId , $startupId) == false){
            $like = new STARTUPS_BOL_Like();
            $like->userid = $userId;
            $like->startupid = $startupId;

            STARTUPS_BOL_LikeDao::getInstance()->save($like);
        }
    }

    public function disLike($userId , $startupId){
        if($this->isLiked($userId , $startupId) == true){
            $example = new OW_Example();
            $example->andFieldEqual(self::USER_ID , $userId);
            $example->andFieldEqual(self::STARTUP_ID , $startupId);

//            return $this->findIdByExample($example);
            $this->deleteById($this->findIdByExample($example));
        }
    }
}