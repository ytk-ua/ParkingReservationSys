<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お知らせ管理</title>
</head>
<body>
    <h1>お知らせ管理</h1>

    <style>
    img{
        width:  100px;
    }
    </style>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <p>新規お知らせ登録</p>
 
    <form action="admin_notice_store.php" method="POST" enctype="multipart/form-data">
        登録日(必須)： <input type="date" name="regist_date"><br>
        タイトル(必須)： <input type="text" name="title"><br>
        概要： <input type="text" name="overview"><br>
        リンクURL： <input type="text" name="link_url"><br>
        画像： <input type="file" name="image"><br>
        <input type="reset" value="リセットする"><br>
        <input type="submit" value="登録">
    </form>

    <p>お知らせ一覧</p>
    
    <!--<p>-->
    <!--    <form action="search_parking.php">-->
    <!--        <input type="search" name="parking_id">-->
    <!--        <button type="submit">検索</button>-->
    <!--    </form>-->
    <!--</p>-->

    <?php if(count($notices) === 0): ?>
    <p>登録されたお知らせはありません</p>
    <?php else: ?>
    <?php foreach($notices as $notice): ?>
    <ul>
        <li>ID:<?= $notice->id ?></li>
        <li>登録日：<?= $notice->regist_date ?></li>
        <li>タイトル：<?= $notice->title ?></a></li>
        <li>概要：<?= $notice->overview ?></li>
        <li>リンクURL：<a href="<?= $notice->link_url ?>"><?= $notice->link_url ?></li>
        <li><img src="upload/<?= $notice->image ?>"></li>
    </ul>
    <p><a href="edit_notice.php?id=<?= $notice->id ?>">編集</a></p>
    <p>
        <form action="delete_notice.php" method="POST">
        <input type="hidden" name="id" value="<?= $notice->id ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    <?php endforeach; ?>
    <?php endif; ?>
    
    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>