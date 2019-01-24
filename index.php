<?php

require_once "pay.php";


$data = [
    "order_no" => date('Ydmhis') . time(),
    "body" => '商品Ａ',
    "sum" => '1.00',
    "channel" => strtolower('alipay2alipay'), //渠道  官方的official
    "extra" => [
        "openid"  => 'oWbNY5LQY2E_U0BH06v_4XGWy_I0'
    ]
];

$pay = new Payment($config);
$result = $pay->pay($data);  // ->pay(); ->callback();

exit(json_encode($result));



