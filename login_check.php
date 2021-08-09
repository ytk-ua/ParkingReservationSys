<?php
    //(C)
    session_start();
    require_once 'daos/UserDAO.php';
    $account = $_POST['account'];
    $password = $_POST['password'];

    // DAOを使ってログインの入力エラーチェック
    $errors = UserDAO::login_validate($account, $password);
    if(count($errors) !== 0){
        $_SESSION['errors'] = $errors;
        header('Location: login.php');
        exit;
        }else{
            //UserDAOを使ってDBにそんな入力値を持つ人がいるかを探す
            $user = UserDAO::check($account, $password);

            //そんな人がいれば、
            if($user !== false){
                //セッションにその人を保存
                $_SESSION['login_user'] = $user;
                header('Location: top.php');
                exit;
            }else{
                $errors = array();
                $errors[] = 'アカウント名またはパスワードの確認ができませんでした<br>入力内容を確認して再度ログインしてください';
                $_SESSION['errors'] = $errors;
                header('Location: login.php');
                exit;
            }
        }