<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/ReserveDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    var_dump($_POST);
    $id = $_POST['id'];
    // print $id;
    // $parking_id = $_POST['parking_id'];

    //$id番目の予約情報を削除
    // ReserveDAO::delete($id);
    
    $_SESSION['flash_message'] = $id . '番目:' .'の予約を削除しました';
    
    header('Location: reserve_list.php?id=<?= $login_user->id');
    exit;
    // header('Location: reserve_list.php?id=<?= $login_user->id');
    // exit;
    
