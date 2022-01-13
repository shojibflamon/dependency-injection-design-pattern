<?php

namespace Shojibflamon\DependencyInjectionDesignPattern\Operators;
use Shojibflamon\DependencyInjectionDesignPattern\Interfaces\SendSms;

class Robi implements SendSms
{

    public function login()
    {
        echo 'Robi Login' . PHP_EOL;
    }

    public function send()
    {
        echo 'Robi Send SMS' . PHP_EOL;
    }

    public function smsSendingProcess()
    {
        $this->login();
        $this->send();
    }
}