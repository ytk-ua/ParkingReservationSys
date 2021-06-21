<?php
    //(C)
    require_once 'daos/AdminDAO.php';
    session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $account = $_POST['account'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    
    //Adminクラスの新しいインスタンス生成
    $admin = new Admin($name, $account, $password, $email);
    // var_dump($admin);
    
    // $_SESSION['admin'] = $admin;
    //AdminDAOを使ってDBに保存
    AdminDAO::update($admin, $id);
    
    $_SESSION['flash_message'] = $name . 'さんの情報を更新しました。';
    
    // 画面遷移（admin_list.phpへ）
    header('location: admin_list.php');
    exit;