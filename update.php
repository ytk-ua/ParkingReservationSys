<?php
    //(C)
    require_once 'daos/UserDAO.php';
    session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    //Userクラスの新しいインスタンス生成
    $user = new User($name, $user_id, $email, $password);
    // var_dump($user);
    
    // $_SESSION['user'] = $user;
    //UserDAOを使ってDBに保存
    UserDAO::update($user, $id);
    
    $_SESSION['flash_message'] = $name . 'さんの情報を更新しました。';
    
    // 画面遷移（show.phpへ）
    header('location: show.php?id=' . $id);
    exit;