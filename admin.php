<?php
    //(C)
    require_once 'daos/UserDAO.php';
    //UserDAOを使ってデータベースから全ユーザー情報を取得
    $users = UserDAO::get_all_users();

    include_once 'views/admin_view.php';