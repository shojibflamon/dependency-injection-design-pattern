<?php

namespace Shojibflamon\DependencyInjectionDesignPattern;

use Shojibflamon\DependencyInjectionDesignPattern\Interfaces\SendSms;

class Sms
{
    public function sendSms(SendSms $sendSms)
    {
        return $sendSms->smsSendingProcess();
    }
}