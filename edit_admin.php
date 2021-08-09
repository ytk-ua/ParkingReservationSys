<?php
    //(C)
    require_once 'daos/AdminDAO.php';

    session_start();

    $id = $_GET['id'];

    //DAOを使って＄id番の管理者情報をDBから持ってくる
    $admin = AdminDAO::find($id);

    //update_admin.phpで発生したerror情報を$errorsでSESSIONから取り出し
    $errors = $_SESSION['errors'];
    //セッションに保存されたエラー情報を破棄
    $_SESSION['errors'] = null;
    
    //HTML表示
    include_once 'views/edit_admin_view.php';

    