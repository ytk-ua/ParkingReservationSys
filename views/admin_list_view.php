<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者情報管理</title>
</head>
<body>
    <h1>管理者情報管理</h1>
    
    <!--//カウント関数は数を数をかずえてくれる-->
    <p>管理者登録情報一覧</p>
    
    <!--<p>-->
    <!--    <form action="search_user.php">-->
    <!--        <input type="search" name="name">-->
    <!--        <button type="submit">検索</button>-->
    <!--    </form>-->
    <!--</p>-->
        
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>
    
    <?php if(count($admins) === 0): ?>
    <p>管理者は誰もいません</p>
    <?php else: ?>
    <?php foreach($admins as $admin): ?>
    <ul>
        <li>ID:<?= $admin->id ?></li>
        <li>名前：<?= $admin->name ?></li>
        <li>アカウント名：<?= $admin->account ?></li>
        <li>パスワード：<?= $admin->password ?></li>
        <li>メールアドレス：<?= $admin->email ?></li>
    </ul>
    <p><a href="edit_admin.php?id=<?= $admin->id ?>">編集</a></p>
    <p>
        <form action="delete_admin.php" method="POST">
        <input type="hidden" name="id" value="<?= $admin->id ?>">
        <input type="hidden" name="name" value="<?= $admin->name ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    <?php endforeach; ?>
    <?php endif; ?>
   
   <p><a href="admin_create.php">新規管理者登録</a></p>
    
    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>