


<?php

if($_POST){
    require_once "pay.php";

    $data = [
        "order_no" => date('Ydmhis') . time(),
        "body" => '商品',
        "sum" => $_REQUEST['sum'],
        "channel" => strtolower('alipay2alipay'), //渠道  官方的official
        "extra" => []
    ];

    $pay = new Payment($config);
    $result = $pay->pay($data);  // ->pay(); ->callback();
//var_dump($result);die();
//    $result = (json_encode($result));
    if(is_array($result)){
        if($result['result_msg'] == 'SUCCESS'){
            echo '订单号：'.$result['charge']['out_trade_no'].'<br>' ;
            echo '<img src="'.$result['charge']['credential']['qrcode'] .'">';
            exit();
        }else{
            echo '<pre>';
            print_r($result);
            exit();
        }
    } else{
        echo '<pre>';
        print_r($result);
        exit('无响应，请检查网络');
    }
}else{
 ?>
    <form method="post">
        充值金额：<input type="text" name="sum"></br>
        充值渠道:<select name="channel"><option value="alipay2alipay">微信支付宝二维码</option></select></br>
        <input type="submit">
    </form>


<?php
}
?>


