<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    session_start();
    
    $id = $_GET['id'];

    //DAOを使って＄id番の駐車場情報をDBから持ってくる
    $parking = ParkingDAO::find($id);
    //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    $errors = $_SESSION['errors'];
    //セッションに保存されたエラー情報を破棄
    $_SESSION['errors'] = null;
        
    //HTML表示
    include_once 'views/show_parking_view.php';

    