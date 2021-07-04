<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $user->name ?>さんの詳細情報</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--ヘッダー-->
<header>
    <a href="index.php"><img src="images/logo.png" alt="Parking Reservation System" id="logo"></a>
    <div id="header_button">
    <ul>
        <li><a href="logout_admin.php" class="admin_logout">ログアウト</a></li>
        <li><a href="admin_list.php" class="admin_list">管理者情報管理</a></li>
    </ul>
    </div>
    <nav id="global_navi_admin">
        <ul>
            <li><a href="admin.php">HOME</a></li>
            <li><a href="admin_user.php">ユーザー管理</a></li>
            <li><a href="admin_parking.php">駐車場管理</a></li>
            <li><a href="admin_reservation.php">予約管理</a></li>
            <li><a href="admin_use.php">利用実績管理</a></li>        
            <li><a href="admin_notice.php">お知らせ管理</a></li>
            <li><a href="admin_contact.php">問合せ管理</a></li>
        </ul>
    </nav>
</header>
<!--/ヘッダー-->

<!--メイン-->
<div id="main">    

    <h1><?= $user->name ?>さんの詳細情報</h1>
    <h2>登録情報</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <ul>
        <li>ID:<?= $user->id ?></li>
        <li>名前：<?= $user->name ?></li>
        <li>部屋番号：<?= $user->room_no ?></li>
        <li>アカウント：<?= $user->account ?></li>
        <li>パスワード：<?= $user->password ?></li>
        <li>メールアドレス：<?= $user->email ?></li>
        <li>電話番号：<?= $user->tel ?></li>
    </ul>
    <p><a href="edit.php?id=<?= $user->id ?>">編集</a></p>
    <p>
        <form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="hidden" name="name" value="<?= $user->name ?>">
        <button type="submit">削除</button>
        </form>
    </p>

    <p><a href="admin_user.php">ユーザー管理に戻る</a></p>
    <!--<p><a href="admin.php">管理者ページトップに戻る</a></p>-->

</div>
<!--/メイン-->

<!--フッター-->
<footer>
    <div id="footer_nav">
        <ul>
            <li><a href = admin.php>HOME</a></li>
            <li><a href = about.php>システム概要</a></li>
            <li><a href = guide.php>ご利用ガイド</a></li>
            <li><a href = contact.php>お問合せ</a></li>
        </ul>
    </div>
    <small>&copy; 2021 ParkingReservationSystem</small>
</footer>
<!--/フッター-->

</body>
</html>