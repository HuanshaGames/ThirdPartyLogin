<?php
/*********************
 * 
 * HeteroCraft Auth 
 * 第三方验证
 * 
 * 登录跳转页
 * 
 * 
 * 请勿修改核心部分!
 * 
 * © 江西幻厦游戏开发有限公司 2020-2021
 * 
 *********************/

// 核心部分: 开始
include 'inc.config.php';

$code = $_GET['code'];

$json = file_get_contents('https://passport.huanshagame.com/auth/verify.php?client_id='.$config['client_id'].'&secret_hash='.$config['secret_hash'].'&code='.$code);

$result = json_decode($json, true);

if($result['code'] == '200'){
    $token = $result['token'];
    $info = $result['info'];
} else {
    $token = null;
}
// 核心部分: 结束


// 在此处输入你的业务逻辑.
// 使用 $token 作为用户字符串

//       **这是一个例子**
// 以下会显示通过授权的账号信息
echo '==账户信息==';
echo '<br />';
// 当: 返回成功时
if($token){
    // 输出>返回CODE值
    echo '返回的CODE值: '.$code;
    echo '<br />';
    // 输出>用户授权TOKEN
    echo '用户授权TOKEN: '.$token;
    echo '<br />';
    // 输出>用户UID
    echo '用户UID: '.$info['uid'];
    echo '<br />';
    // 输出>用户名
    echo '用户名: '.$info['username'];
    echo '<br />';


// 当: 返回失败时
} else {
    echo '错误信息: '.$result['message'],' (#'.$result['code'].')';
    echo '<br />';
}

?>
