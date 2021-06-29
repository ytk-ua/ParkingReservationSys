<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?= $login_user->name ?>さんの予約情報</title>
</head>
<body>
    <h1><?= $login_user->name ?>さんの予約情報</h1>
    <h2>予約登録の一覧</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>


    <?php if(count($reservations) === 0): ?>
    <p>予約登録情報はありません</p>
    <?php else: ?>
    <?php foreach($reservations as $reservation): ?>
    <ul>
        <li>ID:<a href="show_reservation.php?id=<?= $reservation->id ?>"><?= $reservation->id ?></a></li>
        <li>ユーザーID：<?= $reservation->user_id ?></li>
        <li>駐車場ID：<?= $reservation->parking_id ?></li>
        <li>予約開始日：<?= $reservation->start_date ?></li>
        <li>予約開始時間：<?= $reservation->start_time ?></li>
        <li>予約終了日：<?= $reservation->end_date ?></li>
        <li>予約終了時間：<?= $reservation->end_time ?></li>
        <li>メールアドレス：<?= $reservation->email ?></li>
        <li>電話番号：<?= $reservation->tel ?></li>
        <li>備考/連絡事項：<?= $reservation->remarks ?></li>
    </ul>
    
        <!--編集しなくても一度予約削除でも可能なので、今回は編集機能をOFFにしておく。-->
        <!--<p><a href="edit_reservation.php?id=<?= $reservation->id ?>">編集</a></p>-->
    <p>
        <form action="delete_reservation.php" method="POST">
        <input type="hidden" name="id" value="<?= $reservation->id ?>">
        <input type="hidden" name="user_id" value="<?= $reservation->user_id ?>">
        <input type="hidden" name="parking_id" value="<?= $reservation->parking_id ?>">
        <button type="submit">削除</button>
        </form>
    </p>
    <?php endforeach; ?>
    <?php endif; ?>

    <p><a href="top.php">マイページトップに戻る</a></p>
    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>