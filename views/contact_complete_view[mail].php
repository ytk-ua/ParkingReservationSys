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

    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
    
      $to = $contacts->email;
      $title = $contacts->subject;
      $message = $contacts->body;
      $headers = "From: from@example.com";
    
      if(mb_send_mail($to, $title, $message, $headers))
      {
        echo "メール送信成功です";
      }
      else
      {
        echo "メール送信失敗です";
      }
     ?>

    <p><a href="">確認用メールを送る</a></p>
    <p><a href="top.php">マイページトップに戻る</a></p>
</body>
</html>