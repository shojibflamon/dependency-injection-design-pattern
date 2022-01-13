<?php

namespace ShojibFlamon\DependencyInjectionDesignPattern\Operators;
use Shojibflamon\DependencyInjectionDesignPattern\Interfaces\SendSms;

class Banglalink implements SendSms
{

    public function send()
    {
        echo 'Banglalink Send SMS' . PHP_EOL;
    }

    public function smsSendingProcess()
    {
        $this->send();
    }
}