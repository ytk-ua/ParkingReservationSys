<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    session_start();
    // var_dump($_POST);
    $id = $_POST['id'];
    $parking_id = $_POST['parking_id'];
    
    //$id番目のユーザーを削除
    ParkingDAO::delete($id);
    
    $_SESSION['flash_message'] = $id . '番目:' . $name .'の駐車場を削除しました';
    
    header('Location: admin_parking.php');
    exit;