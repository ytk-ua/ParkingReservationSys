<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規ユーザー登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>新規ユーザー登録</h1>
 
    <form action="user_store.php" method="POST">
        名前： <input type="text" name="name"><br>
        Room No： <input type="number" name="room_no"><br>
        メールアドレス： <input type="email" name="email"><br>
        電話番号： <input type="tel" name="tel"><br>
        ユーザーID： <input type="text" name="user_id"><br>
        パスワード： <input type="password" name="password"><br>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>
    <p><a href="index.php">キャンセル</a></p>
</body>
</html>