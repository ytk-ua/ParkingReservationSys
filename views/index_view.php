<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>駐車場予約システム</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--ヘッダー-->
<header>
    <a href="index.php"><img src="images/logo.png" alt="Parking Reservation System" id="logo"></a>
    <div id="header_button">
    <ul>
        <li><a href="admin_login.php" class="login_admin">管理者用<br>ログイン</a></li>
        <li><a href="login.php" class="login_user">ログイン・新規ユーザー登録</a></li>
    </ul>
    </div>
    <nav id="global_navi">
        <ul>
            <li class="current"><a href="index.php">HOME</a></li>
            <li><a href = about.php>システム概要</a></li>
            <li><a href = guide.php>ご利用ガイド</a></li>
            <li><a href = contact.php>お問合せ</a></li>
        </ul>
    </nav>
</header>
<!--/ヘッダー-->

<!--メイン-->
<div id="main">
<!--メインビジュアル画像-->
<div id="main_visual">
    <p><img src="images/main_visual.png" alt="マンション駐車場利用予約システム"></p>
</div>
<!--/メインビジュアル画像-->
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
    
    <section id="notices">
        <h2>お知らせ</h2>
        <?php if(count($notices) === 0): ?>
        <p>登録されたお知らせはありません</p>
        <?php else: ?>
        <dl>
        <?php foreach($notices as $notice): ?>
            <dt><?= $notice->regist_date ?></dt>
            <dd><a href="show_notice.php?id=<?= $notice->id ?>"><?= $notice->title ?></a></dd>
        <?php endforeach; ?>
        <?php endif; ?>
        </dl>    
    </section>

</div>
<!--/メイン-->

<!--フッター-->
<footer>
    <div id="footer_nav">
        <ul>
            <li class="current"><a href="index.php">HOME</a></li>
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