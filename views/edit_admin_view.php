<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $admin->name ?>さんの登録情報編集</title>
    <link rel="stylesheet" href="css/style.css">
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
        <dl>
            <dt>名前<span class="must">※必須</span></dt>
            <dd><input type="text" name="name" value="<?= $admin->name ?>"></dd>
            <dt>アカウント名<span class="must">※必須</span></dt>
            <dd><input type="text" name="account" value="<?= $admin->account ?>"></dd>
            <dt>パスワード<span class="must">※必須</span></dt>
            <dd><input type="password" name="password" value="<?= $admin->password ?>"></dd>
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" value="<?= $admin->email ?>"></dd>
        </dl>
            <input type="hidden" name="id" value="<?= $admin->id ?>">
            <input type="reset" value="リセットする"><br>
            <input type="submit" value="更新">
    </form>
    <p><a href="admin.php">キャンセル</a></p>
</body>
</html>