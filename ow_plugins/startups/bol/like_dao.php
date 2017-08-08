<?php
class STARTUPS_BOL_LikeDao extends OW_BaseDao{

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
        $likedByUser = array();
        $answer = false;
        foreach ($this->getAllLikes() as $like){
            if($like->userid == $userId){
                array_push($likedByUser,$like);
            }
        }
        foreach ($likedByUser as $like){
            if($like->startupid == $startupId){
                $likedByUser = true;
                break;
            }
        }
        return $likedByUser;
    }
}