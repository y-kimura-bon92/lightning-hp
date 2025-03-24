<?php
session_start();

const TITLE = 'アナログ戻しお申し込み（完了画面）';
const CSS = '
<link rel="stylesheet" href="../../../union/public/css/common.css">
<link rel="stylesheet" href="../../../union/public/css/setting.css">
<link rel="stylesheet" href="../../../union/public/css/application_form_unisp.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">APPLICATION<br><span class="">アナログ戻しお申し込み<br>（完了画面）</span></h1>
  </div>
EOF;

// セッションデータを変数に代入
$NAME        = $_SESSION["NAME"];        //お名前
$NAME_KANA   = $_SESSION["NAME_KANA"];   //お名前（カナ）
$EMAIL       = $_SESSION["EMAIL"];       //メールアドレス
$TEL         = $_SESSION["TEL"];         //電話番号
$BIRTH_YEAR  = $_SESSION["BIRTH_YEAR"];  //生年月日（年）
$BIRTH_MONTH = $_SESSION["BIRTH_MONTH"]; //生年月日（月）
$zip11       = $_SESSION["zip11"];       //郵便番号
$addr11      = $_SESSION["addr11"];      //住所
$bild11      = $_SESSION["bild11"];      //マンション・建物名
$PEYMENT     = $_SESSION["PEYMENT"];     //支払方法
$CARDCOMPANY = $_SESSION["CARDCOMPANY"]; //カード会社
$CARDNUM1    = $_SESSION["CARDNUM1"];    //カード番号（1）
$CARDNUM2    = $_SESSION["CARDNUM2"];    //カード番号（2）
$CARDNUM3    = $_SESSION["CARDNUM3"];    //カード番号（3）
$CARDNUM4    = $_SESSION["CARDNUM4"];    //カード番号（4）
$EXPIRATION1 = $_SESSION["EXPIRATION1"]; //カード有効期限（月）
$EXPIRATION2 = $_SESSION["EXPIRATION2"]; //カード有効期限（年）
$CARDNAME    = $_SESSION["CARDNAME"];    //カード名義人
$CARDSEC     = $_SESSION["CARDSEC"];     //セキュリティコード

$NAME        = htmlspecialchars($NAME, ENT_QUOTES);        //お名前
$NAME_KANA   = htmlspecialchars($NAME_KANA, ENT_QUOTES);   //お名前（カナ）
$EMAIL       = htmlspecialchars($EMAIL, ENT_QUOTES);       //メールアドレス
$TEL         = htmlspecialchars($TEL, ENT_QUOTES);         //電話番号
$BIRTH_YEAR  = htmlspecialchars($BIRTH_YEAR, ENT_QUOTES);  //生年月日（年）
$BIRTH_MONTH = htmlspecialchars($BIRTH_MONTH, ENT_QUOTES); //生年月日（月）
$zip11       = htmlspecialchars($zip11, ENT_QUOTES);       //郵便番号
$addr11      = htmlspecialchars($addr11, ENT_QUOTES);      //住所
$bild11      = htmlspecialchars($bild11, ENT_QUOTES);      //マンション・建物名
$PEYMENT     = htmlspecialchars($PEYMENT, ENT_QUOTES);     //支払方法
$CARDCOMPANY = htmlspecialchars($CARDCOMPANY, ENT_QUOTES); //カード会社
$CARDNUM1    = htmlspecialchars($CARDNUM1, ENT_QUOTES);    //カード番号（1）
$CARDNUM2    = htmlspecialchars($CARDNUM2, ENT_QUOTES);    //カード番号（2）
$CARDNUM3    = htmlspecialchars($CARDNUM3, ENT_QUOTES);    //カード番号（3）
$CARDNUM4    = htmlspecialchars($CARDNUM4, ENT_QUOTES);    //カード番号（4）
$EXPIRATION1 = htmlspecialchars($EXPIRATION1, ENT_QUOTES); //カード有効期限（月）
$EXPIRATION2 = htmlspecialchars($EXPIRATION2, ENT_QUOTES); //カード有効期限（年）
$CARDNAME    = htmlspecialchars($CARDNAME, ENT_QUOTES);    //カード名義人
$CARDSEC     = htmlspecialchars($CARDSEC, ENT_QUOTES);     //セキュリティコード

$honbun1  = '';
$honbun2  = "株式会社UNION アナログ戻しお申し込み\n\n";
$honbun3  = "【お名前】\n";
$honbun4  = "   {$NAME}\n\n";
$honbun5  = "【お名前（カナ）】\n";
$honbun6  = "   {$NAME_KANA}\n\n";
$honbun7  = "【メールアドレス】\n";
$honbun8  = "   {$EMAIL}\n\n";
$honbun9  = "【電話番号】\n";
$honbun10 = "   {$TEL}\n\n";
$honbun11 = "【生年月日】\n";
$honbun12 = "   {$BIRTH_YEAR}年{$BIRTH_MONTH}月\n\n";
$honbun13 = "【郵便番号】";
$honbun14 = "   {$zip11}\n\n";
$honbun15 = "【住所】";
$honbun16 = "   {$addr11}\n\n";
$honbun17 = "【マンション・建物名】";
$honbun18 = "   {$bild11}\n\n";
$honbun19 = "【支払方法】";
$honbun20 = "   {$PEYMENT}\n\n";
$honbun21 = "【カード会社】";
$honbun22 = "   {$CARDCOMPANY}\n\n";
$honbun23 = "【カード番号】";
$honbun24 = "   {$CARDNUM1}-{$CARDNUM2}-{$CARDNUM3}-{$CARDNUM4}\n\n";
$honbun25 = "【カード有効期限】";
$honbun26 = "   {$EXPIRATION1}／{$EXPIRATION2}\n\n";
$honbun27 = "【カード名義人】";
$honbun28 = "   {$CARDNAME}\n\n";
$honbun29 = "【セキュリティコード】";
$honbun30 = "   {$CARDSEC}\n\n";

//エンコード処理
mb_language("japanese");
mb_internal_encoding("UTF-8");

$mail_to = "info@union-co.jp";
$mail_subject = "UNION アナログ戻し申し込みフォームより";
$mail_body = $honbun1.$honbun2.$honbun3.$honbun4.$honbun5.$honbun6.$honbun7.$honbun8.$honbun9.$honbun10.$honbun11.$honbun12.$honbun13.$honbun14.$honbun15.$honbun16.$honbun17.$honbun18.$honbun19.$honbun20.$honbun21.$honbun22.$honbun23.$honbun24.$honbun25.$honbun26.$honbun27.$honbun28.$honbun29.$honbun30;
$mail_header = "form:".$EMAIL;

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

session_destroy()
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/header.php'); ?>

</header>
<!-- お問い合わせ完了画面コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">アナログ戻しお申し込み<br>（完了画面） ―</h2>
  </div>

  <!-- お申し込みのお礼 -->
  <div>
    <p>お申し込み有難うございます。
      <br>送信完了致しました。
      <br>内容を確認致しますので少々お待ち下さい。</p>

    <!-- applicationページに戻る -->
    <div class="btn_area mt_40">
      <p>
        <a href="#" class="btn btn-outline-danger" onClick="history.go(-2); return false;">申し込みフォームへ</a>
        <a href="<?php echo SITEURL; ?>" class="btn btn-outline-danger">TOPページへ</a>
      </p>
    </div>
  </div>

</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/footer.php'); ?>