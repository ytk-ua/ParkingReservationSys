<?php
    //(C)
    require_once 'daos/AdminDAO.php';

    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    
    //DAOを使って＄id番の管理者情報をDBから持ってくる
    $admin = AdminDAO::find($id);
    // var_dump($admin);
    
    //HTML表示
    include_once 'views/edit_admin_view.php';

    