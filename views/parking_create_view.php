<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規駐車場登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>新規駐車場登録</h1>
 
    <form action="parking_store.php" method="POST">
        駐車場No： <input type="text" name="parking_id"><br>
        場所： <input type="text" name="adress"><br>
        サイズ： <input type="text" name="size"><br>
        料金： <input type="text" name="price"><br>
        備考/連絡事項： <input type="text" name="remarks"><br>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>
    <p><a href="admin_parking.php">キャンセル</a></p>
</body>
</html>