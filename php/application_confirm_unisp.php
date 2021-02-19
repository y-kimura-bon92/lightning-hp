<?php
session_start();

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
  <link rel="stylesheet" href="../css/application_form_unisp.css">
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
          <h1 class="display-3">APPLICATION<br><span class="">UNION-ISP お申し込み（確認画面）</span></h1>
        </div>
      </div>
    </div>


    <!-- --------------------------------------------------------------------------
      スプリットレイアウト content 
    ------------------------------------------------------------------------------ -->
    <div class="split-item split-right">
      <div class="split-right__inner">

        <!-- ------------------------ 
          ヘッダー 
        --------------------------- -->
        <header class="mt_20 sp_mt_0 container">
          <div class="header_bar d-flex">
            <div class="header_logo sp_pt_20">
              <h2><a href="index.html">Lightning</a></h2>
            </div>
            <!-- ヘッダーメニュー -->
            <div class="header_nav">

              <!-- pc menu -->
              <ul class="gnav justify-content-end">
                <li><a href="philosophy.html">MESSAGE</a></li>
                <li>
                  <a>SERVICE</a>
                  <ul class="dropdown_menu_pc">
                    <li><a href="service_internet.html">通信事業</a></li>
                    <li><a href="service_webdesign.html">Webデザイン</a></li>
                    <li><a href="service_other.html">その他の事業</a></li>
                  </ul>
                </li>
                <li><a href="recruit.html">RECRUIT</a></li>
                <li><a href="company.html">COMPANY</a></li>
                <li><a href="contact.html">CONTACT</a></li>
              </ul>

              <!-- sp menu -->
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
                    <a class="nav-item nav-link" href="service_internet.html">通信事業</a>
                    <a class="nav-item nav-link" href="service_webdesign.html">Webデザイン</a>
                    <a class="nav-item nav-link" href="service_other.html">その他の事業</a>
                    <a class="nav-item nav-link" href="recruit.html">RECRUIT</a>
                    <a class="nav-item nav-link" href="company.html">COMPANY</a>
                    <a class="nav-item nav-link" href="contact.html">CONTACT</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </header>



        <!-- お申し込みコンテンツ -->
        <div class="container mt_120 mb_120">
          <div class="mb_80">
            <h2 class="first_letter_design">お申し込み（確認画面） ―</h2>
          </div>

          <!-- 確認画面送信フォーム -->
          <div class="confirmation mt_40">
            <form action="application_complete_unisp.php" method="post">
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
                <a type="button" href="#" onClick="history.back(); return false;" class="btn btn-outline-danger w-25" style="border-width: 1px;">戻る</a>
                <!-- 送信ボタン -->
                <input style="border-width: 1px;" type="submit" value="申込みを確定する" class="btn btn-blank btn-default bounceInRight w-25">
              </div>
            </form>
          </div>
        </div>



        <!-- ------------------------ 
          フッター 
        --------------------------- -->
        <footer>
          <div class="footer_content container pt_40 pb_40">
            <!-- フッターロゴ -->
            <h2 class="pb_40">Lightning</h2>
            <div class="row">
              <!-- フッター企業概要 -->
              <div class="col-lg-4 footer_left_content sp_pb_40">
                <p>株式会社UNION</p>
                <p>〒530-0002 大阪市中央区1-2-3 <br>ビル</p>
                <p>TEL：06-1234-5678</p>
                <p class="sp_mb_0">事業内容：通信事業、webデザイン事業、海外事業、コンテンツ事業、不動産事業、アパレル事業</p>
              </div>

              <!-- フッターお問い合わせ -->
              <div class="col-lg-4 footer_center_content sp_mt_40 sp_pb_40">
                <p class="mb_20">お問い合わせ</p>
                <p>ご不明点など、お気軽にお問い合わせ下さい。</p>
                <p class="footer_content_btn text-center"><a href="../contact.html" class="d-inline-block">メールフォーム</a></p>
              </div>

              <!-- フッターサイトマップ -->
              <div class="col-lg-4 footer_right_content sp_mt_40">
                <p>サイトマップ</p>
                <ul class="outside_list">
                  <li><a href="index.html">top</a></li>
                  <li>事業内容
                    <ul class="inside_list">
                      <li><a href="service_internet.html">プロバイダ</a> - <a href="">申し込み</a></li>
                      <li><a href="service_internet.html#uni_wifi">UNION WI-FI</a> - <a href="">申し込み</a></li>
                      <li><a href="service_internet.html#analog">アナログ戻し</a> - <a href="">申し込み</a></li>
                      <li><a href="service_webdesign.html">WEBデザイン</a></li>
                      <li><a href="service_other.html#iphone_repear">iphone修理</a></li>
                      <li><a href="service_other.html#curedit">クレカ保証</a> - <a href="">申し込み</a></li>
                      <li><a href="service_other.html#mutual">共済</a></li>
                    </ul>
                  </li>
                  <li><a href="company.html">企業内容・アクセス</a></li>
                  <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
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

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
  <script src="js/index.js"></script>

</body>
</html>