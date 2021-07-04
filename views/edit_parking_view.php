<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $parking->parking_name ?>の駐車場登録情報編集</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <h1><?= $parking->parking_name ?>の駐車場登録情報編集</h1>
    
    <form action="update_parking.php" method="POST">
        <dl>
           <dt>駐車場名<span class="must">※必須</span></dt>
            <dd><input type="text" name="parking_name" value="<?= $parking->parking_name ?>"></dd>
            <dt>料金[30分]<span class="must">※必須</span></dt>
            <dd><input type="number" name="price" value="<?= $parking->price ?>"></dd>
            <dt>場所</dt>
            <dd><input type="text" name="address" value="<?= $parking->address ?>"></dd>
            <dt>サイズ</dt>
            <dd><input type="text" name="size" value="<?= $parking->size ?>"></dd>
            <dt>備考/連絡事項</dt>
            <dd><input type="text" name="remarks" value="<?= $parking->remarks ?>"></dd>
       </dl>
            <input type="hidden" name="id" value="<?= $parking->id ?>">
            <input type="reset" value="リセットする"><br>
            <input type="submit" value="更新">
    </form>
    <p><a href="admin_parking.php">キャンセル</a></p>
</body>
</html>