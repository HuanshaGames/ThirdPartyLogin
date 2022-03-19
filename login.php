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

$permission;

if($config['get_uid']){
    $permission['uid'] = true;
}
if($config['get_username']){
    $permission['username'] = true;
}
$permission = json_encode($permission);

if(!$config['client_id'] || !$config['secret_hash']){
    die('请在 inc.config.php 中填写 client_id 与 secret_hash');
}

if($config['check_update']){
    $lastest = json_decode(file_get_contents('https://git.huanshagame.com/ThirdPartyLogin/upd.check.html'), true);
    $lastest = $newest['lastest'];
    if($lastest != $config['version']){
        die('<p><b>检测到新版本!</b> <a href=\'https://passport.huanshagame.com/auth/?client_id='.$config['client_id'].'&redirect_url='.$_SERVER['REQUEST_URI'].'&permission='.$permission.'\'>点击此处继续</a></p>');
    }
}

if($config['client_id'] && $config['secret_hash']){ 
    echo '
        <script>
            window.location.href="https://passport.huanshagame.com/auth/?client_id='.$config['client_id'].'&redirect_url='.$_SERVER['REQUEST_URI'].'&permission='.$permission.'"
        </script>
    ';
}
?>
