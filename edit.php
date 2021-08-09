<?php
    //(C)
    require_once 'daos/UserDAO.php';

    $id = $_GET['id'];

    //DAOを使って＄id番のユーザー情報をDBから持ってくる
    $user = UserDAO::find($id);

    //HTML表示
    include_once 'views/edit_view.php';

    