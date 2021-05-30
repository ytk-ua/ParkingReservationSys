<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $user->name ?>さんの登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1><?= $user->name ?>さんの登録情報編集</h1>
 
    <form action="update.php" method="POST">
        名前： <input type="text" name="name" value="<?= $user->name ?>"><br>
        メールアドレス： <input type="email" name="email" value="<?= $user->email ?>"><br>
        ユーザーID： <input type="text" name="user_id" value="<?= $user->user_id ?>"><br>
        パスワード： <input type="password" name="password" value="<?= $user->password ?>"><br>
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="submit" value="更新">
    </form>
    <p><a href="top.php">キャンセル</a></p>
</body>
</html>