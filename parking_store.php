<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    session_start();
    // var_dump($_POST);
    $parking_id = $_POST['parking_id'];
    $adress = $_POST['adress'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $remarks = $_POST['remarks'];
    
    //Parkingクラスの新しいインスタンス生成
    $parking = new Parking($parking_id, $adress, $size, $price, $remarks);
    // var_dump($parking);
    
    // // $_SESSION['user'] = $user;
    //ParkingDAOを使ってDBに保存
    ParkingDAO::insert($parking);
    $_SESSION['flash_message'] = $parking_id . 'の駐車場が追加されました';
    
    // 画面遷移（マイページトップへ）
    header('location:admin_parking.php');
    exit;