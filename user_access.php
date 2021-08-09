<?php
    // (C)
    require_once 'daos/AccessDAO.php';
    require_once 'daos/UserDAO.php';

     session_start();

     $user_id = $_GET['id'];

     $user = UserDAO::find($user_id);
    print $_SERVER['HTTP_REFERER'];
     $user_accesses = AccessDAO::find($user->name);
     $accesses_count = AccessDAO::find3($user->name);
    var_dump($accesses_count);

    include_once 'views/user_access_view.php'; 
