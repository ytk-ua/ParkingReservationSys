<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー管理</title>
</head>
<body>
    <h1>ユーザー管理</h1>
    
    <!--//カウント関数は数を数をかずえてくれる-->
    <p>登録ユーザー一覧</p>
    
    <p>
        <form action="search_user.php">
            名前を入力：<input type="search" name="name">
            <button type="submit">検索</button>
        </form>
    </p>
        
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>
    
    <?php if(count($users) === 0): ?>
    <p>ユーザーは誰もいません</p>
    <?php else: ?>
    <?php foreach($users as $user): ?>
    <ul>
        <li>ID:<a href="show.php?id=<?= $user->id ?>"><?= $user->id ?></a></li>
        <li>名前：<?= $user->name ?></li>
        <li>部屋番号：<?= $user->room_no ?></li>
        <li>アカウント名：<?= $user->account ?></li>
    </ul>
    <?php endforeach; ?>
    <?php endif; ?>
    <p><a href="user_create.php">新規ユーザー登録</a></p>
    
    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>