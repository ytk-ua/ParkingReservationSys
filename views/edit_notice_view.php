<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ID<?= $notice->id ?>番目の登録情報編集</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>ID<?= $notice->id ?>番目の登録情報編集</h1>
 
    <form action="update_notice.php" method="POST" enctype="multipart/form-data">
        ID:<?= $notice->id ?><br>
        登録日： <input type="date" name="regist_date" value="<?= $notice->regist_date ?>"><br>
        タイトル： <input type="text" name="title" value="<?= $notice->title ?>"><br>
        概要： <input type="text" name="overview" value="<?= $notice->overview ?>"><br>
        リンクURL： <input type="text" name="link_url" value="<?= $notice->link_url ?>"><br>
        画像： <input type="file" name="image" value="<?= $notice->image ?>"><br>
        <li><img src="upload/<?= $notice->image ?>"></li>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>
    
    <p><a href="admin_notice.php">キャンセル</a></p>
</body>
</html>