<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規管理者登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>新規管理者登録</h1>

    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <form action="admin_store.php" method="POST">
        名前： <input type="text" name="name"><br>
        アカウント名： <input type="text" name="account"><br>
        パスワード： <input type="password" name="password"><br>
        メールアドレス： <input type="email" name="email"><br>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>
    <p><a href="admin.php">キャンセル</a></p>
</body>
</html>