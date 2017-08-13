<?php
class STARTUPS_BOL_NewsDao extends OW_BaseDao{
    private static $classInstance;
    const STARTUP_ID = 'startupId';

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
        return 'STARTUPS_BOL_News';
    }
    public function getTableName()
    {
        return OW_DB_PREFIX . 'startups_news';
    }
    public function saveNews($title , $description , $image , $startupId){
        $news = new STARTUPS_BOL_News();
        $news->title = $title;
        $news->description = $description;
        $news->image = $image;
        $news->startupId = $startupId;
        STARTUPS_BOL_NewsDao::getInstance()->save($news);
    }
    public function getStartupNews($startupId){
        $example = new OW_Example();
        $example->andFieldEqual(self::STARTUP_ID , $startupId);
        $answer = $this->findListByExample($example);
        return $answer;
    }
    public function deleteStartupNews($startupId){
        $example = new OW_Example();
        $example->andFieldEqual(self::STARTUP_ID , $startupId);
        $this->deleteByExample($example);
        return true;
    }
    public function deleteNews($newsId){
        $this->deleteById($newsId);
    }
}