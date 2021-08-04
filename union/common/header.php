<?php 

const SITEURL = 'https://kachibon.work/lightning';
const IMAGEURL = 'https://kachibon.work/lightning/union/public/img';
const PDFURL = 'https://kachibon.work/lightning/union/public/pdf';

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="kH5em0acV4kH6CCYLrBiFUE9dnYWA44uITKCA_GBupA" />
    <meta name="google-site-verification=kH5em0acV4kH6CCYLrBiFUE9dnYWA44uITKCA_GBupA">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="株式会社UNION,株式会社ユニオン,UNION,ユニオン,ゆにおん">
    <meta name="description" content="株式会社UNIONは、お客様のニーズに合わせた幅広い商材を取り扱う販売代理店です。お客様一人一人に最適のプラン、商品をご提案させていただきます。">
    <title><?php echo TITLE; ?>｜株式会社UNION｜General Industry Office</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo SITEURL; ?>/union/public/css/setting.css">
    <link rel="stylesheet" href="<?php echo SITEURL; ?>/union/public/css/common.css">
    <?php echo CSS; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
  </head>
  <body>

  <div class="split">
    <!-- --------------------------------------------------------------------------
      スプリットレイアウト fixed
    ------------------------------------------------------------------------------ -->
    <div class="split-item split-left">
      <div class="split-left__inner">

        <?php echo SPLIT_LAYOUT_FIXED; ?>

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
              <h2>
                <a href="<?php echo SITEURL; ?>">
                  <img src="<?php echo IMAGEURL; ?>/logoBK.png" alt="">
                </a>
              </h2>
            </div>

            <!-- ヘッダーメニュー -->
            <div class="header_nav">

              <!-- pc -->
              <ul class="gnav justify-content-end">
                <li><a href="<?php echo SITEURL; ?>/philosophy.php">MESSAGE</a></li>
                <li>
                  <a>SERVICE</a>
                  <ul class="dropdown_menu_pc">
                    <li><a href="<?php echo SITEURL; ?>/internet.php">通信事業</a></li>
                    <li><a href="<?php echo SITEURL; ?>/webdesign.php">Webデザイン</a></li>
                    <li><a href="<?php echo SITEURL; ?>/other.php">その他の事業</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo SITEURL; ?>/recruit.php">RECRUIT</a></li>
                <li><a href="<?php echo SITEURL; ?>/company.php">COMPANY</a></li>
                <li><a href="<?php echo SITEURL; ?>/contact.php">CONTACT</a></li>
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
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>">TOP</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/philosophy.php">MESSAGE</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/internet.php">通信事業</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/webdesign.php">Webデザイン</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/other.php">その他の事業</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/recruit.php">RECRUIT</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/company.php">COMPANY</a>
                    <a class="nav-item nav-link" href="<?php echo SITEURL; ?>/contact.php">CONTACT</a>
                    <a class="nav-item nav-link" href="https://kachibon.work/lightning/hikari_collaboration.html" style="color: #840204;">APPLICATION</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>