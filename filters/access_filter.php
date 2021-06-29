<?php
    //Filter
    require_once 'models/User.php';
    require_once 'models/Access.php';
    session_start();
    $login_user = $_SESSION['login_user'];

    //アクセスしているユーザーがログインしているかしていないかを判定
    if($login_user !== null){
        $name = $login_user->name;
    }else{
        $name = '匿名';
    }

    //タイムゾーンの設定
    date_default_timezone_set('Asia/Tokyo');
    $visited_time = date('Y-m-d H:i:s');
    
    $url = $_SERVER['REQUEST_URI']; //URLを取得する
    
    $access = new Access($name, $visited_time, $url);
    var_dump($access);

    // AccessDAO::insert($access);
    
    // print $visited_time;
    // print $name;
    // print $url;
    
        // header('Location: index.php');
        // exit;