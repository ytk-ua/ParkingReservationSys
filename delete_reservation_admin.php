<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/ReservationDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    $id = $_POST['id'];

    //$id番目の予約情報を削除
    ReservationDAO::delete($id);
    
    $_SESSION['flash_message'] = $id . '番目:' .'の予約を削除しました';
    
    header('Location: admin_reservation.php');
    exit;
