<?php
    // (C)
    // require_once 'models/Notice.php';
    require_once 'daos/NoticeDAO.php';
    session_start();
    var_dump($_POST);
    $regist_date = $_POST['regist_date'];
    $title = $_POST['title'];
    $overview = $_POST['overview'];
    $link_url = $_POST['link_url'];
    $image = $_FILES['image']['name'];
    
    //Noticeクラスの新しいインスタンス生成
    $notice = new Notice($regist_date, $title, $overview, $link_url, $image);
    // var_dump($notice);
    
    // 画像のフルパスを設定
    $file = 'upload/' . $image;

    // uploadディレクトリにファイル保存
    move_uploaded_file($_FILES['image']['tmp_name'], $file);

    //NoticeDAOを使ってDBに保存
    NoticeDAO::insert($notice);
    $_SESSION['flash_message'] = '『' . $title . '』が追加されました';

    // $_SESSION['login_user'] = $user;
    
    // 画面遷移（マイページトップへ）
    header('location: admin_notice.php');
    exit;