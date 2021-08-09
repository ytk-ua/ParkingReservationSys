<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>問い合わせ返信</title>
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
    <h1>問い合わせ返信</h1>
    <h2>返信入力フォーム</h2>
    <p>以下のフォームから問い合わせへの返信を入力ください。</p>

        <?php if($errors !== null): ?>
        <ul>
        <?php foreach($errors as $error ): ?>
        <li class="error"><?= $error ?></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    
        <p class="flash"><?= $flash_message ?></p>
        
        <form action="admin_contact_res_complete.php" method="POST">
        <dl>
            <dt>件名<span class="must">※必須</span></dt>
            <dd><input type="text" name="subject" value="【ご回答】<?= $contact2->subject ?>" placeholder="件名" style="width: 80%;"></dd>
            <dt>返信内容<span class="must">※必須</span></dt>
            <dd><textarea id="body" name="body" value="<?= $contact->body ?>" placeholder="返信内容をお書きください" style="width: 80%;"></textarea></dd> 
        </dl>
            <input type="hidden" name="id" value="admin">
            <input type="reset" value="リセット"><br>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    <p>お問い合わせの内容は以下を参照ください。</p>
        <dl>
            <dt>お名前</dt>
            <dd><?= $contact2->name ?></dd>
            <dt>Email</dt>
            <dd><?= $contact2->email ?></dd>
            <dt>お電話番号</dt>
            <dd><?= $contact2->tel ?></dd>
            <dt>件名</dt>
            <dd><?= $contact2->subject ?></dd>
            <dt>お問い合わせ内容</dt>
            <dd><?= $contact2->body ?></dd>
        </dl>            

    <p><a href="admin_contact.php">問い合わせ管理に戻る</a></p>
    <p><a href="admin.php">トップページに戻る</a></p>

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
