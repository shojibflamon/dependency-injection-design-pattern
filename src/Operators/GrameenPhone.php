<?php

namespace ShojibFlamon\DependencyInjectionDesignPattern\Operators;
use Shojibflamon\DependencyInjectionDesignPattern\Interfaces\SendSms;

class GrameenPhone implements SendSms
{

    public function send()
    {
        echo 'Grameen Phone Send SMS' . PHP_EOL;
    }

    public function smsSendingProcess()
    {
        $this->send();
    }
}