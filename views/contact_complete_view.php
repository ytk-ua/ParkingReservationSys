<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ内容登録</title>
    <style>
        table, tr, th, td {
            border: solid 2px;
        } 
    </style>    
    </head>
<body>
    <h1>お問い合わせ内容登録</h1>

   <?php if($flash_message !== null): ?>
    <p><?= $flash_message ?></p>
    <?php endif; ?>

   <?php if($send_message !== null): ?>
    <p><?= $send_message ?></p>
    <?php endif; ?>
    
    <?php if($errors !== null): ?>
    <ul>
    <?php foreach($errors as $error ): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <table>
        <tr>
            <th>ユーザーID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>件名</th>
            <th>本文</th>
        </tr>
        <tr>
            <td align="center"><?= $contact->user_id ?></td>
            <td align="center"><?= $contact->name ?></td>
            <td align="center"><?= $contact->email ?></td>
            <td align="center"><?= $contact->tel ?></td>
            <td align="center"><?= $contact->subject ?></td>
            <td align="center"><?= $contact->body ?></td>
        </tr>
    </table>

    <p><a href="">確認用メールを送る</a></p>
    <p><a href="top.php">マイページトップに戻る</a></p>
</body>
</html>