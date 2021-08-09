<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    session_start();
    //ParkingDAOを使ってデータベースから全ユーザー情報を取得
    $parkings = ParkingDAO::get_all_parkings();
    
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    include_once 'views/admin_parking_view.php';