<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $user->name ?>さんの登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1><?= $user->name ?>さんの登録情報編集</h1>
 
    <form action="update.php" method="POST">
        名前(必須)： <input type="text" name="name" value="<?= $user->name ?>"><br>
        部屋番号(必須)： <input type="number" name="room_no" value="<?= $user->room_no ?>"><br>
        アカウント名(必須)： <input type="text" name="account" value="<?= $user->account ?>"><br>
        パスワード(必須)： <input type="password" name="password" value="<?= $user->password ?>"><br>
        メールアドレス： <input type="email" name="email" value="<?= $user->email ?>"><br>
        電話番号： <input type="tel" name="tel" value="<?= $user->tel ?>"><br>
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="更新">
    </form>

    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">前のページに戻る</a>
    <!--<p><a href="top.php">キャンセル</a></p>-->
</body>
</html>