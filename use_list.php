<?php
    //(C)
    require_once 'daos/ReservationDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    
    $user_id = $_GET['id'];

    //タイムゾーンの設定
    date_default_timezone_set('Asia/Tokyo');

    if(isset($_GET['date'])){
        $date = $_GET['date'];
        $now = $date . '-01';
        $next = $date . '-31';

    }else{
        $this_year = date("Y");
        $this_month = date("m");
        $last_month = date("m", strtotime('-1 month'));

        $date = date('Y-m-d');

        $now = $this_year . '-' . $this_month . '-01';
        $next = $this_year . '-' . $this_month . '-31';

    }

    $reservations0 = ReservationDAO::find5($login_user->id);
    $reservations = ReservationDAO::find100($login_user->id, $now, $next);

    // //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    // //HTML表示
    include_once 'views/use_list_view.php';

    