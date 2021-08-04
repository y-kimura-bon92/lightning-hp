<?php
session_start();

const TITLE = 'お問い合わせ（確認画面）';
const CSS = '
<link rel="stylesheet" href="../union/public/css/common.css">
<link rel="stylesheet" href="../union/public/css/setting.css">
<link rel="stylesheet" href="../union/public/css/contact.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">CONTACT<br><span class="">お問い合わせ<br>（完了画面）</span></h1>
  </div>
EOF;
?>

<?php

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

$mail_to = "info@union-co.jp";
$mail_subject = "メールフォームより送信されました";
$mail_body = $honbun1.$honbun2.$honbun3.$honbun4.$honbun5.$honbun6.$honbun7.$honbun8.$honbun9.$honbun10.$honbun11.$honbun12.$honbun13.$honbun14;
$mail_header = "form:".$EMAIL;

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>

</header>
<!-- お問い合わせ完了画面コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">お問い合わせ<br>（完了画面） ―</h2>
  </div>

  <!-- 注意書き -->
  <div class="notes_contact mt_40">
    <span class="notes_contact_title">CHECK！！</span>
    <ul>
      <li>確認後、少々お時間をいただく場合がございます。お急ぎの方はお電話でご連絡ください。</li>
      <li>送信から一週間を経過しても連絡が無い場合は、お手数ですがお電話で再度お問い合わせください。</li>
      <li>半角カタカナはご利用いただけません。全角カタカナでご入力ください。</li>
      <li>※印は必須項目ですので、必ずご入力ください。</li>
      <li>必要事項を入力後、フォーム下部の【送信】ボタンを押してください。</li>
    </ul>
  </div>

  <!-- お問い合わせのお礼 -->
  <div>
    <p>お問い合わせ有難うございます。
      <br>送信完了致しました。
      <br>内容を確認致しますので少々お待ち下さい。</p>

    <!-- CONTACTページに戻る -->
    <div class="btn_area mt_40">
      <p>
        <a href="#" class="btn btn-outline-danger" onClick="history.go(-2); return false;">お問い合わせページへ</a>
        <a href="<? echo SITEURL; ?>" class="btn btn-outline-danger">TOPページへ</a>
      </p>
    </div>
  </div>
  
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>