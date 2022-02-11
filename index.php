<?php
/*********************
 * 
 * HeteroCraft Auth 
 * 第三方验证
 * 
 * 状态判断页
 * 
 * 
 * 请勿修改此页面!
 * 
 * © 江西幻厦游戏开发有限公司 2020-2021
 * 
 *********************/



    include 'inc.config.php';
?>

<?php 
if(!$_GET['code']){ 
    include 'login.php';
} else {
    include 'callback.php';
}
?>
