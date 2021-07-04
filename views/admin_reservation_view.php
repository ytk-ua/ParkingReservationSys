<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約管理</title>
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
            <li class="current"><a href="admin_reservation.php">予約管理</a></li>
            <li><a href="admin_use.php">利用実績管理</a></li>        
            <li><a href="admin_notice.php">お知らせ管理</a></li>
            <li><a href="admin_contact.php">問合せ管理</a></li>
        </ul>
    </nav>
</header>
<!--/ヘッダー-->

<!--メイン-->
<div id="main">    

    <h1>予約管理</h1>
    
    <!--//カウント関数は数を数をかずえてくれる-->
    <h2>予約登録情報一覧</h2>
    <p>現在登録されている予約の一覧です</p>
    <!--<p>-->
    <!--    <form action="search_user.php">-->
    <!--        <input type="search" name="name">-->
    <!--        <button type="submit">検索</button>-->
    <!--    </form>-->
    <!--</p>-->
        
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>
    
    <?php if(count($reservations) === 0): ?>
    <p>予約登録情報はありません</p>
    <?php else: ?>
    <?php foreach($reservations as $reservation): ?>
    <ul>
        <li>ID:<a href="show_reservation.php?id=<?= $reservation->id ?>"><?= $reservation->id ?></a></li>
        <li>ユーザーID：<?= $reservation->user_id ?></li>
        <li>駐車場ID：<?= $reservation->parking_id ?></li>
        <li>予約開始日：<?= $reservation->start_date ?></li>
        <li>予約開始時間：<?= $reservation->start_time ?></li>
        <li>予約終了日：<?= $reservation->end_date ?></li>
        <li>予約終了時間：<?= $reservation->end_time ?></li>
    </ul>
    <?php endforeach; ?>
    <?php endif; ?>
    <!--<p><a href="reservation_create.php">新規予約登録</a></p>-->
    
    <!--<p><a href="admin.php">管理者ページトップ</a></p>-->
    <!--<p><a href="index.php">ログアウト</a></p>-->

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