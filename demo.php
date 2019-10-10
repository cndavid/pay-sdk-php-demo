<?php
$config = [
    //支付请求url
//    'url' => 'http://pay.com/pay/unifiedorder',
    'url' => 'http://david.pandaspay.co/pay/unifiedorder',
    //平台商户ID
    'mch_id'     =>  '100001',
    //商户key
    'mch_key'    =>  '4a81fa9b5bd509267c0b82abd6946a6e',

    'notify_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/notify.php',
    'return_url'    =>  'http://'.$_SERVER['HTTP_HOST'].'/return.php'
];

if($_POST){

    $data = [
        "out_trade_no" => date('Ydmhis') . time(),
        "subject" => '商品',
        "amount" => $_REQUEST['amount'],
        "channel" => strtolower('alipay2alipay'), //渠道  官方的official
        "currency" => 'CNY',
        "merchant_id" => $config['mch_id'],
        "client_ip" => $_SERVER['REMOTE_ADDR'],
        "notify_url" => $config['notify_url'],
    ];

    $str = '';
    //对数组重新排序
    ksort($data);
    //进行 加密字符串连接
    foreach ($data as $k => $v){
        if ($k == 'sign')continue ;//跳过sign
        $str .= $k.$v;
    }
    $str .= $config['mch_key'] ;
    //MD5
    $data['sign'] = md5($str) ;


    $result = curl_request($config['url'],'post',$data);

    $result = (json_decode($result,true));
//    echo'<pre>';print_r($result);die();
    if(is_array($result)){
        if($result['result_msg'] == 'SUCCESS'){
//            echo '订单号：'.$result['charge']['out_trade_no'].'<br>' ;
//            echo '<img src="'.$result['charge']['credential']['qrcode'] .'">';
            header('Location: '.$result['charge']['pay_url']);
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
        充值金额：<input type="text" name="amount"></br>
        充值渠道:<select name="channel"><option value="alipay2alipay">微信支付宝二维码</option></select></br>
        <input type="submit">
    </form>


<?php
}


//可以发送get和post的请求方式
function curl_request($url,$method='get',$data=null,$https=true){
    try{
        //1.初识化curl
        $ch = curl_init($url);
        //2.根据实际请求需求进行参数封装
        //返回数据不直接输出
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        //如果是https请求
        if($https === true){
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
        }
        //如果是post请求
        if($method === 'post'){
            //开启发送post请求选项
            curl_setopt($ch,CURLOPT_POST,true);
            //发送post的数据
            curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        }
        curl_setopt($ch,CURLOPT_RESOLVE,["pay.com:80:172.18.0.6"]);
        //3.发送请求
        $result = curl_exec($ch);
        if(curl_error($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        //4.返回返回值，关闭连接
        curl_close($ch);
        return $result;
    }catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>


