<?php
session_start();

const TITLE = 'wifi お申し込み（確認画面）';
const CSS = '
<link rel="stylesheet" href="../../../union/public/css/common.css">
<link rel="stylesheet" href="../../../union/public/css/setting.css">
<link rel="stylesheet" href="../../../union/public/css/application_form_unisp.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">APPLICATION<br><span class="">UNION WI-FI お申し込み<br>（確認画面）</span></h1>
  </div>
EOF;

// セッションデータをセット
if(isset(
  $_POST['NAME'],
  $_POST['NAME_KANA'],
  $_POST['EMAIL'],
  $_POST['TEL'],
  $_POST['BIRTH_YEAR'],
  $_POST['BIRTH_MONTH'],
  $_POST['zip11'],
  $_POST['addr11'],
  $_POST['bild11'],
  $_POST['PEYMENT'],
  $_POST['CARDCOMPANY'],
  $_POST['CARDNUM1'],
  $_POST['CARDNUM2'],
  $_POST['CARDNUM3'],
  $_POST['CARDNUM4'],
  $_POST['EXPIRATION1'],
  $_POST['EXPIRATION2'],
  $_POST['CARDNAME'],
  $_POST['CARDSEC'])){
    $_SESSION['NAME']        = $_POST['NAME'];
    $_SESSION['NAME_KANA']   = $_POST['NAME_KANA'];
    $_SESSION['EMAIL']       = $_POST['EMAIL'];
    $_SESSION['TEL']         = $_POST['TEL'];
    $_SESSION['BIRTH_YEAR']  = $_POST['BIRTH_YEAR'];
    $_SESSION['BIRTH_MONTH'] = $_POST['BIRTH_MONTH'];
    $_SESSION['zip11']       = $_POST['zip11'];
    $_SESSION['addr11']      = $_POST['addr11'];
    $_SESSION['bild11']      = $_POST['bild11'];
    $_SESSION['PEYMENT']     = $_POST['PEYMENT'];
    $_SESSION['CARDCOMPANY'] = $_POST['CARDCOMPANY'];
    $_SESSION['CARDNUM1']    = $_POST['CARDNUM1'];
    $_SESSION['CARDNUM2']    = $_POST['CARDNUM2'];
    $_SESSION['CARDNUM3']    = $_POST['CARDNUM3'];
    $_SESSION['CARDNUM4']    = $_POST['CARDNUM4'];
    $_SESSION['EXPIRATION1'] = $_POST['EXPIRATION1'];
    $_SESSION['EXPIRATION2'] = $_POST['EXPIRATION2'];
    $_SESSION['CARDNAME']    = $_POST['CARDNAME'];
    $_SESSION['CARDSEC']     = $_POST['CARDSEC'];
}

// POSTからデータを受け取る
$NAME        = $_POST["NAME"];        //お名前
$NAME_KANA   = $_POST["NAME_KANA"];   //お名前（カナ）
$EMAIL       = $_POST["EMAIL"];       //メールアドレス
$TEL         = $_POST["TEL"];         //電話番号
$BIRTH_YEAR  = $_POST["BIRTH_YEAR"];  //生年月日（年）
$BIRTH_MONTH = $_POST["BIRTH_MONTH"]; //生年月日（月）
$zip11       = $_POST["zip11"];       //郵便番号
$addr11      = $_POST["addr11"];      //住所
$bild11      = $_POST["bild11"];      //マンション・建物名
$PEYMENT     = $_POST["PEYMENT"];     //支払方法
$CARDCOMPANY = $_POST["CARDCOMPANY"]; //カード会社
$CARDNUM1    = $_POST["CARDNUM1"];    //カード番号（1）
$CARDNUM2    = $_POST["CARDNUM2"];    //カード番号（2）
$CARDNUM3    = $_POST["CARDNUM3"];    //カード番号（3）
$CARDNUM4    = $_POST["CARDNUM4"];    //カード番号（4）
$EXPIRATION1 = $_POST["EXPIRATION1"]; //カード有効期限（月）
$EXPIRATION2 = $_POST["EXPIRATION2"]; //カード有効期限（年）
$CARDNAME    = $_POST["CARDNAME"];    //カード名義人
$CARDSEC     = $_POST["CARDSEC"];     //セキュリティコード


?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>

</header>
<!-- お申し込みコンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">UNION-WIFI お申し込み<br>（確認画面） ―</h2>
  </div>

  <!-- 確認画面送信フォーム -->
  <div class="confirmation mt_40">
    <form action="<?php echo SITEURL; ?>/service/application/complete/uni-wi-fi.php" method="post">
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
          <th class="col-4">生年月日</th>
          <td class="col-8"><?php echo $_POST["BIRTH_YEAR"]; ?>年<?php echo $_POST["BIRTH_MONTH"]; ?>月</td>
        </tr>
        <tr class="row">
          <th class="col-4">郵便番号</th>
          <td class="col-8"><?php echo $_POST["zip11"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">住所</th>
          <td class="col-8"><?php echo $_POST["addr11"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">マンション・建物名</th>
          <td class="col-8"><?php echo $_POST["bild11"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">支払方法</th>
          <td class="col-8"><?php echo $_POST["PEYMENT"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">カード会社</th>
          <td class="col-8"><?php echo $_POST["CARDCOMPANY"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">カード番号</th>
          <td class="col-8"><?php echo $_POST["CARDNUM1"]; ?> - <?php echo $_POST["CARDNUM2"]; ?> - <?php echo $_POST["CARDNUM3"]; ?> - <?php echo $_POST["CARDNUM4"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">カード有効期限</th>
          <td class="col-8"><?php echo $_POST["EXPIRATION1"]; ?>／<?php echo $_POST["EXPIRATION2"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">カード名義人</th>
          <td class="col-8"><?php echo $_POST["CARDNAME"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">セキュリティコード</th>
          <td class="col-8"><?php echo $_POST["CARDSEC"]; ?></td>
        </tr>
      </table>

      <div class="btn_area mt_40">
        <!-- 戻るボタン -->
        <a type="button" href="#" onClick="history.back(); return false;" class="btn btn-outline-danger" style="border-width: 1px;">戻る</a>
        <!-- 送信ボタン -->
        <input style="border-width: 1px;" type="submit" value="申込みを確定する" class="btn btn-blank btn-default bounceInRight">
      </div>
    </form>
  </div>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>