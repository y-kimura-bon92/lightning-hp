<?php
session_start();

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
$honbun2  = "株式会社UNION UNION WI-FI お申し込み\n\n";
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
$mail_subject = "UNION WI-FI申し込みフォームより";
$mail_body = $honbun1.$honbun2.$honbun3.$honbun4.$honbun5.$honbun6.$honbun7.$honbun8.$honbun9.$honbun10.$honbun11.$honbun12.$honbun13.$honbun14.$honbun15.$honbun16.$honbun17.$honbun18.$honbun19.$honbun20.$honbun21.$honbun22.$honbun23.$honbun24.$honbun25.$honbun26.$honbun27.$honbun28.$honbun29.$honbun30;
$mail_header = "form:".$EMAIL;

$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="株式会社UNION,株式会社ユニオン,UNION,ユニオン,ゆにおん">
  <meta name="description" content="株式会社UNIONは、お客様のニーズに合わせた幅広い商材を取り扱う販売代理店です。お客様一人一人に最適のプラン、商品をご提案させていただきます。">
  <title>お申し込み（完了画面）| 株式会社UNION｜General Industry Office</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
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
          <h1 class="display-3">APPLICATION<br><span class="">お申し込み<br>（完了画面）</span></h1>
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

            <!-- ヘッダーロゴ -->
            <div class="header_logo sp_pt_20">
              <h2><a href="index.html"><img src="../img/logoBK.png" alt=""></a></h2>
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
                <li><a href="https://kachibon.work/lightning/hikari_collaboration.html" style="color: #840204;">APPLICATION</a></li>
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
                    <a class="nav-item nav-link" href="https://kachibon.work/lightning/hikari_collaboration.html" style="color: #840204;">APPLICATION</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </header>



        <!-- お問い合わせ完了画面コンテンツ -->
        <div class="container mt_120 mb_120 sp_mt_80">
          <div class="mb_80">
            <h2 class="first_letter_design">お申し込み<br>（完了画面） ―</h2>
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
                <a href="../index.html" class="btn btn-outline-danger">TOPページへ</a>
              </p>
            </div>
          </div>
          
        </div>



        <!-- ------------------------ 
          フッター 
        --------------------------- -->
        <footer>
          <div class="footer_content container pt_40 pb_40">
            <!-- フッターロゴ -->
            <h2 class="pb_40"><a href="index.html"><img class="footer_logo" src="../img/logoBKWH.png" alt=""></a></h2>

            <div class="row">
              <!-- フッター企業概要 -->
              <div class="col-lg-4 footer_left_content sp_pb_40">
                <p>株式会社UNION</p>
                <p>〒541-0056 大阪府大阪市中央区久太郎町3丁目1-27 <br>船場大西ビル1階</p>
                <p>TEL：050-3152-9680</p>
                <p class="sp_mb_0">事業内容：通信事業、webデザイン事業、海外事業、コンテンツ事業、不動産事業、アパレル事業</p>
              </div>

              <!-- フッターお問い合わせ -->
              <div class="col-lg-4 footer_center_content sp_mt_40 sp_pb_40">
                <p class="mb_20">お問い合わせ</p>
                <p>ご不明点など、お気軽にお問い合わせ下さい。</p>
                <p class="footer_content_btn text-center"><a href="contact.html" class="d-inline-block">メールフォーム</a></p>
              </div>

              <!-- フッターサイトマップ -->
              <div class="col-lg-4 footer_right_content sp_mt_40">
                <p>サイトマップ</p>
                <ul class="outside_list">
                  <li><a href="index.html">top</a></li>
                  <li><a href="philosophy.html">代表メッセージ</a></li>
                  <li>事業内容
                    <ul class="inside_list">
                      <li><!-- 通信事業 -->
                        <a href="service_internet.html">通信事業</a>
                        <ul style="text-indent: 1em;">
                          <li><a href="service_union_isp.html">UNION ISP</a> - <a href="application_form_unisp.html">申し込み</a></li>
                          <li><a href="service_union_wifi.html">UNION WI-FI</a> - <a href="application_form_uni-wi-fi.html">申し込み</a></li>
                          <li><a href="service_analog.html">アナログ戻し</a> - <a href="application_form_analog.html">申し込み</a></li>
                          <li><a href="https://kachibon.work/lightning/hikari_collaboration.html">光コラボレーション比較</a></li>
                          <!-- <li><a href="application_form_docomohikari.html">ドコモ光お申し込み</a></li> -->
                        </ul>
                      </li>
                      <li><!-- WEBデザイン -->
                        <a href="service_webdesign.html">WEBデザイン</a>
                      </li>
                      <li><!-- その他事業 -->
                        <a href="service_other.html">その他事業</a>
                        <ul style="text-indent: 1em;">
                          <li><a href="service_other.html#iphone_repear">iphone修理</a></li>
                          <li><a href="service_other.html#curedit">クレカ保証</a> - <a href="application_form_credit.html">申し込み</a></li>
                          <li><a href="service_other.html#mutual">共済</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="company.html">企業内容・アクセス</a></li>
                  <li><a href="contact.html">お問い合わせ</a></li>
                </ul>
              </div>

            </div>
          </div>

          <!-- フッターメニュー -->
          <!-- <div class="footer_menu container">
            <ul class="text-center">
              <li class="d-inline-block"><a href="philosophy.html">MESSAGE</a></li>
              <li class="d-inline-block"><a href="service.html">SERVICE</a></li>
              <li class="d-inline-block"><a href="recruit.html">RECRUIT</a></li>
              <li class="d-inline-block"><a href="company.html">COMPANY</a></li>
            </ul>
          </div> -->

          <!-- コピーライト -->
          <div class="footer_copy_light container">
            <p class="text-center small">Copyright © 2021 UNION Inc. All Rights Reserved.</p>
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

  <!-- セッション終了 -->
  <?php
  unset($_POST['NAME'],$_POST['NAME_KANA'],$_POST['EMAIL'],$_POST['TEL'],$_POST['FAX'],$_POST['MESSAGE']);
  ?>

</body>
</html>