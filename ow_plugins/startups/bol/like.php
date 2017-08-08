<?php
class STARTUPS_BOL_Like extends OW_Entity{
    public $userid;
    public $startupid;

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getStartupid()
    {
        return $this->startupid;
    }

    /**
     * @param mixed $startupid
     */
    public function setStartupid($startupid)
    {
        $this->startupid = $startupid;
    }

}