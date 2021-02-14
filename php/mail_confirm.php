<?php

// POSTからデータを受け取る
$NAME      = $_POST["NAME"];      //お名前
$NAME_KANA = $_POST["NAME_KANA"]; //お名前（カナ）
$EMAIL     = $_POST["EMAIL"];     //メールアドレス
$TEL       = $_POST["TEL"];       //電話番号
$FAX       = $_POST["FAX"];       //FAX
$MESSAGE   = $_POST["MESSAGE"];   //お問い合わせ内容

// 入力エラーを調べる
$error = '';
if ($NAME == "") {
  $error = $error."<p>お名前が入力されていません。</p>";
}
if ($NAME == "") {
  $error = $error."<p>お名前（カナ）が入力されていません。</p>";
}
if ($EMAIL == "") {
  $error = $error."<p>メールアドレスが入力されていません。</p>";
}
if ($TEL == "") {
  $error = $error."<p>電話番号が入力されていません。</p>";
}


$NAME      = htmlspecialchars($NAME, ENT_QUOTES);
$NAME_KANA = htmlspecialchars($NAME_KANA, ENT_QUOTES);
$EMAIL     = htmlspecialchars($EMAIL, ENT_QUOTES);
$TEL       = htmlspecialchars($TEL, ENT_QUOTES);
$FAX       = htmlspecialchars($FAX, ENT_QUOTES);
$MESSAGE   = htmlspecialchars($MESSAGE, ENT_QUOTES);

//エンコード処理
mb_language("japanese");
mb_internal_encoding("UTF-8");

$mail_to = "mirai1735@icloud.com";
$mail_subject = "メールフォームより送信されました";
$mail_body = $NAME.$NAME_KANA.$EMAIL.$TEL.$FAX.$MESSAGE;
$mail_header = "form:".$EMAIL;

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

if ($mailsend) {
  echo '<p class="msg">メッセージは正常に送信されました</p>';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lightning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/setting.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
</head>
<body>


<div class="container pt-5">
  <div class="w-75 m-auto">
    <h4 class="mt-5 mb-5 text-center text-white p-2">お問い合わせ内容確認画面</h4>
  <form action="mail_complete.php" method="post">
    <table class="table">
      <tr class="row">
        <th class="col-4">お名前</th>
        <td class="col-8"><?php echo $_POST["NAME"]; ?></td>
      </tr>
      <tr class="row">
        <th class="col-4">お名前（カナ）</th>
        <td class="col-8"><?php echo $_POST["NAME_KANA"]; ?></td>
      </tr>
      <tr class="row">
        <th class="col-4">メールアドレス</th>
        <td class="col-8"><?php echo $_POST["EMAIL"]; ?></td>
      </tr>
      <tr class="row">
        <th class="col-4">電話番号</th>
        <td class="col-8"><?php echo $_POST["TEL"]; ?></td>
      </tr>
      <tr class="row">
        <th class="col-4">FAX番号</th>
        <td class="col-8"><?php echo $_POST["FAX"]; ?></td>
      </tr>
    </table>
    <a type="button" href="index.html" class="btn btn-outline-danger w-25" style="border-width: 1px;">戻る</a>
    <input style="border-width: 1px;" type="submit" value="送信する" class="btn btn-blank btn-default bounceInRight w-25">
  </form>
  </div>

</div>
</body>
</html>