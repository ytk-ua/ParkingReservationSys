<?php
    //(C)
    require_once 'daos/UserDAO.php';
    session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Userクラスの新しいインスタンス生成
    $user = new User($name, $user_id, $email, $password);
    // var_dump($user);
    
    // $_SESSION['user'] = $user;
    //UserDAOを使ってDBに保存
    UserDAO::insert($user);
    $_SESSION['flash_message'] = $name . 'さんが追加されました';
    
    // 画面遷移（マイページトップへ）
    header('location: top.php');
    exit;