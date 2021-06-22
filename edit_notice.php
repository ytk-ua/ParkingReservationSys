<?php
    //(C)
    require_once 'daos/UserDAO.php';
    require_once 'daos/NoticeDAO.php';

    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    
    //DAOを使って＄id番のユーザー情報をDBから持ってくる
    $notice = NoticeDAO::find($id);
    // var_dump($notice);
    
    //HTML表示
    include_once 'views/edit_notice_view.php';

    