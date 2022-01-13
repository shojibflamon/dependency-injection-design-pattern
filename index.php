<?php

include_once 'start.php';

use Shojibflamon\DependencyInjectionDesignPattern\Sms;
use Shojibflamon\DependencyInjectionDesignPattern\Operators\Robi;
use Shojibflamon\DependencyInjectionDesignPattern\Operators\Banglalink;
use Shojibflamon\DependencyInjectionDesignPattern\Operators\Airtel;
use Shojibflamon\DependencyInjectionDesignPattern\Operators\GrameenPhone;
use Shojibflamon\DependencyInjectionDesignPattern\Enums\OperatorName;


$numbers = [
    '01600000000',
    '01700000000',
    '01800000000',
    '01900000000',
];
$sms = new Sms();
foreach ($numbers as $number) {
    $operatorName = substr($number, 0, 3);

    if ($operatorName == OperatorName::AIRTEL) {
        $operatorObj = new Airtel();
    } elseif ($operatorName == OperatorName::GRAMEENPHONE) {
        $operatorObj = new GrameenPhone();
    } elseif ($operatorName == OperatorName::ROBI) {
        $operatorObj = new Robi();
    } elseif ($operatorName == OperatorName::BANGLALINK) {
        $operatorObj = new Banglalink();
    }
    $sms->sendSms($operatorObj);
}



