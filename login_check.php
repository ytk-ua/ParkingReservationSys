<?php
    //(C)
    session_start();
    require_once 'daos/UserDAO.php';
    // var_dump($_POST);
    $user_id = $_POST['user_id'];
    // echo $user_id;
    $password = $_POST['password'];
    // print $password;
    
    //UserDAOを使ってDBにそんな入力値を持つ人がいるかを探す
    $user = UserDAO::check($user_id, $password);
    // var_dump($user);
    
    //そんな人がいれば、
    if($user !== false){
        //セッションにその人を保存
        $_SESSION['login_user'] = $user;
        header('Location: top.php');
        exit;
    }else{
        header('Location: login.php');
        exit;
    }