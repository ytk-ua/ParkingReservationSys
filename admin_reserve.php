<?php
    //(C)
    require_once 'daos/ReserveDAO.php';
    session_start();
    // //ReserveDAOを使ってデータベースから全予約登録情報を取得
    $reserves = ReserveDAO::get_all_reserves();
    
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    // $flash_message2 = $_SESSION['flash_message2'];
    // $_SESSION['flash_message2'] = null;
    
    include_once 'views/admin_reserve_view.php';