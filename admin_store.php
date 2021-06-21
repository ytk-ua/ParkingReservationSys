<?php
    // (C)
    // require_once 'models/Admin.php';
    require_once 'daos/AdminDAO.php';
    session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    //Userクラスの新しいインスタンス生成
    $admin = new Admin($name, $account, $password, $email);
    // var_dump($admin);
    
    //UserDAOを使ってDBに保存
    AdminDAO::insert($admin);
    
    $_SESSION['flash_message'] = $name . 'さんが追加されました';
    $_SESSION['login_admin'] = $admin;
    
    // 画面遷移（管理者ページトップへ）
    header('location: admin.php');
    exit;