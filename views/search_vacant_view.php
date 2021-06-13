<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>駐車場空き状況確認</title>
    <style>
        table, tr, th, td {
            border: solid 2px;
        } 
        table{
            width: 60%;
        }
    </style>

</head>
<body>
    <h1>駐車場空き状況確認</h1>
    <h2>空き状況の一覧</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>
    
    <?php $today = date("Y-m-d H:i:s"); ?>
    <P> <a href="search_vacant.php?start_date=<?= date("Y-m-d", strtotime($start_date . '-1 day')) ?>">前日</a> << 本日の日付：<?= $today ?> >> <a href="search_vacant.php?start_date=<?= date("Y-m-d", strtotime($start_date . '+1 day')) ?>">翌日</a></P>
    <?php $today2 = date("Y-m-d", strtotime('+1 day')); ?>
    <P>明日の日付：<?= $today2 ?></P>

    
    <?php if(count($reservations) === 0): ?>
    <p>予約登録情報はありません</p>
    <?php else: ?>
    <table>
        <tr>
            <th>予約時間帯</th>
            <th>予約状況</th>
        </tr>
    <?php for($hour = 0; $hour < 24; $hour++): ?>
        <tr>
            <td><?= $hour < 10  ? '0' . $hour . ':00' : $hour . ':00' ?> - <?= ($hour + 1) < 10  ? '0' . ($hour + 1) . ':00' : ($hour + 1) . ':00' ?></td>
            <td><?= get_reserve_user_name($reservations, $hour)?></td>
        </tr>
    <?php endfor; ?>    
    </table>
    <?php endif; ?>

    <p><a href="top.php">マイページトップに戻る</a></p>
    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>