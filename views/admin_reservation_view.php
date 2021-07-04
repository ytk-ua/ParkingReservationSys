<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約管理</title>
</head>
<body>
    <h1>予約管理</h1>
    
    <!--//カウント関数は数を数をかずえてくれる-->
    <p>予約登録情報一覧</p>
    
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
    
    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>