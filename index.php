<?php
    //(C)
    require_once 'daos/NoticeDAO.php';
    require_once 'daos/UserDAO.php';
    session_start();

    //NoticeDAOを使ってデータベースから全お知らせ情報を取得
    $notices = NoticeDAO::get_all_notices();

    //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    //viewの表示
    include_once 'views/index_view.php';
    