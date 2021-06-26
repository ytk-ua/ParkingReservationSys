<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>問い合わせ管理</title>
</head>
<body>
    <h1>問い合わせ管理</h1>

    <style>
        table, tr, th, td {
            border: solid 2px;
        } 
    </style>    
    
    <p>問い合わせ一覧(新着順表示)</p>
 
    <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>
    
    <!--<p>-->
    <!--    <form action="search_parking.php">-->
    <!--        <input type="search" name="parking_id">-->
    <!--        <button type="submit">検索</button>-->
    <!--    </form>-->
    <!--</p>-->

    <?php if(count($contacts) === 0): ?>
    <p>登録された問い合わせはありません</p>
    <?php else: ?>
    <table>
        <tr>
            <th>ID</th>
            <th>ユーザーID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>件名</th>
            <th>本文</th>
            <th>返信</th>
            <th>削除</th>
        </tr>
    <?php foreach($contacts as $contact): ?>
        <tr>
            <td align="center"><?= $contact->id ?></td>
            <td align="center"><?= $contact->user_id ?></td>
            <td align="center"><?= $contact->name ?></td>
            <td align="center"><?= $contact->email ?></td>
            <td align="center"><?= $contact->tel ?></td>
            <td align="left"><?= $contact->subject ?></td>
            <td align="left"><?= $contact->body ?></td>
            <td><a href="xxx.php?id=<?= $contact->id ?>">返信</a></p>
            <td><a href="delete_contact.php?id=<?= $contact->id ?>">削除</a></p>
        </tr>
    <?php endforeach; ?>
    </table>
    <?php endif; ?>
    
    <p><a href="admin.php">管理者ページトップ</a></p>
    <p><a href="index.php">ログアウト</a></p>
</body>
</html>