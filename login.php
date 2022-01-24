<?php
/*********************
 * 
 * HeteroCraft Auth 
 * 第三方验证
 * 
 * 登录跳转页
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
    echo '
<script>
    window.location.href="https://passport.huanshagame.com/auth/?client_id='.$config['client_id'].'&redirect_url='.$_SERVER['REQUEST_URI'].'"
</script>
';
} else {
    include 'callback.php';
}
?>
