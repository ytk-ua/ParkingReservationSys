<?php
    //(C)
    require_once 'filters/login_filter.php';
    require_once 'models/User.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    
    // var_dump($login_user);
    
    //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    //view表示
    include_once 'views/top_view.php';