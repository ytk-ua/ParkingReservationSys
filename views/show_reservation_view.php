<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約No：<?= $reservation->id ?>の詳細情報</title>
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
            <li><a href="top.php">HOME</a></li>
            <li><a href="search_vacant.php">空き状況確認</a></li>
            <li><a href="reservation_list.php?id=<?= $login_user->id ?>">予約確認</a></li>
            <li><a href="use_list.php?id=<?= $login_user->id ?>">利用実績確認</a></li>
        </ul>
    </nav>
</header>
<!--/ヘッダー-->

<!--メイン-->
<div id="main">    
<h1>予約No：<?= $reservation->id ?>の詳細情報</h1>
    <h2>予約登録情報の詳細</h2>
    
    <?php if($flash_message !== null): ?>
    <p class="flash"><?= $flash_message ?></p>
    <?php endif; ?>

    <dl>
        <dt>ID</dt>
        <dd><?= $reservation->id ?></dd>
        <dt>ユーザーID</dt>
        <dd><?= $reservation->user_id ?></dd>
        <dt>駐車場ID</dt>
        <dd><?= $reservation->parking_id ?></dd>
        <dt>予約開始日</dt>
        <dd><?= $reservation->start_date ?></dd>
        <dt>予約開始時間</dt>
        <dd><?= substr($reservation->start_time, 0, 5) ?></dd>
        <dt>予約終了日</dt>
        <dd><?= $reservation->end_date ?></dd>
        <dt>予約終了時間</dt>
        <dd><?= substr($reservation->end_time, 0, 5) ?></dd>
        <dt>メールアドレス</dt>
        <dd><?= $reservation->email ?></dd>
        <dt>電話番号</dt>
        <dd><?= $reservation->tel ?></dd>
        <dt>備考/連絡事項</dt>
        <dd><?= $reservation->remarks ?></dd>
    </dl>
    <p>
        <form action="delete_reservation.php" method="POST">
        <input type="hidden" name="id" value="<?= $reservation->id ?>">
        <input type="hidden" name="user_id" value="<?= $reservation->user_id ?>">
        <input type="hidden" name="parking_id" value="<?= $reservation->parking_id ?>">
        <button type="submit">削除</button>
        </form>
    </p>    
    
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">前のページに戻る</a>

</div>
<!--/メイン-->

<!--フッター-->
<footer>
    <div id="footer_nav">
        <ul>
            <li><a href = top.php>HOME</a></li>
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