<?php
    //(C)
    require_once 'daos/UserDAO.php';
    session_start();
    
    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    
    //DAOを使って＄id番のユーザー情報をDBから持ってくる
    $user = UserDAO::find($id);
    // var_dump($user);
    //セッションからflash_messageを取得し、セッションから削除
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
    
    //HTML表示
    include_once 'views/show_view.php';

    