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
        <!--<li><a href="reservation_create.php">予約登録</a></li>-->
        <li><a href="search_vacant.php">空き状況確認</a></li>
        <li><a href="reservation_list.php?id=<?= $login_user->id ?>">予約確認</a></li>
        <li><a href="use_list.php?id=<?= $login_user->id ?>">利用実績確認</a></li>
    </ul>

    <ul>
        <li><a href = about.php>システム概要</a></li>
        <li><a href = guide.php>ご利用ガイド</a></li>
        <li><a href = contact.php>お問合せ</a></li>
    </ul>
    
    <h2>お知らせ</h2>
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