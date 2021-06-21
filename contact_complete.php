<?php
    //(C)
    //viewの表示
    require_once 'models/Contact.php';
    require_once 'daos/ParkingDAO.php';
    require_once 'daos/ContactDAO.php';
    session_start();
    //login_check.phpでSESSIONにいれたログインユーザー情報を引き出す
    $login_user = $_SESSION['login_user'];
    // var_dump($_POST);
    
    $user_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email_check = $_POST['email_check'];
    $tel = $_POST['tel'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    
    //Contactクラスの新しいインスタンス生成
    $contact = new Contact($user_id, $name, $email, $tel, $subject, $body);
    // var_dump($contact);
    
    //ContactDAOを使ってDBに保存
    ContactDAO::insert($contact);

    $_SESSION['flash_message'] = '問い合わせが登録されました';
    $flash_message = $_SESSION['flash_message'];
    $_SESSION['flash_message'] = null;
      
    include_once 'views/contact_complete_view.php';