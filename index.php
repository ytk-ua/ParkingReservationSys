<?php
    //(C)
    require_once 'daos/NoticeDAO.php';
    
    //NoticeDAOを使ってデータベースから全お知らせ情報を取得
    $notices = NoticeDAO::get_all_notices();
    

    //viewの表示
    include_once 'views/index_view.php';
    