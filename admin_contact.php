<?php
    //(C)
    require_once 'daos/ContactDAO.php';
    session_start();

    //ContactDAOを使ってデータベースから全問い合わせ情報を取得
    $contacts = ContactDAO::get_all_contacts();

    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;

    include_once 'views/admin_contact_view.php';
    