<?php
    //(C)
    require_once 'daos/UserDAO.php';
    require_once 'daos/ReservationDAO.php';
    require_once 'daos/ParkingDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    $id = $_GET['id'];

    //DAOを使って＄id番の予約登録情報をDBから持ってくる
    $reservation = ReservationDAO::find($id);

    //ParkingDAOを使ってデータベースから全駐車場情報を取得
    //Parkingの選択肢用に駐車場情報を利用
    $parkings = ParkingDAO::get_all_parkings();

    //HTML表示
    include_once 'views/edit_reservation_view.php';

    