<?php
session_start();

const TITLE = 'ドコモ光お申し込み（完了画面）';
const CSS = '
<link rel="stylesheet" href="../../../union/public/css/common.css">
<link rel="stylesheet" href="../../../union/public/css/setting.css">
<link rel="stylesheet" href="../../../union/public/css/application_form_unisp.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">APPLICATION<br><span class="">ドコモ光（転用）お申し込み<br>（完了画面）</span></h1>
  </div>
EOF;

// 変数にセッションデータを代入
$APP_DETALIS       = $_SESSION['APP_DETALIS'];       //申し込み内容（新規／転用）
$TRANSFER_NUMBER   = $_SESSION['TRANSFER_NUMBER'];   //転用番号
$NAME              = $_SESSION['NAME'];              //名前
$NAME_KANA         = $_SESSION['NAME_KANA'];         //名前（カナ）
$TEL               = $_SESSION['TEL'];               //電話番号
$BIRTH_YEAR        = $_SESSION['BIRTH_YEAR'];        //生年月日（年）
$BIRTH_MONTH       = $_SESSION['BIRTH_MONTH'];       //生年月日（月）
$BIRTH_DAY         = $_SESSION['BIRTH_DAY'];         //生年月日（日）
$GENDER            = $_SESSION['GENDER'];            //性別
$zip11             = $_SESSION['zip11'];             //郵便番号
$addr11            = $_SESSION['addr11'];            //住所
$bild11            = $_SESSION['bild11'];            //マンション・建物名
$PLAN              = $_SESSION['PLAN'];              //プラン名
$OPTION            = $_SESSION['OPTION'];            //オプション
$ISP               = $_SESSION['ISP'];               //既存ISP
$CONSTRUCTION_COST = $_SESSION['CONSTRUCTION_COST']; //工事費
$CONFIRM_CALL      = $_SESSION['CONFIRM_CALL'];      //確認電話
$CONST_DATE        = $_SESSION['CONST_DATE'];        //工事希望日
$REMARKS           = $_SESSION['REMARKS'];           //備考


$APP_DETALIS       = htmlspecialchars($APP_DETALIS, ENT_QUOTES);
$TRANSFER_NUMBER   = htmlspecialchars($TRANSFER_NUMBER, ENT_QUOTES);
$NAME              = htmlspecialchars($NAME, ENT_QUOTES);
$NAME_KANA         = htmlspecialchars($NAME_KANA, ENT_QUOTES);
$TEL               = htmlspecialchars($TEL, ENT_QUOTES);
$BIRTH_YEAR        = htmlspecialchars($BIRTH_YEAR, ENT_QUOTES);
$BIRTH_MONTH       = htmlspecialchars($BIRTH_MONTH, ENT_QUOTES);
$BIRTH_DAY         = htmlspecialchars($BIRTH_DAY, ENT_QUOTES);
$GENDER            = htmlspecialchars($GENDER, ENT_QUOTES);
$zip11             = htmlspecialchars($zip11, ENT_QUOTES);
$addr11            = htmlspecialchars($addr11, ENT_QUOTES);
$bild11            = htmlspecialchars($bild11, ENT_QUOTES);
$PLAN              = htmlspecialchars($PLAN, ENT_QUOTES);
$OPTION            = htmlspecialchars($OPTION, ENT_QUOTES);
$ISP               = htmlspecialchars($ISP, ENT_QUOTES);
$CONSTRUCTION_COST = htmlspecialchars($CONSTRUCTION_COST, ENT_QUOTES);
$CONFIRM_CALL      = htmlspecialchars($CONFIRM_CALL, ENT_QUOTES);
$CONST_DATE        = htmlspecialchars($CONST_DATE, ENT_QUOTES);
$REMARKS           = htmlspecialchars($REMARKS, ENT_QUOTES);

// メール作成
$honbun1  = '';
$honbun2  = "株式会社UNION ドコモ光 お申し込み\n\n";
$honbun35 = "【申し込み内容（新規／転用）】\n";
$honbun36 = "\t{$APP_DETALIS}\n\n";
$honbun3  = "【転用番号】\n";
$honbun4  = "\t{$TRANSFER_NUMBER}\n\n";
$honbun5  = "【お名前】\n";
$honbun6  = "\t{$NAME}\n\n";
$honbun7  = "【名前（カナ）】\n";
$honbun8  = "\t{$NAME_KANA}\n\n";
$honbun9  = "【電話番号】\n";
$honbun10 = "\t{$TEL}\n\n";
$honbun11 = "【生年月日】\n";
$honbun12 = "\t{$BIRTH_YEAR}年{$BIRTH_MONTH}月{$BIRTH_DAY}日\n\n";
$honbun13 = "【性別】\n";
$honbun14 = "\t{$GENDER}\n\n";
$honbun15 = "【郵便番号】\n";
$honbun16 = "〒{$zip11}\n\n";
$honbun17 = "【住所】\n";
$honbun18 = "\t{$addr11}\n\n";
$honbun19 = "【マンション・建物名】\n";
$honbun20 = "\t{$bild11}\n\n";
$honbun21 = "【プラン名】\n";
$honbun22 = "\t{$PLAN}\n\n";
$honbun23 = "【オプション】\n";
$honbun24 = "\t{$OPTION}\n\n";
$honbun25 = "【既存ISP】\n";
$honbun26 = "\t{$ISP}\n\n";
$honbun27 = "【工事費】\n";
$honbun28 = "\t{$CONSTRUCTION_COST}\n\n";
$honbun29 = "【確認電話】\n";
$honbun30 = "\t{$CONFIRM_CALL}\n\n";
$honbun31 = "【工事希望日】\n";
$honbun32 = "\t{$CONST_DATE}\n\n";
$honbun33 = "【備考】\n";
$honbun34 = "\t{$REMARKS}\n\n";

//エンコード処理
mb_language("japanese");
mb_internal_encoding("UTF-8");

$mail_to = "info@union-co.jp";
$mail_subject = "UNION ドコモ光申し込みフォームより";
$mail_body = $honbun1.$honbun2.$honbun35.$honbun36.$honbun3.$honbun4.$honbun5.$honbun6.$honbun7.$honbun8.$honbun9.$honbun10.$honbun11.$honbun12.$honbun13.$honbun14.$honbun15.$honbun16.$honbun17.$honbun18.$honbun19.$honbun20.$honbun21.$honbun22.$honbun23.$honbun24.$honbun25.$honbun26.$honbun27.$honbun28.$honbun29.$honbun30.$honbun31.$honbun32.$honbun33.$honbun34;
$mail_header = "form:".$EMAIL;

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);

session_destroy()
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>

</header>
<!-- お問い合わせ完了画面コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">ドコモ光お申し込み<br>（完了画面） ―</h2>
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

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>