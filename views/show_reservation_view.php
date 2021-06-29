<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約No：<?= $reservation->id ?>の詳細情報</title>
</head>
<body>
    <h1>予約No：<?= $reservation->id ?>の詳細情報</h1>
    <h2>予約登録の詳細情報</h2>
    
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

    <ul>
        <li>ID:<?= $reservation->id ?></a></li>
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
    
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">前のページに戻る</a>

    <!--<p><a href="admin_user.php">ユーザー管理に戻る</a></p>-->
    <!--<p><a href="admin.php">管理者ページトップに戻る</a></p>-->
</body>
</html>