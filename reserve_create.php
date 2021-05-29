<?php
    //(C)
    //viewの表示
    
    require_once 'models/User.php';
    session_start();
    $login_user = $_SESSION['login_user'];

    include_once 'views/reserve_create_view.php';