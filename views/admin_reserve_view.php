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
    
    <?php if(count($reserves) === 0): ?>
    <p>予約登録情報はありません</p>
    <?php else: ?>
    <?php foreach($reserves as $reserve): ?>
    <ul>
        <li>ID:<a href="show_reserve.php?id=<?= $reserve->id ?>"><?= $reserve->id ?></a></li>
        <li>ユーザーMUL：<?= $reserve->user_mul ?></li>
        <li>予約開始日：<?= $reserve->start_date ?></li>
        <li>予約開始時間：<?= $reserve->start_time ?></li>
        <li>予約終了日：<?= $reserve->end_date ?></li>
        <li>予約終了時間：<?= $reserve->end_time ?></li>
        <li>駐車場MUL：<?= $reserve->parking_mul ?></li>
        <li>駐車場ID：<?= $reserve->parking_id ?></li>
    </ul>
    <?php endforeach; ?>
    <?php endif; ?>
    <p><a href="reserve_create.php">新規予約登録</a></p>
    
    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>