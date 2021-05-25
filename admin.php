<?php
    //(C)
    require_once 'daos/UserDAO.php';
    session_start();
    //UserDAOを使ってデータベースから全ユーザー情報を取得
    $users = UserDAO::get_all_users();
    
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    include_once 'views/admin_view.php';