<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $admin->name ?>さんの登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1><?= $admin->name ?>さんの登録情報編集</h1>
 
    <form action="update_admin.php" method="POST">
        名前： <input type="text" name="name" value="<?= $admin->name ?>"><br>
        アカウント名： <input type="text" name="account" value="<?= $admin->account ?>"><br>
        パスワード： <input type="password" name="password" value="<?= $admin->password ?>"><br>
        メールアドレス： <input type="email" name="email" value="<?= $admin->email ?>"><br>
        <input type="hidden" name="id" value="<?= $admin->id ?>">
        <input type="submit" value="更新">
    </form>
    <p><a href="admin.php">キャンセル</a></p>
</body>
</html>