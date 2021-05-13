<?php
session_start();

// 変数にセッションデータを代入
$origin_postcode      = $_SESSION['origin_postcode'];      //お引越し元のご住所（郵便番号）
$origin_address       = $_SESSION['origin_address'];       //お引越し元のご住所（都道府県+以降の住所）
$origin_address_2     = $_SESSION['origin_address_2'];     //お引越し元のご住所（マンション・建物名）
$destination_postcode = $_SESSION['destination_postcode']; //お引越し先のご住所（郵便番号）
$destination_address  = $_SESSION['destination_address'];  //お引越し先のご住所（都道府県+以降の住所）
$destination_address2 = $_SESSION['destination_address2']; //お引越し先のご住所（マンション・建物名）
$move_day             = $_SESSION['move_day'];             //お引越し予定時期
$move                 = $_SESSION['move'];                 //お引越し予定（未定・済）
$line                 = $_SESSION['line'];                 //インターネット回線名
$provider             = $_SESSION['provider'];             //プロバイダ
$namae_s              = $_SESSION['namae_s'];              //お申込者名
$namae_sk             = $_SESSION['namae_sk'];             //お申込者名（カナ）
$tel_s                = $_SESSION['tel_s'];                //携帯電話番号
$carrer[0]            = $_SESSION['carrer[0]'];            //携帯キャリア[ドコモ]
$carrer[1]            = $_SESSION['carrer[1]'];            //携帯キャリア[au]
$carrer[2]            = $_SESSION['carrer[2]'];            //携帯キャリア[ソフトバンク]
$carrer[3]            = $_SESSION['carrer[3]'];            //携帯キャリア[その他]
$email                = $_SESSION['email'];                //メールアドレス
$hope_time            = $_SESSION['hope_time'];            //お電話がつながりやすい時間帯
$free                 = $_SESSION['free'];                 //その他お問い合わせ


$origin_postcode      = htmlspecialchars($origin_postcode, ENT_QUOTES);
$origin_address       = htmlspecialchars($origin_address, ENT_QUOTES);
$origin_address_2     = htmlspecialchars($origin_address_2, ENT_QUOTES);
$destination_postcode = htmlspecialchars($destination_postcode, ENT_QUOTES);
$destination_address  = htmlspecialchars($destination_address, ENT_QUOTES);
$destination_address2 = htmlspecialchars($destination_address2, ENT_QUOTES);
$move_day             = htmlspecialchars($move_day, ENT_QUOTES);
$move                 = htmlspecialchars($move, ENT_QUOTES);
$line                 = htmlspecialchars($line, ENT_QUOTES);
$provider             = htmlspecialchars($provider, ENT_QUOTES);
$namae_s              = htmlspecialchars($namae_s, ENT_QUOTES);
$namae_sk             = htmlspecialchars($namae_sk, ENT_QUOTES);
$tel_s                = htmlspecialchars($tel_s, ENT_QUOTES);
$carrer[0]            = htmlspecialchars($carrer[0], ENT_QUOTES);
$carrer[1]            = htmlspecialchars($carrer[1], ENT_QUOTES);
$carrer[2]            = htmlspecialchars($carrer[2], ENT_QUOTES);
$carrer[3]            = htmlspecialchars($carrer[3], ENT_QUOTES);
$email                = htmlspecialchars($email, ENT_QUOTES);
$hope_time            = htmlspecialchars($hope_time, ENT_QUOTES);
$free                 = htmlspecialchars($free, ENT_QUOTES);

//エンコード処理
mb_language("japanese");
mb_internal_encoding("UTF-8");

// メール作成
$mailto = "info@union-co.jp,{$email}";  //宛先メールアドレス
const SUBJECT = "株式会社UNION インターネットご案内フォームより";
$content = "株式会社UNION インターネットご案内フォームより\n\n";
$content .= "【お引越し元のご住所】\n";
$content .= "\t〒{$origin_postcode}\n";
$content .= "\t{$origin_address}\n";
$content .= "\t{$origin_address_2}\n\n";
$content .= "【お引越し先のご住所】\n";
$content .= "\t〒{$destination_postcode}\n";
$content .= "\t{$destination_address}\n";
$content .= "\t{$destination_address2}\n\n";
$content .= "【お引越し予定時期】\n";
$content .= "\t{$move_day}\n\n";
$content .= "【お引越し予定（未定・済）】\n";
$content .= "\t{$move}\n\n";
$content .= "【インターネット回線名】\n";
$content .= "\t{$line}\n\n";
$content .= "【プロバイダ】\n";
$content .= "\t{$provider}\n\n";
$content .= "【お申込者名】\n";
$content .= "\t{$namae_s}\n\n";
$content .= "【お申込者名（カナ）】\n";
$content .= "\t{$namae_sk}\n\n";
$content .= "【携帯電話番号】\n";
$content .= "\t{$tel_s}\n\n";
$content .= "【携帯キャリア】\n";
$content .= "\t{$carrer}\n\n";
$content .= "【メールアドレス】\n";
$content .= "\t{$email}\n\n";
$content .= "【お電話がつながりやすい時間帯】\n";
$content .= "\t{$hope_time}\n\n";
$content .= "【その他お問い合わせ】\n";
$content .= "\t{$free}\n\n";

$headers = "From:" .mb_encode_mimeheader("株式会社UNION@Inc.AllRightsReserved.");
$headers .="\n";
$headers .="Bcc: mimirai1735@gmail.com";

$is_success = mb_send_mail($mailto, SUBJECT, $content, $headers);

if(!$is_success) {
  die('メール送信失敗');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="google-site-verification" content="kH5em0acV4kH6CCYLrBiFUE9dnYWA44uITKCA_GBupA" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="株式会社UNION,株式会社ユニオン,UNION,ユニオン,ゆにおん">
  <meta name="description" content="株式会社UNIONは、お客様のニーズに合わせた幅広い商材を取り扱う販売代理店です。お客様一人一人に最適のプラン、商品をご提案させていただきます。">
  <title>ドコモ光お申し込み（完了画面）| 株式会社UNION｜General Industry Office</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://union-co.jp/css/setting.css">
  <link rel="stylesheet" href="https://union-co.jp/css/common.css">
  <link rel="stylesheet" href="https://union-co.jp/css/application_form_unisp.css">
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
          <h1 class="display-3">APPLICATION<br><span class="">インターネットご案内フォーム<br>（完了画面）</span></h1>
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
              <h2><a href="https://union-co.jp/"><img src="https://union-co.jp/img/logoBK.png" alt=""></a></h2>
            </div>

            <!-- ヘッダーメニュー -->
            <div class="header_nav">

              <!-- pc menu -->
              <ul class="gnav justify-content-end">
                <li><a href="https://union-co.jp/philosophy.html">MESSAGE</a></li>
                <li>
                  <a>SERVICE</a>
                  <ul class="dropdown_menu_pc">
                    <li><a href="https://union-co.jp/service_internet.html">通信事業</a></li>
                    <li><a href="https://union-co.jp/service_webdesign.html">Webデザイン</a></li>
                    <li><a href="https://union-co.jp/service_other.html">その他の事業</a></li>
                  </ul>
                </li>
                <li><a href="https://union-co.jp/recruit.html">RECRUIT</a></li>
                <li><a href="https://union-co.jp/company.html">COMPANY</a></li>
                <li><a href="https://union-co.jp/contact.html">CONTACT</a></li>
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
                    <a class="nav-item nav-link" href="https://union-co.jp/">TOP</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/philosophy.html">MESSAGE</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/service_internet.html">通信事業</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/service_webdesign.html">Webデザイン</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/service_other.html">その他の事業</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/recruit.html">RECRUIT</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/company.html">COMPANY</a>
                    <a class="nav-item nav-link" href="https://union-co.jp/contact.html">CONTACT</a>
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
                <a href="https://union-co.jp/" class="btn btn-outline-danger">TOPページへ</a>
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
            <h2 class="pb_40"><a href="https://union-co.jp/"><img class="footer_logo" src="https://union-co.jp/img/logoBKWH.png" alt=""></a></h2>

            <div class="row">
              <!-- フッター企業概要 -->
              <div class="col-lg-4 footer_left_content sp_pb_40">
                <p>株式会社UNION</p>
                <p>〒541-0056 大阪府大阪市中央区久太郎町3丁目1-27 <br>船場大西ビル1階</p>
                <p>TEL：050-3176-1156</p>
                <p class="sp_mb_0">事業内容：通信事業、webデザイン事業、海外事業、コンテンツ事業、不動産事業、アパレル事業</p>
              </div>

              <!-- フッターお問い合わせ -->
              <div class="col-lg-4 footer_center_content sp_mt_40 sp_pb_40">
                <p class="mb_20">お問い合わせ</p>
                <p>ご不明点など、お気軽にお問い合わせ下さい。</p>
                <p class="footer_content_btn text-center"><a href="https://union-co.jp/contact.html" class="d-inline-block">メールフォーム</a></p>
              </div>

              <!-- フッターサイトマップ -->
              <div class="col-lg-4 footer_right_content sp_mt_40">
                <p>サイトマップ</p>
                <ul class="outside_list">
                  <li>
                    <a href="https://union-co.jp/">top</a>
                  </li>
                  <li>
                    <a href="https://union-co.jp/philosophy.html">代表メッセージ</a>
                  </li>
                  <li>事業内容
                    <ul class="inside_list">
                      <li><!-- 通信事業 -->
                        <a href="https://union-co.jp/service_internet.html">通信事業</a>
                        <ul style="text-indent: 1em;">
                          <li>
                            <a href="https://union-co.jp/service_union_isp.html">UNION ISP</a> - 
                            <a href="https://union-co.jp/application_form_unisp.html">申し込み</a>
                          </li>
                          <li>
                            <a href="https://union-co.jp/service_union_wifi.html">UNION WI-FI</a> - 
                            <a href="https://union-co.jp/application_form_uni-wi-fi.html">申し込み</a>
                          </li>
                          <li>
                            <a href="https://union-co.jp/service_analog.html">アナログ戻し</a> - 
                            <a href="https://union-co.jp/application_form_analog.html">申し込み</a>
                          </li>
                          <li>
                            <a href="https://union-co.jp/hikari_collaboration.html">光コラボレーション比較</a>
                          </li>
                        </ul>
                      </li>
                      <li><!-- WEBデザイン -->
                        <a href="https://union-co.jp/service_webdesign.html">WEBデザイン</a>
                      </li>
                      <li><!-- その他事業 -->
                        <a href="https://union-co.jp/service_other.html">その他事業</a>
                        <ul style="text-indent: 1em;">
                          <li><a href="https://union-co.jp/service_other.html#iphone_repear">iphone修理</a></li>
                          <li><a href="https://union-co.jp/service_other.html#curedit">クレカ保証</a> - <a href="https://union-co.jp/application_form_credit.html">申し込み</a></li>
                          <li><a href="https://union-co.jp/service_other.html#mutual">共済</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="https://union-co.jp/company.html">企業内容・アクセス</a></li>
                  <li><a href="https://union-co.jp/contact.html">お問い合わせ</a></li>
                </ul>
              </div>

            </div>
          </div>

          <!-- コピーライト -->
          <div class="footer_copy_light container">
            <p class="text-center small">Copyright © 2021 UNION Inc. All Rights Reserved.</p>
          </div>
        </footer>

      </div>
    </div>



  </div>

  <!-- セッション終了 -->
  <?php
    unset(
      $_POST['namae_s'],
      $_POST['namae_sk'],
      $_POST['tel_s'],
      $_POST['origin_postcode'],
      $_POST['origin_address'],
      $_POST['origin_address_2'],
      $_POST['destination_postcode'],
      $_POST['destination_address'],
      $_POST['destination_address2'],
      $_POST['move_day'],
      $_POST['move'],
      $_POST['line'],
      $_POST['provider'],
      $_POST['carrer[0]'],
      $_POST['carrer[1]'],
      $_POST['carrer[2]'],
      $_POST['carrer[3]'],
      $_POST['email'],
      $_POST['hope_time'],
      $_POST['free'],
    );
  ?>


  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
  <script src="https://union-co.jp/js/index.js"></script>

</body>
</html>