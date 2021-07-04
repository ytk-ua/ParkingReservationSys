<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お知らせ管理</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    img{
        width:  100px;
    }
    </style>
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
            <li class="current"><a href="admin_notice.php">お知らせ管理</a></li>
            <li><a href="admin_contact.php">問合せ管理</a></li>
        </ul>
    </nav>
</header>
<!--/ヘッダー-->

<!--メイン-->
<div id="main">    
    <h1>お知らせ管理</h1>
    
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
    
    <h2>新規お知らせ登録</h2>
 
    <form action="admin_notice_store.php" method="POST" enctype="multipart/form-data">
        <dl>
            <dt>登録日<span class="must">※必須</span></dt>
            <dd><input type="date" name="regist_date"></dd>
            <dt>タイトル<span class="must">※必須</span></dt>
            <dd><input type="text" name="title"></dd>
            <dt>概要<span class="must">※必須</span></dt>
            <dd><input type="text" name="overview"></dd>
            <dt>リンクURL</dt>
            <dd><input type="text" name="link_url"></dd>
            <dt>画像</dt>
            <dd><input type="file" name="image"></dd>
        </dl>
            <input type="reset" value="リセットする"><br>
            <input type="submit" value="登録">
    </form>
    <br>

    <h2>お知らせ一覧</h2>
    <p>現在登録されているお知らせの一覧です</p>
    
    <!--<p>-->
    <!--    <form action="search_parking.php">-->
    <!--        <input type="search" name="parking_id">-->
    <!--        <button type="submit">検索</button>-->
    <!--    </form>-->
    <!--</p>-->

    <?php if(count($notices) === 0): ?>
    <p>登録されたお知らせはありません</p>
    <?php else: ?>
    <?php foreach($notices as $notice): ?>
    <ul>
        <li>ID:<?= $notice->id ?></li>
        <li>登録日：<?= $notice->regist_date ?></li>
        <li>タイトル：<?= $notice->title ?></a></li>
        <li>概要：<?= $notice->overview ?></li>
        <li>リンクURL：<a href="<?= $notice->link_url ?>"><?= $notice->link_url ?></li>
        <li><img src="upload/<?= $notice->image ?>"></li>
    </ul>
    <p><a href="edit_notice.php?id=<?= $notice->id ?>">編集</a></p>
    <p>
        <form action="delete_notice.php" method="POST">
        <input type="hidden" name="id" value="<?= $notice->id ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    <?php endforeach; ?>
    <?php endif; ?>
    
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