<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページトップ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--ヘッダー-->
<header>
    <a href="index.php"><img src="images/logo.png" alt="Parking Reservation System" id="logo"></a>
    <div id="header_button">
    <ul>
        <li><a href="logout.php" class="user_logout">ログアウト</a></li>
        <li><a href="edit.php?id=<?= $login_user->id ?>" class="user_edit">登録情報編集</a></li>
    </ul>
    </div>
    <nav id="global_navi">
        <ul>
            <li class="current"><a href="top.php">HOME</a></li>
            <li><a href="search_vacant.php">空き状況確認</a></li>
            <li><a href="reservation_list.php?id=<?= $login_user->id ?>">予約確認</a></li>
            <li><a href="use_list.php?id=<?= $login_user->id ?>">利用実績確認</a></li>
        </ul>
    </nav>
</header>
<!--/ヘッダー-->

<!--メイン-->
<div id="main">    

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

    <!--<ul>-->
    <!--    <li><a href = about.php>システム概要</a></li>-->
    <!--    <li><a href = guide.php>ご利用ガイド</a></li>-->
    <!--    <li><a href = contact.php>お問合せ</a></li>-->
    <!--</ul>-->
    
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