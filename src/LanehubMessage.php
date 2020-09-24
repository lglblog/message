<?php

namespace Lanehub;
/**
 * 这里写对应的消息服务
 * Class LanehubMessage
 * @package Lanehub
 */
class LanehubMessage
{


    public function __construct()
    {
        echo "构造方法";
    }

    public function getConfig($type){
        $config=Config("message.".$type);
        var_dump($config);
    }
    public function sendSingleSms($param)
    {
        echo "发送单条短信";
        var_dump($param);
    }

    public function sendMoreSms()
    {
        echo "批量发送短信";
    }

}