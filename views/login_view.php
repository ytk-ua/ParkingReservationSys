<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン・新規ユーザー登録</title>
</head>
<body>
    <h1>ログイン・新規ユーザー登録</h1>
    <p>ログインするには以下のアカウント名、パスワードを入力してください。<br>
        初めての方は「新規ユーザー登録」をクリックしてください</p>
    <form action="login_check.php" method="POST">
        アカウント名<br>
        <input type="text" name="account" required><br>
        パスワード<br>
        <input type="password" name="password" required><br>
        <input type="checkbox" name="login_keep">次回からアカウント名の入力を省略する<br>

        <input type ="submit" value="ログイン">
    <!--<p><a href="admin.php">（仮設：管理者ページトップ）</a></p>        -->
        
    </form>
        
    <p>パスワードをお忘れの方</p>
    <p><a href="user_create.php">新規ユーザー登録</a></p>
    
    <p><a href="index.php">キャンセル</a></p>
</body>
</html>