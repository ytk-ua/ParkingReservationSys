<?php
    //(C)
    require_once 'daos/ReservationDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    $id = $_GET['id'];

    // // //DAOを使って＄id番の予約登録情報をDBから持ってくる
    $reservation = ReservationDAO::find($id);

    // //HTML表示
    include_once 'views/show_reservation_view.php';

    