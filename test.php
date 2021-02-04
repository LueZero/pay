<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

require './vendor/autoload.php';

use Zero\Pay\Payment as Payment;

// 綠界 付款範例
$Payment = new Payment("ecPay", [
  "MerchantID" => 2000132,
  "HashKey" => "5294y06JbISpM5x9",
  "HashIV" => "v77hoKGq4kWxNNIS",
  "url" => "https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5"
]);
$requestsData = [
  "MerchantID" => 2000132,
  "MerchantTradeNo" => "zero".date("YmdHis"),
  "MerchantTradeDate" => date("Y/m/d H:i:s"),
  "PaymentType" => "aio",
  "TotalAmount" => 500,
  "TradeDesc" => urlencode("測試交易"),
  "ItemName" => "手機20元",
  "ReturnURL" => "https://your.web.site/receive.php",
  "ChoosePayment" => "Credit",
  "EncryptType" => 1,
];
$Payment->createOrder($requestsData);
$Payment->dataProcess();
echo $Payment->checkOut();

// linePay 付款範例
$Payment = new Payment("linePay", [
  "ChannelId" => "1654180534",
  "ChannelSecret" => "0b493ba53c7ee3ed1f228bf00dfc9639",
  "url" => "https://sandbox-api-pay.line.me/v3/payments/request"
]);
$requestsData = [
  'amount' => 100,
  'currency' => 'TWD',
  'orderId' => "zero" . date("YmdHis"),
  'packages' => [
    [
      "id" => 1,
      'amount' => 100,
      'name' => "Test",
      'products' => [
        [
          'name' => "測試商品",
          "imageUrl" => "https://img.ruten.com.tw/s1/8/5f/69/21309199705961_969_m.jpg",
          'quantity' => 1,
          'price' => 100,
        ]
      ],
    ]
  ],
  'redirectUrls' => [
    'confirmUrl' => "https://your.web.site/receive.php", 
    'cancelUrl' => "https://your.web.site/receive.php"
  ]
];
$Payment->createOrder($requestsData);
$Payment->dataProcess();
echo $Payment->checkOut();