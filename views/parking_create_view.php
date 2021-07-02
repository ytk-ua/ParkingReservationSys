<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規駐車場登録</title>
    <link rel="stylesheet" href="style.css">
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
        駐車場名(必須)： <input type="text" name="parking_name"><br>
        料金[30分](必須)： <input type="number" name="price"><br>
        場所： <input type="text" name="address"><br>
        サイズ： <input type="text" name="size"><br>
        備考/連絡事項： <input type="text" name="remarks"><br>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>
    <p><a href="admin_parking.php">キャンセル</a></p>
</body>
</html>