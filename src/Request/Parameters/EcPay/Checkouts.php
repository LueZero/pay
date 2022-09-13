<?php

namespace Zero\Request\Parameters\EcPay;

use Zero\Request\Parameters\EcPay\ChoicePayments\Base;
use Zero\Request\Parameters\EcPay\ChoicePayments\Credit;
use Zero\Request\Parameters\EcPay\ChoicePayments\AppelPay;
use Zero\Request\Parameters\EcPay\ChoicePayments\ATM;
use Zero\Request\Parameters\EcPay\ChoicePayments\CVS;
use Zero\Request\Parameters\EcPay\ChoicePayments\BarCode;
use Zero\Request\Parameters\EcPay\ChoicePayments\WebATM;

class Checkouts
{
    public function __construct()
    {
    }

    /**
     * @return Base
     */
    public static function createAll()
    {
        return new Base();
    }

    /**
     * 信用卡
     * @return Credit
     */
    public static function createCredit()
    {
        $credit = new Credit();
        $credit->ChoosePayment = 'Credit';
        return $credit;
    }

    /**
     * Appel Pay
     * @return AppelPay
     */
    public static function createAppelPay()
    {
        $credit = new AppelPay();
        $credit->ChoosePayment = 'AppelPay';
        return $credit;
    }

    /**
     * ATM
     * @return ATM
     */
    public static function createATM()
    {
        $credit = new ATM();
        $credit->ChoosePayment = 'ATM';
        return $credit;
    }

    /**
     * CVS
     * @return CVS
     */
    public static function createCVS()
    {
        $credit = new CVS();
        $credit->ChoosePayment = 'CVS';
        return $credit;
    }

    /**
     * Barcode
     * @return BarCode
     */
    public static function createBarcode()
    {
        $credit = new BarCode();
        $credit->ChoosePayment = 'BARCODE';
        return $credit;
    }

    /**
     * WebATM
     * @return WebATM
     */
    public static function createWebATM()
    {
        $credit = new WebATM();
        $credit->ChoosePayment = 'WebATM';
        return $credit;
    }
}
