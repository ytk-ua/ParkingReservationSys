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
    $id = $_POST['id'];
    
    //Userクラスの新しいインスタンス生成
    $parking = new Parking($parking_name, $price, $address, $size, $remarks);
    // var_dump($user);
    
    // $_SESSION['user'] = $user;
    //ParkingDAOを使ってDBに保存
    ParkingDAO::update($parking, $id);
    
    $_SESSION['flash_message'] = $parking_name . 'の駐車場情報を更新しました。';
    
    // 画面遷移（show.phpへ）
    header('location: show_parking.php?id=' . $id);
    exit;