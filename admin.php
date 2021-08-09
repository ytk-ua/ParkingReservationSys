<?php
    //(C)
    require_once 'filters/admin_login_filter.php';
    require_once 'models/User.php';
    require_once 'daos/AdminDAO.php';
    session_start();
    
    $login_admin = $_SESSION['login_admin'];
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    include_once 'views/admin_view.php';