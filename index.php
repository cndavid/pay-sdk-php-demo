


<?php
if($_REQUEST){
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

    exit(json_encode($result));
}else{
 ?>
    <form method="post">
        充值金额：<input type="text" name="sum"></br>
        充值渠道:<select name="channel"><option value="alipay2alipay">支付宝转支付宝</option></select></br>
        <input type="submit">
    </form>


<?php
}
?>


