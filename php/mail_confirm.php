<?php
session_start();
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


// $NAME      = htmlspecialchars($NAME, ENT_QUOTES);
// $NAME_KANA = htmlspecialchars($NAME_KANA, ENT_QUOTES);
// $EMAIL     = htmlspecialchars($EMAIL, ENT_QUOTES);
// $TEL       = htmlspecialchars($TEL, ENT_QUOTES);
// $FAX       = htmlspecialchars($FAX, ENT_QUOTES);
// $MESSAGE   = htmlspecialchars($MESSAGE, ENT_QUOTES);

//エンコード処理
// mb_language("japanese");
// mb_internal_encoding("UTF-8");

// $mail_to = "mirai1735@icloud.com";
// $mail_subject = "メールフォームより送信されました";
// $mail_body = $NAME.$NAME_KANA.$EMAIL.$TEL.$FAX.$MESSAGE;
// $mail_header = "form:".$EMAIL;

// $mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lightning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/setting.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
</head>

<body>

  <div class="split">
    <!-- --------------------------------------------------------------------------
      スプリットレイアウト fixed
    ------------------------------------------------------------------------------ -->
    <div class="split-item split-left">
      <div class="split-left__inner">

        <!-- 左画面メインビジュアル -->
        <div class="jumbotron catch_copy">
          <h1 class="display-3">CONTACT<br><span class="">お問い合わせ（確認画面）</span></h1>
        </div>
      </div>
    </div>


    <!-- --------------------------------------------------------------------------
      スプリットレイアウト content 
    ------------------------------------------------------------------------------ -->
    <div class="split-item split-right">
      <div class="split-right__inner">

        <!-- ヘッダー -->
        <header class="mt_20 sp_mt_0 container">
          <div class="header_bar d-flex">
            <div class="header_logo sp_pt_20">
              <h2><a href="index.html">Lightning</a></h2>
            </div>
            <!-- ヘッダーメニュー -->
            <div class="header_nav">
              <!-- pc -->
              <ul class="gnav justify-content-end">
                <li><a href="philosophy.html">MESSAGE</a></li>
                <li>
                  <a href="#!">SERVICE</a>
                  <ul class="dropdown_menu_pc">
                    <li><a href="service.html">通信事業</a></li>
                    <li><a href="">Webデザイン</a></li>
                    <li><a href="">その他の事業</a></li>
                  </ul>
                </li>
                <li><a href="recruit.html">RECRUIT</a></li>
                <li><a href="company.html">COMPANY</a></li>
              </ul>
              <!-- sp -->
              <nav class="navbar navbar-light justify-content-end gnav_sp">
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navmenu1"
                    aria-controls="navmenu1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu1">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.html">TOP</a>
                    <a class="nav-item nav-link" href="philosophy.html">MESSAGE</a>
                    <a class="nav-item nav-link" href="#">SERVICE</a>
                    <ul class="dropdown_menu_pc">
                      <li><a href="service.html">通信事業</a></li>
                      <li><a href="">Webデザイン</a></li>
                      <li><a href="">その他の事業</a></li>
                    </ul>
                    <a class="nav-item nav-link" href="recruit.html">RECRUIT</a>
                    <a class="nav-item nav-link" href="company.html">COMPANY</a>
                  </div>
                </div>
              </nav>
            </div>

          </div>
        </header>



        <!-- お問い合わせ確認画面コンテンツ -->
        <div class="container mt_120 mb_120">
          <div class="mb_80">
            <h2 class="first_letter_design">お問い合わせ（確認画面） ―</h2>
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

              <div class="btn_area mt_40">
                <!-- 戻るボタン -->
                <a type="button" href="../contact.html" class="btn btn-outline-danger w-25" style="border-width: 1px;">戻る</a>
                <!-- 送信ボタン -->
                <input style="border-width: 1px;" type="submit" value="送信する" class="btn btn-blank btn-default bounceInRight w-25">
              </div>
            </form>
          </div>
        </div>



        <!-- フッター -->
        <footer>
          <div class="footer_content container pt_40">
            <h2 class="pb_20">Lightning</h2>
            <div class="row">
              <div class="col-lg-4">
                <p>〒530-0002 大阪市中央区1-2-3 <br>ビル</p>
              </div>
              <div class="col-lg-4">
                <p>〒530-0002 大阪市中央区1-2-3 <br>ビル</p>
              </div>
              <div class="col-lg-4">
                <p>〒530-0002 大阪市中央区1-2-3 <br>ビル</p>
              </div>
            </div>
          </div>
          <!-- フッターメニュー -->
          <div class="footer_menu container">
            <ul class="text-center">
              <li class="d-inline-block"><a href="philosophy.html">MESSAGE</a></li>
              <li class="d-inline-block"><a href="service.html">SERVICE</a></li>
              <li class="d-inline-block"><a href="recruit.html">RECRUIT</a></li>
              <li class="d-inline-block"><a href="company.html">COMPANY</a></li>
            </ul>
          </div>
          <!-- コピーライト -->
          <div class="footer_copy_light container">
            <p class="text-center small">Copyright © 2021 Lightning Inc. All Rights Reserved.</p>
          </div>
        </footer>
      </div>
    </div>



  </div>

</div>
</body>
</html>