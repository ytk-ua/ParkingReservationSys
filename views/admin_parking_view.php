<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>駐車場管理</title>
</head>
<body>
    <h1>駐車場管理</h1>
    
    <!--//カウント関数は数を数をかずえてくれる-->
    <p>駐車場一覧</p>
    
    <p>
        <form action="search_parking.php">
            <input type="search" name="parking_id">
            <button type="submit">検索</button>
        </form>
    </p>
        
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>
    
    <?php if(count($parkings) === 0): ?>
    <p>登録された駐車場はありません</p>
    <?php else: ?>
    <?php foreach($parkings as $parking): ?>
    <ul>
        <li>ID:<a href="show_parking.php?id=<?= $parking->id ?>"><?= $parking->id ?></a></li>
        <li>駐車場名：<?= $parking->parking_name ?></li>
        <li>料金：<?= $parking->price ?>円/30分</li>
        <li>場所：<?= $parking->address ?></li>
    </ul>
    <div id="map"></div>
    <?php endforeach; ?>
    <?php endif; ?>
    
    <p><a href="parking_create.php">新規駐車場登録</a></p>

    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>