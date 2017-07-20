<?php


class IISSECURITYESSENTIALS_Cron extends OW_Cron
{



    public function __construct()
    {
        parent::__construct();

        $this->addJob('deleteExpiredRequests', 10);
    }


    public function deleteExpiredRequests()
    {
        IISSECURITYESSENTIALS_BOL_Service::getInstance()->deleteExpiredRequests();
    }

    public function run()
    {

    }
}
