<?php
    //(C)
    require_once 'daos/ParkingDAO.php';

    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    
    //DAOを使って＄id番の駐車場情報をDBから持ってくる
    $parking = ParkingDAO::find($id);
    // var_dump($user);
    
    //HTML表示
    include_once 'views/edit_parking_view.php';

    