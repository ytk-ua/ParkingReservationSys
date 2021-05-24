<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>予約登録</h1>
 
    <form action="reserve_store.php" method="POST">
        開始日時： <input type="date" name="start_date"><input type="time" name="start_time"><br>
        終了日時： <input type="date" name="end_date"><input type="time" name="end_time"><br>
        利用駐車場番号： <select name= "park_no">
            <option value = "">選択してください</option>
            <option value = "park1">No.1</option>
            <option value = "park2">No.2</option>
            <option value = "park3">No.3</option>
            </select><br>
        Room No： <input type="number" name="room_no"><br>
        メールアドレス： <input type="email" name="email"><br>
        緊急連絡先： <input type="tel" name="tel"><br>
        備考/連絡事項： <input type="text" name="remarks"><br>
        <input type="reset" value="リセット"><br>
        <input type="submit" value="入力内容確認">
    </form>
    <p><a href="top.php">マイページトップに戻る</a></p>
</body>
</html>