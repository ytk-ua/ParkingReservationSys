<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $parking->parking_name ?>の駐車場登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1><?= $parking->parking_name ?>の駐車場登録情報編集</h1>
    
    <form action="update_parking.php" method="POST">
        駐車場名： <input type="text" name="parking_name" value="<?= $parking->parking_name ?>"><br>
        料金[30分]： <input type="number" name="price" value="<?= $parking->price ?>"><br>
        場所： <input type="text" name="address" value="<?= $parking->address ?>"><br>
        サイズ： <input type="text" name="size" value="<?= $parking->size ?>"><br>
        備考/連絡事項： <input type="text" name="remarks" value="<?= $parking->remarks ?>"><br>
        <input type="hidden" name="id" value="<?= $parking->id ?>">
        <input type="submit" value="更新">
    </form>
    <p><a href="admin_parking.php">キャンセル</a></p>
</body>
</html>