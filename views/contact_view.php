<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>お問い合わせフォーム</h1>
    <p>以下のフォームからお問い合わせください。</p>

    <form action="contact_complete.php" method="POST">
        お名前（必須）<br>
        <input type="text" name="name" placeholder="氏名"><br>
        Email（必須）<br>
        <input type="text" name="email" placeholder="Emailアドレス"><br>
        Email（確認用必須）<br>
        <input type="text" name="email_chedck" placeholder="Emailアドレス(確認のためもう一度後入力ください)"><br>
        お電話番号（半角英数字”-"(ハイフン)不要）<br>
        <input type="text" name="tel" placeholder="お電話番号（半角英数字でご入力ください）"><br>
        件名（必須）<br>
        <input type="text" name="subject" placeholder="件名"><br>
        お問い合わせ内容（必須）<br>
        <input type="text" name="body" placeholder="お問い合わせ内容（１０００字まで）をお書きください"><br>
        <input type="hidden" name="id" value="<?= $login_user->id ?>">
        <input type="reset" value="リセット"><br>
        <input type="submit" value="送信">
    </form>
    <p><a href="top.php">マイページトップに戻る</a></p>
</body>
</html>