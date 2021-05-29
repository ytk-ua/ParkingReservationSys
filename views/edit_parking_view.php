<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $parking->parking_id ?>の駐車場登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1><?= $parking->parking_id ?>の駐車場登録情報編集</h1>
    
    <form action="update_parking.php" method="POST">
        駐車場No： <input type="text" name="parking_id" value="<?= $parking->parking_id ?>"><br>
        場所： <input type="text" name="adress" value="<?= $parking->adress ?>"><br>
        サイズ： <input type="text" name="size" value="<?= $parking->size ?>"><br>
        料金： <input type="text" name="price" value="<?= $parking->price ?>"><br>
        備考/連絡事項： <input type="text" name="remarks" value="<?= $parking->remarks ?>"><br>
        <input type="hidden" name="id" value="<?= $parking->id ?>">
        <input type="submit" value="更新">
    </form>
    <p><a href="admin_parking.php">キャンセル</a></p>
</body>
</html>