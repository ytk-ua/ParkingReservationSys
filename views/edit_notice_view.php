<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ID<?= $notice->id ?>番目の登録情報編集</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <h1>ID<?= $notice->id ?>番目の登録情報編集</h1>
 
    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
 
    <form action="update_notice.php" method="POST" enctype="multipart/form-data">
         <dl>
            <dt>ID</dt>
            <dd><?= $notice->id ?></dd>
            <dt>登録日<span class="must">※必須</span></dt>
            <dd><input type="date" name="regist_date" value="<?= $notice->regist_date ?>"></dd>
            <dt>タイトル<span class="must">※必須</span></dt>
            <dd><input type="text" name="title" value="<?= $notice->title ?>"></dd>
            <dt>概要<span class="must">※必須</span></dt>
            <dd><input type="text" name="overview" value="<?= $notice->overview ?>"></dd>
            <dt>リンクURL</dt>
            <dd><input type="text" name="link_url" value="<?= $notice->link_url ?>"></dd>
            <dt>画像</dt>
            <dd><input type="file" name="image" value="<?= $notice->image ?>"></dd>
            <li><img src="upload/<?= $notice->image ?>"></li>
            <input type="hidden" name="id" value="<?= $notice->id ?>">
        </dl>
            <input type="reset" value="リセットする"><br>
            <input type="submit" value="登録">
    </form>
    
    <p><a href="admin_notice.php">キャンセル</a></p>
</body>
</html>