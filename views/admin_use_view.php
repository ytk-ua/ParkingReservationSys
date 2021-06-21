<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>利用実績管理</title>
    <style>
        table, tr, th, td {
            border: solid 2px;
        } 
        table{
            width: 80%;
        }
        .total {
            text-align: right;
            color: purple;
            font-weight: bold;
            width: 80%;
        }
    </style>    
</head>
<body>
    <h1>利用実績管理</h1>
    <h2>利用実績の一覧</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

   <p>駐車場予約一覧</p>
   <table>
        <tr>
            <th>駐車場ID</th>
            <th>合計利用時間</th>
            <th>駐車場料金</th>
            <th>合計利用料金</th>
        </tr>
    <?php foreach($reservations1 as $reservation): ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>
    <?php endforeach; ?>
        <tr>
            <td align="center"><?= $parking->parking_name ?></td>
            <td align="right"><?= total_time($reservations1)?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= total_price($reservations1)?></td>
            </tr>
    <?php foreach($reservations2 as $reservation): ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>
    <?php endforeach; ?>
        <tr>
            <td align="center"><?= $parking->parking_name ?></td>
            <td align="right"><?= total_time($reservations2)?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= total_price($reservations2)?></td>
            </tr>
    <?php foreach($reservations3 as $reservation): ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>
    <?php endforeach; ?>
        <tr>
            <td align="center"><?= $parking->parking_name ?></td>
            <td align="right"><?= total_time($reservations3)?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= total_price($reservations3)?></td>
            </tr>
    </table>
    <p class="total">駐車場予約一覧の合計金額：¥<?= total_price($reservations)?>、合計利用時間：<?= total_time($reservations)?>時間</p>



    <?php foreach($reservations1 as $reservation): ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>
    <?php endforeach; ?>
    <p>駐車場『<?= $parking->parking_name ?>』の利用実績</p>
    <?php $total = 0; ?>
    
    <table>
        <tr>
            <th>駐車場ID</th>
            <th>ユーザーID</th>
            <th>利用開始日</th>
            <th>利用開始時間</th>
            <th>利用終了日</th>
            <th>利用終了時間</th>
            <th>利用時間</th>
            <th>駐車場料金</th>
            <th>利用料金</th>
        </tr>
    <?php foreach($reservations1 as $reservation): ?>
    <?php $start_time = substr($reservation->start_time, 0, 5) ?>
    <?php $end_time = substr($reservation->end_time, 0, 5) ?>
    <?php $timestamp1 = strtotime("$reservation->start_date $reservation->start_time" ) ?>
    <?php $timestamp2 = strtotime("$reservation->end_date $reservation->end_time" ) ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>

        <tr>
            <td align="center"><?= $reservation->parking_id ?></td>
            <td align="center"><?= $reservation->user_id ?></td>
            <td align="center"><?= $reservation->start_date ?></td>
            <td align="center"><?= $start_time ?></td>
            <!--<td><?= substr($reservation->start_time, 0, 5) ?></td>-->
            <td align="center"><?= $reservation->end_date ?></td>
            <td align="center"><?= $end_time ?></td>
            <!--<td><?= substr($reservation->end_time, 0, 5) ?></td>-->
            <td align="right"><?= ($timestamp2 - $timestamp1)/60/60 ?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= number_format((($timestamp2 - $timestamp1)/60/60)*($parking->price)) ?></td>
            <?php $total = $total + (($timestamp2 - $timestamp1)/60/60)*($parking->price); ?>
        </tr>
    <?php endforeach; ?>
    </table>
        <p class="total">駐車場『<?= $parking->parking_name ?>』の合計金額：¥<?= number_format($total) ?>、合計利用時間：<?= total_time($reservations1)?>時間</p>

    <?php foreach($reservations2 as $reservation): ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>
    <?php endforeach; ?>
    <p>駐車場『<?= $parking->parking_name ?>』の利用実績</p>
    <table>
        <tr>
            <th>駐車場ID</th>
            <th>ユーザーID</th>
            <th>利用開始日</th>
            <th>利用開始時間</th>
            <th>利用終了日</th>
            <th>利用終了時間</th>
            <th>利用時間</th>
            <th>駐車場料金</th>
            <th>利用料金</th>
        </tr>
    <?php foreach($reservations2 as $reservation): ?>
    <?php $start_time = substr($reservation->start_time, 0, 5) ?>
    <?php $end_time = substr($reservation->end_time, 0, 5) ?>
    <?php $timestamp1 = strtotime("$reservation->start_date $reservation->start_time" ) ?>
    <?php $timestamp2 = strtotime("$reservation->end_date $reservation->end_time" ) ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>

        <tr>
            <td align="center"><?= $reservation->parking_id ?></td>
            <td align="center"><?= $reservation->user_id ?></td>
            <td align="center"><?= $reservation->start_date ?></td>
            <td align="center"><?= $start_time ?></td>
            <!--<td><?= substr($reservation->start_time, 0, 5) ?></td>-->
            <td align="center"><?= $reservation->end_date ?></td>
            <td align="center"><?= $end_time ?></td>
            <!--<td><?= substr($reservation->end_time, 0, 5) ?></td>-->
            <td align="right"><?= ($timestamp2 - $timestamp1)/60/60 ?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= number_format((($timestamp2 - $timestamp1)/60/60)*($parking->price)) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <p class="total">駐車場『<?= $parking->parking_name ?>』の合計金額：¥<?= total_price($reservations2)?>、合計利用時間：<?= total_time($reservations2)?>時間</p>

    <?php foreach($reservations3 as $reservation): ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>
    <?php endforeach; ?>
    <p>駐車場『<?= $parking->parking_name ?>』の利用実績</p>
    <table>
        <tr>
            <th>駐車場ID</th>
            <th>ユーザーID</th>
            <th>利用開始日</th>
            <th>利用開始時間</th>
            <th>利用終了日</th>
            <th>利用終了時間</th>
            <th>利用時間</th>
            <th>駐車場料金</th>
            <th>利用料金</th>
        </tr>
    <?php foreach($reservations3 as $reservation): ?>
    <?php $start_time = substr($reservation->start_time, 0, 5) ?>
    <?php $end_time = substr($reservation->end_time, 0, 5) ?>
    <?php $timestamp1 = strtotime("$reservation->start_date $reservation->start_time" ) ?>
    <?php $timestamp2 = strtotime("$reservation->end_date $reservation->end_time" ) ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>

        <tr>
            <td align="center"><?= $reservation->parking_id ?></td>
            <td align="center"><?= $reservation->user_id ?></td>
            <td align="center"><?= $reservation->start_date ?></td>
            <td align="center"><?= $start_time ?></td>
            <!--<td><?= substr($reservation->start_time, 0, 5) ?></td>-->
            <td align="center"><?= $reservation->end_date ?></td>
            <td align="center"><?= $end_time ?></td>
            <!--<td><?= substr($reservation->end_time, 0, 5) ?></td>-->
            <td align="right"><?= ($timestamp2 - $timestamp1)/60/60 ?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= number_format((($timestamp2 - $timestamp1)/60/60)*($parking->price)) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <p class="total">駐車場『<?= $parking->parking_name ?>』の合計金額：¥<?= total_price($reservations3)?>、合計利用時間：<?= total_time($reservations3)?>時間</p>

   <p>(確認用参考データ)駐車場予約一覧</p>
   <table>
        <tr>
            <th>駐車場ID</th>
            <th>ユーザーID</th>
            <th>利用開始日</th>
            <th>利用開始時間</th>
            <th>利用終了日</th>
            <th>利用終了時間</th>
            <th>利用時間</th>
            <th>駐車場料金</th>
            <th>利用料金</th>
        </tr>
    <?php foreach($reservations as $reservation): ?>
    <?php $start_time = substr($reservation->start_time, 0, 5) ?>
    <?php $end_time = substr($reservation->end_time, 0, 5) ?>
    <?php $timestamp1 = strtotime("$reservation->start_date $reservation->start_time" ) ?>
    <?php $timestamp2 = strtotime("$reservation->end_date $reservation->end_time" ) ?>
    <?php $parking = ParkingDAO::find($reservation->parking_id) ?>

        <tr>
            <td align="center"><?= $reservation->parking_id ?></td>
            <td align="center"><?= $reservation->user_id ?></td>
            <td align="center"><?= $reservation->start_date ?></td>
            <td align="center"><?= $start_time ?></td>
            <!--<td><?= substr($reservation->start_time, 0, 5) ?></td>-->
            <td align="center"><?= $reservation->end_date ?></td>
            <td align="center"><?= $end_time ?></td>
            <!--<td><?= substr($reservation->end_time, 0, 5) ?></td>-->
            <td align="right"><?= ($timestamp2 - $timestamp1)/60/60 ?>時間</td>
            <td align="right">¥<?= ($parking->price) ?>/1h</td>
            <td align="right">¥<?= number_format((($timestamp2 - $timestamp1)/60/60)*($parking->price)) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <p class="total">駐車場予約一覧の合計金額：¥<?= total_price($reservations)?>、合計利用時間：<?= total_time($reservations)?>時間</p>


    <p><a href="top.php">マイページトップに戻る</a></p>
    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>