<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者ページトップ</title>
</head>
<body>
    <h1>管理者ページトップ</h1>
    
    <ul>
        <li><a href="admin_user.php">ユーザー管理</a></li>
        <li><a href="admin_parking.php">駐車場管理</a></li>
        <li><a href="admin_reservation.php">予約管理</a></li>
        <li><a href="admin_use.php">利用実績管理</a></li>        
        <li><a href="admin_notice.php">お知らせ管理</a></li>
        <li><a href="admin_contact.php">問合せ管理</a></li>
    </ul>
            
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <p><a href="index.php">ログアウト</a></p>
</body>
</html>