<?php
    //(C)
    require_once 'daos/NoticeDAO.php';
    session_start();

    //NoticeDAOを使ってデータベースから全お知らせ情報を取得
    $notices = NoticeDAO::get_all_notices();
    
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    //発生したerror情報を$errorsでSESSIONから取り出し
    $errors = $_SESSION['errors'];
    //セッションに保存されたエラー情報を破棄
    $_SESSION['errors'] = null;

    include_once 'views/admin_notice_view.php';
    