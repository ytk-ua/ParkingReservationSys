<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $login_user->name ?>さんの予約情報</title>
</head>
<body>
    <h1><?= $login_user->name ?>さんの予約情報</h1>
    <h2>予約登録の一覧</h2>
    
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
        <p><a href="edit_reserve.php?id=<?= $reserve->id ?>">編集</a></p>
    <p>
        <form action="delete_reserve.php" method="POST">
        <input type="hidden" name="id" value="<?= $reserve->id ?>">
        <input type="hidden" name="user_mul" value="<?= $reserve->user_mul ?>">
        <input type="hidden" name="parking_mul" value="<?= $reserve->parking_mul ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    <?php endforeach; ?>
    <?php endif; ?>

    <p><a href="top.php">マイページトップに戻る</a></p>
    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>