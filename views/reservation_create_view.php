<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>予約登録</h1>
    <p><?= $login_user->name ?>さん、ご希望の予約を登録ください</p>

    <form action="reservation_store.php" method="POST">
        開始日時： <input type="date" name="start_date"><input type="time" name="start_time"><br>
        終了日時： <input type="date" name="end_date"><input type="time" name="end_time"><br>
        <!--利用駐車場番号： <select name= "parking_mul">-->
        <!--    <option value = "">選択してください</option>-->
        <!--    <option value = "park1">No.1</option>-->
        <!--    <option value = "park2">No.2</option>-->
        <!--    <option value = "park3">No.3</option>-->
        <!--    </select><br>-->
        利用駐車場番号： 
        <select name= "parking_id">
        <?php if(count($parkings) === 0): ?>
        <p>登録された駐車場はありません</p>
        <?php else: ?>
        <?php foreach($parkings as $parking): ?>
        <option value = "<?= $parking->id ?>"><?= $parking->parking_name ?></option>
        <?php endforeach; ?>
        <?php endif; ?>
        </select><br>
        メールアドレス： <input type="email" name="email" value="<?= $login_user->email ?>"><br>
        電話番号： <input type="tel" name="tel" value="<?= $login_user->tel ?>"><br>
        備考/連絡事項： <input type="text" name="remarks"><br>
        <input type="hidden" name="id" value="<?= $login_user->id ?>">
        <input type="reset" value="リセット"><br>
        <input type="submit" value="入力内容確認">
    </form>
    <p><a href="top.php">マイページトップに戻る</a></p>
</body>
</html>