<?php
    //(C)
    require_once 'daos/ReservationDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    // $login_user = $_SESSION['login_user'];

    //タイムゾーンの設定
    date_default_timezone_set('Asia/Tokyo');
    
    // var_dump($_GET);
    // $user_id = $_GET['id'];
    // print $user_id;

    // // //DAOを使って＄parking_id番の駐車場の予約登録情報をDBから持ってくる
    // $reservations1 = ReservationDAO::find5($user_id);

    // // //DAOを使って＄user_id番のユーザーの予約登録情報をDBから持ってくる
    // $reservations = ReservationDAO::find2($user_id);
    // var_dump($reservations);
    //DAOを使って＄start_dateの日付の予約登録情報をDBから持ってくる
    $reservations1 = ReservationDAO::find4(1);
    $reservations2 = ReservationDAO::find4(4);
    $reservations3 = ReservationDAO::find4(5);   
    // var_dump($reservations3);

    //ReserveDAOを使ってデータベースから全予約登録情報を取得
    $reservations = ReservationDAO::get_all_reservations();
  
    // //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    // //HTML表示
    include_once 'views/admin_use_view.php';

    