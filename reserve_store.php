<?php
    //(C)
    // require_once 'daos/ReserveDAO.php';
    session_start();
    require_once 'models/User.php';
    //login_check.phpでSESSIONにいれたログインユーザー情報を引き出す
    $login_user = $_SESSION['login_user'];
    var_dump($_POST);
    
    // $park_no = $_POST['park_no'];
    // echo $park_no;
    // $user_id = $login_user['user_id'];
    // echo $user_id;

    // $name = $_POST['name'];
    // $user_id = $_POST['user_id'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    
    //Reserveクラスの新しいインスタンス生成
    // $reserve = new Reserve($name, $user_id, $email, $password);
    // var_dump($reserve);
    
    //ReserveDAOを使ってDBに保存
    // ReserveDAO::insert($reserve);
    // $_SESSION['flash_message'] = $name . 'さんが追加されました';
    
    // 画面遷移（マイページトップへ）
    // header('location: top.php');
    // exit;