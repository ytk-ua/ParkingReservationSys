<?php
    //(C)
    require_once 'daos/UserDAO.php';
    require_once 'daos/NoticeDAO.php';
    session_start();

    $id = $_GET['id'];

    //DAOを使って＄id番のユーザー情報をDBから持ってくる
    $notice = NoticeDAO::find($id);

    $errors = $_SESSION['errors'];
    //セッションに保存されたエラー情報を破棄
    $_SESSION['errors'] = null;    
    
    //HTML表示
    include_once 'views/edit_notice_view.php';

    