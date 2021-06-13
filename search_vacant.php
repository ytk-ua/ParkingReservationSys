<?php
    //(C)
    require_once 'daos/ReservationDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    
    // var_dump($_GET);
    $user_id = $_GET['id'];
    // print $user_id;

    //タイムゾーンの設定
    date_default_timezone_set('Asia/Tokyo');
    
    //GET通信でstart_dateというキーワードで値が飛んできたならば
    if(isset($_GET['start_date'])){
        $start_date = $_GET['start_date'];
    }else{
        $start_date = date("Y-m-d");
    }
    print $start_date;
    
    //DAOを使って＄user_mul番のユーザーの予約登録情報をDBから持ってくる
    // $reservations = ReservationDAO::find2($user_id);
    // var_dump($reservations);

    //ReserveDAOを使ってデータベースから全予約登録情報を取得
    // $reservations = ReservationDAO::get_all_reservations();
    

    //今日の日付を予約開始日と合う日を探すために設定
    // $start_date = date("Y-m-d");
    // $today2 = date("Y-m-d", strtotime('+1 day'));
    // var_dump($start_date);
    
    //DAOを使って＄start_dateの日付の予約登録情報をDBから持ってくる
    $reservations = ReservationDAO::find3($start_date);
    // var_dump($reservations);

    // //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    //注目する予約一覧の中で注目する時間帯に予約している人の名前を取得
    function get_reserve_user_name($reserves, $hour){
        foreach($reserves as $reserve){
            $start = (int)substr($reserve->start_time, 0, 2);
            $end = (int)substr($reserve->end_time, 0, 2);
            // var_dump($end);
            if($start <= $hour && ($hour + 1) <= $end){
                return $reserve->user_id;
            }
        }
        return '〇';
    }
    
    // //HTML表示
    // include_once 'views/search_vacant_view.php';    
    include_once 'views/search_vacant_view.php';
    

    