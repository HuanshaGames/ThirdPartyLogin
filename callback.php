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
} else {
    die;
}
// 核心部分: 结束


// 在此处输入你的业务逻辑.
// 使用 $token 作为用户字符串

//e.g.
echo $token;
?>
