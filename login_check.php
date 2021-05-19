<?php
    //(C)
    //[memo]データが来てるかの確認だけを以下で実施。
    var_dump($_POST);
    $user_id = $_POST['user_id'];
    echo $user_id;
    $password = $_POST['password'];
    print $password;
    
    //ログインチェック機能の記載必要！


    //画面遷移（マイページトップへ）
    // header('location: top.php');
    // exit;