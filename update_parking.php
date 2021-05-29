<?php
    //(C)
    require_once 'daos/parkingDAO.php';
    session_start();
    // var_dump($_POST);

    $parking_id = $_POST['parking_id'];
    $adress = $_POST['adress'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $remarks = $_POST['remarks'];
    $id = $_POST['id'];
    
    //Userクラスの新しいインスタンス生成
    $parking = new Parking($parking_id, $adress, $size, $price, $remarks);
    // var_dump($user);
    
    // $_SESSION['user'] = $user;
    //ParkingDAOを使ってDBに保存
    ParkingDAO::update($parking, $id);
    
    $_SESSION['flash_message'] = $parking_id . 'の駐車場情報を更新しました。';
    
    // 画面遷移（show.phpへ）
    header('location: show_parking.php?id=' . $id);
    exit;