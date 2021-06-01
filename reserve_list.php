<?php
    //(C)
    require_once 'daos/ReserveDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    
    // var_dump($_GET);
    $user_mul = $_GET['id'];
    // print $user_mul;
    
    // // //DAOを使って＄user_mul番のユーザーの予約登録情報をDBから持ってくる
    $reserves = ReserveDAO::find2($user_mul);
    // var_dump($reserves);

    // //セッションからflash_messageを取得し、セッションから削除
    // $flash_message = $_SESSION['flash_message'];
    // $_SESSION['flash_message'] = null;
    
    // //HTML表示
    include_once 'views/reserve_list_view.php';

    