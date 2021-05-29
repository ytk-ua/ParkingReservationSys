<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $user->name ?>さんの詳細情報</title>
</head>
<body>
    <h1><?= $user->name ?>さんの詳細情報</h1>
    <h2>登録情報</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <ul>
        <li>ID:<?= $user->id ?></li>
        <li>名前：<?= $user->name ?></li>
        <li>ユーザーID：<?= $user->user_id ?></li>
        <li>メールアドレス：<?= $user->email ?></li>
        <li>パスワード：<?= $user->password ?></li>
    </ul>
    <p><a href="edit.php?id=<?= $user->id ?>">編集</a></p>
    <p>
        <form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="hidden" name="name" value="<?= $user->name ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    
    <h2>利用実績</h2>

    <p><a href="admin_user.php">ユーザー管理に戻る</a></p>
    <p><a href="admin.php">管理者ページトップに戻る</a></p>
</body>
</html>