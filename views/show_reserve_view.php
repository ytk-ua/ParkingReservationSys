<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約No：<?= $reserve->id ?>の詳細情報</title>
</head>
<body>
    <h1>予約No：<?= $reserve->id ?>の詳細情報</h1>
    <h2>予約登録の詳細情報</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

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
    
        <p><a href="edit.php?id=<?= $user->id ?>">編集</a></p>
    <p>
        <form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="hidden" name="name" value="<?= $user->name ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    
    <h2>利用実績</h2>

    <p><a href="admin_user.php">ユーザー管理に戻る</a></p>
    <p><a href="admin.php">管理者ページトップに戻る</a></p>
</body>
</html>