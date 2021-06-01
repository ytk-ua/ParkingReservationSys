<?php
    //(C)
    require_once 'daos/UserDAO.php';
    require_once 'daos/ReserveDAO.php';
    require_once 'daos/ParkingDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    // var_dump($login_user);
    
    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    
    //DAOを使って＄id番の予約登録情報をDBから持ってくる
    $reserve = ReserveDAO::find($id);
    // var_dump($reserve);
    
    //HTML表示
    include_once 'views/edit_reserve_view.php';

    