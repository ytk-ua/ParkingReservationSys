<?php
    //(C)
    // require_once 'daos/ReserveDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    //login_check.phpでSESSIONにいれたログインユーザー情報を引き出す
    $login_user = $_SESSION['login_user'];
    var_dump($_POST);
    
    $user_mul = $_POST['id'];
    $start_date = $_POST['start_date'];
    $start_time = $_POST['start_time'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];
    $parking_mul = $_POST['parking_mul'];
    // // $user_id = $login_user['user_id'];
    // // echo $user_id;

    // //Reserveクラスの新しいインスタンス生成
    $reserve = new Reserve($user_mul, $start_date, $start_time, $end_date, $end_time, $parking_mul);
    // var_dump($reserve);
    
    //ReserveDAOを使ってDBに保存
    // ReserveDAO::insert($reserve);
    // $_SESSION['flash_message'] = $name . 'さんが追加されました';
    
    // 画面遷移（マイページトップへ）
    // header('location: top.php');
    // exit;