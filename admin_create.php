<?php
    //(C)
    session_start();

    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    $errors = $_SESSION['errors'];
    //セッションに保存されたエラー情報を破棄
    $_SESSION['errors'] = null;
    
    //viewの表示
    include_once 'views/admin_create_view.php';