<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者ページトップ</title>
</head>
<body>
    <h1>管理者ページトップ</h1>
            
    <!--//カウント関数は数を数をかずえてくれる-->
    <p>（仮表示）登録ずみユーザー一覧</p>
    
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
    
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>