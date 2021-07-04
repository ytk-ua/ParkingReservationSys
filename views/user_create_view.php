<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規ユーザー登録</title>
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
    <h1>新規ユーザー登録</h1>

    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <form action="user_store.php" method="POST">
        <dl>
            <dt>名前<span class="must">※必須</span></dt>
            <dd><input type="text" name="name" style="width: 80%;"></dd>
            <dt>部屋番号<span class="must">※必須</span></dt>
            <dd><input type="number" name="room_no" min="101" max="3020" step="10" style="width: 30%;"></dd>
            <dt>アカウント名<span class="must">※必須</span></dt>
            <dd><input type="text" name="account" style="width: 80%;"></dd>
            <dt>パスワード<span class="must">※必須</span></dt>
            <dd><input type="password" name="password" style="width: 80%;"></dd>
            <dt>メールアドレス</dt>
            <dd><input type="email" name="email" style="width: 80%;"></dd>
            <dt>電話番号</dt>
            <dd><input type="text" name="tel" style="width: 80%;"></dd>
        </dl>
            <input type="reset" value="リセットする"><br>
            <input type="submit" value="登録">
    </form>
    <p><a href="index.php">キャンセル</a></p>
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