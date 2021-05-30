<?php
    //(C)
    require_once 'daos/ReserveDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    //login_check.phpでSESSIONにいれたログインユーザー情報を引き出す
    $login_user = $_SESSION['login_user'];
    // var_dump($_POST);
    
    $user_mul = $_POST['id'];
    $start_date = $_POST['start_date'];
    $start_time = $_POST['start_time'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];
    $parking_mul = $_POST['parking_mul'];
    $parking_id = $_POST['parking_mul'];
    $room_no = $_POST['room_no'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $remarks = $_POST['remarks'];    
    
    // $id = $POST['parking_mul'];    
    // //DAOを使って＄id番の駐車場情報をDBから持ってくる
    // $parking = ParkingDAO::find($id);
    
    // //Reserveクラスの新しいインスタンス生成
    $reserve = new Reserve($user_mul, $start_date, $start_time, $end_date, $end_time, $parking_mul, $parking_id, $room_no, $email, $tel, $remarks);
    var_dump($reserve);

    //ReserveDAOを使ってDBに保存
    ReserveDAO::insert($reserve);
    // $_SESSION['flash_message'] = $name . 'さんが追加されました';
    
    // 画面遷移（マイページトップへ）
    header('location: top.php');
    exit;