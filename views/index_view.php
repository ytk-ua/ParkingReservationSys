<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>駐車場予約システム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>マンション駐車場利用予約システム</h1>
    <h2><a href="login.php">ログイン・新規ユーザー登録</a></h2>
    <ul>
        <li>システム概要</li>
        <li>利用方法/ルール</li>
        <li>お問合せ</li>
    </ul>
    
    <p>【お知らせ】</p>
    
    <?php if(count($notices) === 0): ?>
    <p>登録されたお知らせはありません</p>
    <?php else: ?>
    <?php foreach($notices as $notice): ?>
        <dt><?= $notice->regist_date ?></dt>
        <dd><a href="<?= $notice->link_url ?>"><?= $notice->title ?></a></dd>
    <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>