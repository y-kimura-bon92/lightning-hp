<?php
session_start();

const TITLE = 'お問い合わせ（確認画面）';
const CSS = '
<link rel="stylesheet" href="../union/public/css/common.css">
<link rel="stylesheet" href="../union/public/css/setting.css">
<link rel="stylesheet" href="../union/public/css/contact.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">CONTACT<br><span class="">お問い合わせ<br>（確認画面）</span></h1>
  </div>
EOF;
?>

<?php

if(isset(
  $_POST['NAME'],
  $_POST['NAME_KANA'],
  $_POST['EMAIL'],
  $_POST['TEL'],
  $_POST['FAX'],
  $_POST['MESSAGE'])){
    $_SESSION['NAME']      = $_POST['NAME'];
    $_SESSION['NAME_KANA'] = $_POST['NAME_KANA'];
    $_SESSION['EMAIL']     = $_POST['EMAIL'];
    $_SESSION['TEL']       = $_POST['TEL'];
    $_SESSION['FAX']       = $_POST['FAX'];
    $_SESSION['MESSAGE']   = $_POST['MESSAGE'];
}

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

?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>

</header>
<!-- お問い合わせ確認画面コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">お問い合わせ<br>（確認画面） ―</h2>
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

  <!-- 確認画面送信フォーム -->
  <div class="confirmation mt_40">
    <form action="<?php echo SITEURL; ?>/mail/complete.php" method="post">
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

      <div class="btn_area mt_40">
        <!-- 戻るボタン -->
        <a type="button" href="<?php echo SITEURL; ?>/contact.php" class="btn btn-outline-danger" style="border-width: 1px;">戻る</a>
        <!-- 送信ボタン -->
        <input style="border-width: 1px;" type="submit" value="送信する" class="btn btn-blank btn-default bounceInRight">
      </div>
    </form>
  </div>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>