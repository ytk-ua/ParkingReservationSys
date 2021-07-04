<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規駐車場登録</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <h1>新規駐車場登録</h1>
 
     <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <form action="parking_store.php" method="POST">
        <dl>
            <dt>駐車場名<span class="must">※必須</span></dt>
            <dd><input type="text" name="parking_name"></dd>
            <dt>料金[30分]<span class="must">※必須</span></dt>
            <dd><input type="number" name="price"></dd>
            <dt>場所</dt>
            <dd><input type="text" name="address"></dd>
            <dt>サイズ</dt>
            <dd><input type="text" name="size"></dd>
            <dt>備考/連絡事項</dt>
            <dd><input type="text" name="remarks"></dd>
        </dl>
            <input type="reset" value="リセットする"><br>
            <input type="submit" value="登録">
    </form>
    <p><a href="admin_parking.php">キャンセル</a></p>
</body>
</html>