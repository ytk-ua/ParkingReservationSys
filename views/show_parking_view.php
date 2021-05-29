<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $parking->parking_id ?>駐車場の詳細情報</title>
</head>
<body>
    <h1><?= $parking->parking_id ?>駐車場の詳細情報</h1>
    <h2>登録情報</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <ul>
        <li>ID:<?= $parking->id ?></li>
        <li>駐車場No：<?= $parking->parking_id ?></li>
        <li>場所：<?= $parking->adress ?></li>
        <li>サイズ：<?= $parking->size ?></li>
        <li>料金：<?= $parking->price ?></li>
        <li>備考/連絡事項：<?= $parking->remarks ?></li>
    </ul>
    <p><a href="edit_parking.php?id=<?= $parking->id ?>">編集</a></p>
    <p>
        <form action="delete_parking.php" method="POST">
        <input type="hidden" name="id" value="<?= $parking->id ?>">
        <input type="hidden" name="parking_id" value="<?= $parking->parking_id ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    
    <h2>利用実績</h2>

    <p><a href="admin_parking.php">駐車場管理に戻る</a></p>
    <p><a href="admin.php">管理者ページトップに戻る</a></p>
</body>
</html>