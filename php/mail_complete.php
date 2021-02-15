<?php
session_start();

// セッションデータを変数に代入
$NAME      = $_SESSION["NAME"];      //お名前
$NAME_KANA = $_SESSION["NAME_KANA"]; //お名前（カナ）
$EMAIL     = $_SESSION["EMAIL"];     //メールアドレス
$TEL       = $_SESSION["TEL"];       //電話番号
$FAX       = $_SESSION["FAX"];       //FAX
$MESSAGE   = $_SESSION["MESSAGE"];   //お問い合わせ内容

$NAME      = htmlspecialchars($NAME, ENT_QUOTES);
$NAME_KANA = htmlspecialchars($NAME_KANA, ENT_QUOTES);
$EMAIL     = htmlspecialchars($EMAIL, ENT_QUOTES);
$TEL       = htmlspecialchars($TEL, ENT_QUOTES);
$FAX       = htmlspecialchars($FAX, ENT_QUOTES);
$MESSAGE   = htmlspecialchars($MESSAGE, ENT_QUOTES);



$honbun1 = '';
$honbun2 = "株式会社UNIONお問い合わせフォームより\n\n";
$honbun3 = "【お名前】\n";
$honbun4 = "   {$NAME}\n\n";
$honbun5 = "【お名前（カナ）】\n";
$honbun6 = "   {$NAME_KANA}\n\n";
$honbun7 = "【メールアドレス】\n";
$honbun8 = "   {$EMAIL}\n\n";
$honbun9 = "【電話番号】\n";
$honbun10 = "   {$TEL}\n\n";
$honbun11 = "【FAX】\n";
$honbun12 = "   {$FAX}\n\n";
$honbun13 = "【お問い合わせ内容】";
$honbun14 = "   {$MESSAGE}\n\n";

//エンコード処理
mb_language("japanese");
mb_internal_encoding("UTF-8");

$mail_to = "mirai1735@icloud.com";
$mail_subject = "メールフォームより送信されました";
$mail_body = $honbun1.$honbun2.$honbun3.$honbun4.$honbun5.$honbun6.$honbun7.$honbun8.$honbun9.$honbun10.$honbun11.$honbun12.$honbun13.$honbun14;
$mail_header = "form:".$EMAIL;

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  送信完了

  <?php
  unset($_POST['NAME'],$_POST['NAME_KANA'],$_POST['EMAIL'],$_POST['TEL'],$_POST['FAX'],$_POST['MESSAGE']);
  ?>

</body>
</html>