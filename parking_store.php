<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    session_start();
    // var_dump($_POST);
    $parking_name = $_POST['parking_name'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $size = $_POST['size'];
    $remarks = $_POST['remarks'];
    
    //Parkingクラスの新しいインスタンス生成
    $parking = new Parking($parking_name, $price, $address, $size, $remarks);
    var_dump($parking);
    
    // // $_SESSION['user'] = $user;
    //ParkingDAOを使ってDBに保存
    ParkingDAO::insert($parking);
    $_SESSION['flash_message'] = $parking_name . 'の駐車場が追加されました';
    
    // 画面遷移（マイページトップへ）
    header('location:admin_parking.php');
    exit;