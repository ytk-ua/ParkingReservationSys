<?php
    //(C)
    require_once 'daos/NoticeDAO.php';
    session_start();
    // var_dump($_POST);

    $id = $_POST['id'];
    $regist_date = $_POST['regist_date'];
    $title = $_POST['title'];
    $overview = $_POST['overview'];
    $link_url = $_POST['link_url'];
    $image = $_POST['image'];

    //Noticeクラスの新しいインスタンス生成
    $notice = new Notice($regist_date, $title, $overview, $link_url, $image);
    // var_dump($notice);

    //入力チェック(検証)
    $errors = $notice->validate();
    //エラーが一つもなければ
    if(count($errors) === 0){
        //NoticeDAOを使ってDBに保存
        NoticeDAO::update($notice, $id);
        $_SESSION['flash_message'] = '『' . $title . '』が更新されました';
        header('location: admin_notice.php');
        exit;
    }else{ //エラーが一つでもあればセッションにエラー配列を保存
        $_SESSION['errors'] = $errors;
        //画面遷移
        header('location: edit_notice.php?id=' . $id);
        exit;
    }
    
    // 画面遷移（show.phpへ）
    header('location: admin_notice.php');
    exit;