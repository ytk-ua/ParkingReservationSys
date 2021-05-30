<?php
    //(C)
    //viewの表示
    
    require_once 'models/User.php';
    require_once 'daos/ParkingDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];

    //ParkingDAOを使ってデータベースから全駐車場情報を取得
    //Parkingの選択肢用に駐車場情報を利用
    $parkings = ParkingDAO::get_all_parking();

    include_once 'views/reserve_create_view.php';