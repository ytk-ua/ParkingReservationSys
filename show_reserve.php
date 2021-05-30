<?php
    //(C)
    require_once 'daos/ReserveDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    
    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    
    // //DAOを使って＄id番の予約登録情報をDBから持ってくる
    $reserve = ReserveDAO::find($id);
    var_dump($reserve);
    // //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    // //HTML表示
    include_once 'views/show_reserve_view.php';

    