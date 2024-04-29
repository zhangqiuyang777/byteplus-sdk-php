<?php
require('../../vendor/autoload.php');
use Byteplus\Service\Sms;
use Byteplus\Models\Vod\Request\VodApplyUploadInfoRequest;
use Byteplus\Models\Vod\Response\VodApplyUploadInfoResponse;

$client = Sms::getInstance('');// 可选ap-singapore-1 新加坡
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

// template
$template = [
    'code' => "123456",
];

$body = [
    "SmsAccount"    => "smsAccount",
    "From"          => "BytePlus",
    "TemplateID"    => "ST_xxx",
    "TemplateParam" => json_encode($template),
    "PhoneNumbers"  => "+65xxxxxxxx",
    "Tag"           => "tag",
];

$response = $client->sendSms(['json' => $body]);
echo $response;
