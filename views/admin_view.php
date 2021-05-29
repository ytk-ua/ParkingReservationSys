<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者ページトップ</title>
</head>
<body>
    <h1>管理者ページトップ</h1>
    
    <ul>
        <li><a href="admin_user.php">ユーザー管理</a></li>
        <li><a href="admin_parking.php">駐車場管理</a></li>
        <li><a href="admin_reserve.php">予約管理</a></li>
        <li><a href="admin_notice.php">お知らせ管理</a></li>
        <li><a href="admin_contact.php">問合せ管理</a></li>
    </ul>
            
    <!--//カウント関数は数を数をかずえてくれる-->
    <p>（仮表示）登録ユーザー一覧</p>
    
    <p>
        <form action="search_user.php">
            <input type="search" name="name">
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
        <li>ユーザーID：<?= $user->user_id ?></li>
    </ul>
    <?php endforeach; ?>
    <?php endif; ?>
    
    <p>（仮表示）駐車場一覧</p>

    <?php if($flash_message2 !== null): ?>
    <p><?= $flash_message2 ?></p>
    <?php endif; ?>
    
    
    <p><a href="parking_create.php">新規駐車場登録</a></p>
    
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>