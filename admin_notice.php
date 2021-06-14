<?php
    //(C)
    // require_once 'daos/ParkingDAO.php';
    require_once 'daos/NoticeDAO.php';
    session_start();
    //ParkingDAOを使ってデータベースから全駐車場情報を取得
    // $parkings = ParkingDAO::get_all_parkings();

    //NoticeDAOを使ってデータベースから全お知らせ情報を取得
    $notices = NoticeDAO::get_all_notices();
    
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    // $flash_message2 = $_SESSION['flash_message2'];
    // $_SESSION['flash_message2'] = null;
    
    include_once 'views/admin_notice_view.php';
    