<?php
/*********************
 * 
 * HeteroCraft Auth 
 * 第三方验证
 * 
 * 配置文件
 * 
 * 
 * © 江西幻厦游戏开发有限公司 2020-2021
 * 
 *********************/
$config = array(
    
    'version' => '4', //程序版本号, 请勿修改
    'check_update' => false, //检查更新 下版本更新此功能
    
    // 第三方平台接入信息
    
    'auth_version' => '2',  //验证版本
    'client_id' => '', //第三方接入平台ID
    'secret_hash' => '',    //第三方接入平台秘钥
    
    // 获取信息内容
    
    'get_uid' => true, //获取用户UID
    'get_username' => true,    //获取用户名
    );
?>
