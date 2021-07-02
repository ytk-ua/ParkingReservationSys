<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規ユーザー登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>新規ユーザー登録</h1>

    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <form action="user_store.php" method="POST">
        名前(必須)： <input type="text" name="name"><br>
        部屋番号(必須)： <input type="number" name="room_no" min="101" max="3020" step="10"><br>
        アカウント名(必須)： <input type="text" name="account"><br>
        パスワード(必須)： <input type="password" name="password"><br>
        メールアドレス： <input type="email" name="email"><br>
        電話番号： <input type="text" name="tel"><br>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>
    <p><a href="index.php">キャンセル</a></p>
</body>
</html>