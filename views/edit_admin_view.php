<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $admin->name ?>さんの登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1><?= $admin->name ?>さんの登録情報編集</h1>
 
    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <form action="update_admin.php" method="POST">
        名前(必須)： <input type="text" name="name" value="<?= $admin->name ?>"><br>
        アカウント名(必須)： <input type="text" name="account" value="<?= $admin->account ?>"><br>
        パスワード(必須)： <input type="password" name="password" value="<?= $admin->password ?>"><br>
        メールアドレス： <input type="email" name="email" value="<?= $admin->email ?>"><br>
        <input type="hidden" name="id" value="<?= $admin->id ?>">
        <input type="submit" value="更新">
    </form>
    <p><a href="admin.php">キャンセル</a></p>
</body>
</html>