<?php
    //(C)
    require_once 'models/User.php';
    // session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $room_no = $_POST['room_no'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    
    //Userクラスの新しいインスタンス生成
    $user = new User($name, $room_no, $email, $tel, $user_id, $password);
    var_dump($user);
    // $_SESSION['user'] = $user;
    //UserDAOを使ってDBに保存
    // UserDAO::insert($user);
    
    // 画面遷移（マイページトップへ）
    // header('location: top.php');
    // exit;