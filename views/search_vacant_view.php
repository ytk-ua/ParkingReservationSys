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
    <P>現在の日時：<?= $today ?></P>

    <P> <a href="search_vacant.php?date=<?= date("Y-m-d", strtotime($date . '-1 day')) ?>">前日</a> << <?= $date ?> >> <a href="search_vacant.php?date=<?= date("Y-m-d", strtotime($date . '+1 day')) ?>">翌日</a></P>

    <table>
        <tr>
            <th rowspan="2">予約時間帯</th>
            <th colspan="3">予約状況</th>
        </tr>
        <tr>
            <th>Park1</th>
            <th>Park2</th>
            <th>Park3</th>
        </tr>
    <?php for($hour = 0; $hour < 24; $hour++): ?>
        <tr>
            <td><?= $hour < 10  ? '0' . $hour . ':00' : $hour . ':00' ?> - <?= ($hour + 1) < 10  ? '0' . ($hour + 1) . ':00' : ($hour + 1) . ':00' ?></td>
            <td><?= get_reserve_user_name($reservations1, $date, $hour, 1)?></td>
            <td><?= get_reserve_user_name($reservations2, $date, $hour, 4)?></td>
            <td><?= get_reserve_user_name($reservations3, $date, $hour, 5)?></td>
        </tr>
    <?php endfor; ?>    
    </table>

    <p><a href="top.php">マイページトップに戻る</a></p>
    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>