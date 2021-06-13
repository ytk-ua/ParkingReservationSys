<?php
    // (C)
    // require_once 'models/User.php';
    require_once 'daos/UserDAO.php';
    session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $room_no = $_POST['room_no'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    
    //Userクラスの新しいインスタンス生成
    $user = new User($name, $room_no, $account, $password, $email, $tel);
    // var_dump($user);
    
    //UserDAOを使ってDBに保存
    UserDAO::insert($user);
    $_SESSION['flash_message'] = $name . 'さんが追加されました';

    $_SESSION['login_user'] = $user;
    
    // 画面遷移（マイページトップへ）
    header('location: index.php');
    exit;