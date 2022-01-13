<?php

namespace ShojibFlamon\DependencyInjectionDesignPattern\Operators;
use Shojibflamon\DependencyInjectionDesignPattern\Interfaces\SendSms;

class Airtel implements SendSms
{

    public function send()
    {
        echo 'Airtel Send SMS' . PHP_EOL;
    }

    public function smsSendingProcess()
    {
        $this->send();
    }
}