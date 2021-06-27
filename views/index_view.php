<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>駐車場予約システム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>マンション駐車場利用予約システム</h1>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <h2><a href="login.php">ログイン・新規ユーザー登録</a></h2>
    <h2><a href="admin_login.php">管理者用ログイン</a></h2>

    <ul>
        <li><a href = about.php>システム概要</a></li>
        <li><a href = guide.php>ご利用ガイド</a></li>
        <li><a href = contact.php>お問合せ</a></li>
    </ul>
    
    <p>【お知らせ】</p>
    
    <?php if(count($notices) === 0): ?>
    <p>登録されたお知らせはありません</p>
    <?php else: ?>
    <?php foreach($notices as $notice): ?>
        <dt><?= $notice->regist_date ?></dt>
        <dd><a href="show_notice.php?id=<?= $notice->id ?>"><?= $notice->title ?></a></dd>
    <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>