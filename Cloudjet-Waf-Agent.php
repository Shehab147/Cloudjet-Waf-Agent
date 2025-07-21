<?php

class WafAgent
{
    public $timezone;
    public $usingSelenium;
    public $clientip;


    public function __construct()
    {
        $this->timezone = isset($_COOKIE['timezone']) ? $_COOKIE['timezone'] : 'Unknown';;
        $this->usingSelenium = isset($_COOKIE['usingSelenium']) ? filter_var($_COOKIE['usingSelenium'], FILTER_VALIDATE_BOOLEAN) : false;
        $this->clientip = isset($_COOKIE['allowed']) ? $_COOKIE['allowed'] : 'null';
    }
    public function getTimezone()
    {
        return $this->timezone;
    }
    public function isUsingSelenium()
    {
        return $this->usingSelenium;
    }
    public function getClientIP()
    {
        return $this->clientip;
    }
    public function getInfo()
    {
        return [
            'timezone' => $this->getTimezone(),
            'usingSelenium' => $this->isUsingSelenium(),
            'clientip' => $this->getClientIP()
        ];
    }
}
