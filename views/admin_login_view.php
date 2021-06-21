<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者用ログイン</title>
</head>
<body>
    <h1>管理者用ログイン</h1>
    <p>管理者専用のページです<br>
        ログインするには以下のアカウント名、パスワードを入力してください<br>
        <form action="admin_login_check.php" method="POST">
        アカウント名<br>
        <input type="text" name="account"><br>
        パスワード<br>
        <input type="password" name="password"><br>
        <input type="checkbox" name="login_keep">次回からアカウント名の入力を省略する<br>

        <input type ="submit" value="ログイン">
    <p><a href="admin.php">（仮設：管理者ページトップ）</a></p>        
        
    </form>
        
    <!--<p>パスワードをお忘れの方</p>-->
    <!--<p><a href="user_create.php">新規ユーザー登録</a></p>-->
    
    <p><a href="index.php">キャンセル</a></p>
</body>
</html>