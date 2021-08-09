<?php
    //(C)
    require_once 'daos/ParkingDAO.php';
    
    //ParkingDAOを使ってデータベースから全駐車場情報を取得
    $parkings = ParkingDAO::get_all_parkings();

    //viewの表示
    include_once 'views/guide_view.php';
    