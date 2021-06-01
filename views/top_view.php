<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページトップ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>マイページトップ</h1>
    <p><?= $login_user->name ?>さん、ようこそ！</p>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <p><a href="edit.php?id=<?= $login_user->id ?>">登録情報編集</a></p>
    <p><a href="logout.php">ログアウト</a></p>

    <ul>
        <li><a href="reserve_create.php">予約登録</a></li>
        <li><a href="searce_vacant.php">空き状況確認</a></li>
        <li><a href="reserve_list.php?id=<?= $login_user->id ?>">予約確認</a></li>
        <li><a href="use_list.php">利用実績確認</a></li>
    </ul>

    <ul>
        <li>システム概要</li>
        <li>利用方法/ルール</li>
        <li>お問合せ</li>
    </ul>
    
    <p>【お知らせ】</p>
    <dt>2021/xx/xx</dt>
    <dd>新着のお知らせ１</dd>
    <dt>2021/xx/xx</dt>
    <dd>新着のお知らせ２</dd>

</body>
</html>