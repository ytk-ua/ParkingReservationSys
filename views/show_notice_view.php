<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ID<?= $notice->id ?>番のお知らせ</title>
</head>
<body>
    <h1>ID<?= $notice->id ?>番のお知らせ</h1>
    <h2>お知らせ詳細情報</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <ul>
        <li>ID:<?= $notice->id ?></a></li>
        <li>登録日：<?= $notice->regist_date ?></li>
        <li>タイトル：<?= $notice->title ?></a></li>
        <li>概要：<?= $notice->overview ?></li>
        <li>リンクURL：<a href="<?= $notice->link_url ?>"><?= $notice->link_url ?></li>
        <li><img src="upload/<?= $notice->image ?>"></li>
    </ul>
    
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">前のページに戻る</a>

    <!--<p><a href="admin_parking.php">駐車場管理に戻る</a></p>-->
    <!--<p><a href="admin.php">管理者ページトップに戻る</a></p>-->
</body>
</html>