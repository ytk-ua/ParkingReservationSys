<?php
    //(C)
    require_once 'daos/ReservationDAO.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    
    //タイムゾーンの設定
    date_default_timezone_set('Asia/Tokyo');
    
    $user_id = $_GET['id'];

    //GET通信でstart_dateというキーワードで値が飛んできたならば
    if(isset($_GET['date'])){
        $date = $_GET['date'];
    }else{
        $date = date("Y-m-d");
    }

    //DAOを使って＄start_dateの日付の予約登録情報をDBから持ってくる
    $reservations1 = ReservationDAO::find3($date, 1);
    $reservations2 = ReservationDAO::find3($date, 4);
    $reservations3 = ReservationDAO::find3($date, 5);   

    // //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    // 注目する予約一覧の中で注目する時間帯に予約している人の名前を取得
    function get_reserve_user_name($reserves, $date, $hour, $parking_id){
        foreach($reserves as $reserve){
            $start_time = (int)substr($reserve->start_time, 0, 2);
            $end_time = (int)substr($reserve->end_time, 0, 2);
            $start_date = $reserve->start_date;
            $end_date = $reserve->end_date;
            // 予約のユーザー情報表示のためにユーザー情報取得
            $user = UserDAO::find($reserve->user_id);
   
            // 開始と終了が同じ日
            if($start_time <= $hour && ($hour + 1) <= $end_time && strtotime($start_date) == strtotime($end_date)){
                return "予約済:" . $user->room_no . "号室";
            } // 開始日が本日、終了日が翌日
            else if(strtotime($start_date) < strtotime($end_date) && $start_time <= $hour && strtotime($start_date) == strtotime($date)){
                return "予約済:" . $user->room_no . "号室";
            } // 終了日が本日
            else if(strtotime($end_date) == strtotime($date) && $hour < $end_time && strtotime($start_date) < strtotime($date) && strtotime($start_date) < strtotime($end_date)){
                return "予約済:" . $user->room_no . "号室";
            } // 開始日が本日より前、終了日が本日より後
            else if(strtotime($start_date) < strtotime($date) && strtotime($date) < strtotime($end_date)){
                return "予約済:" . $user->room_no . "号室";
            }
        }
                $start_time = ($hour < 10 ? '0' . $hour : $hour) . ':00:00';

                return '<a href="reservation_create.php?start_date=' . $date . '&start_time=' . $start_time . '&parking_id=' . $parking_id . '">予約可</a>';
    }

    include_once 'views/search_vacant_view.php';
    

    