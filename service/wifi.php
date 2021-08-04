<?php

const TITLE = 'UNION ワイファイ';
const CSS = '
<link rel="stylesheet" href="../union/public/css/common.css">
<link rel="stylesheet" href="../union/public/css/setting.css">
<link rel="stylesheet" href="../union/public/css/service_union_wifi.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">UNI-wi-fi<br><span class="">UNION ワイファイ</span></h1>
  </div>
EOF;
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>

</header>
<!-- 通信事業コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">

<!-- 会員ページへのリンク -->
<div class="members_banner mt_80 sp_mt_40">
  <h2 class="members_banner_btn text-center">
    <a href="#!" class="d-inline-block boxInner">
      <img src="<?php echo IMAGEURL; ?>/logoBK.png" alt="" class="w-50 sp_mb_10">
      <br><span class="bannar_text">UNION WI-FI会員様ページ</span>
    </a>
  </h2>
</div>



<!-- 料金 -->
<div class="mt_80">
  <h2 class="first_letter_design">UNION WI-FI ―</h2>
</div>

<div class="mt_40 sp_mt_20">
  <h4 class="subpage_sub_h4">5本の高感度アンテナで家の隅々までWi-Fiでカバー</h4>
  <p class="mt_20">UNION wi-fiは4本の外部アンテナと1つの内蔵アンテナ､
    さらにそれらを支えるパワフルなチップセットでWi-Fiの電波を家中隅々まで送り届けます｡
    <br>高速なWi-Fiをリビングのソファーでも､バルコニーでも､場所を選ばずにお楽しみください｡
    <br>中でも2.4GHzのカバレージは印象的とも言える広さ｡<br>その広さは競合のルーターを凌駕するでしょう。</p>
  <p class="mt_40 uni_fi_speed_img"><img src="<?php echo IMAGEURL; ?>/uni_fi_speed.png" class="w-100" alt=""></p>
</div>



<!-- お申し込み -->
<div class="mt_80">
  <div class="">
    <h2 class="first_letter_design">お申し込み ―</h2>
  </div>

  <div class="row mt_40 sp_mt_20 application_area">
    <div class="col-lg-6 sp_mb_20">
      <h4 class="text-center">電話でお申し込み</h4>
      <h4 class="mt_40 sp_mt_20 text-center">050-3152-9680</h4>
      <p class="mt_40 sp_mt_20 text-center">受付時間10:00〜20:00（携帯でもOK）</p>
    </div>
    <hr class="sp_br">
    <div class="col-lg-6 sp_mt_20">
      <h4 class="text-center">webでお申し込み</h4>
      <p class="mt_20">Webで手続きを行う場合下のリンクからお申し込みフォームにて入力、完了を行って下さい。</p>
      <p class="img_content_btn text-center box mt_30 sp_mt_20">
        <a href="<?php echo SITEURL; ?>/service/form/wifi.php" class="d-inline-block boxInner">申し込みフォームへ</a>
      </p>
    </div>

  </div>
</div>


<!-- オプションサービス -->
<div class="mt_80">
  <div class="">
    <h2 class="first_letter_design">オプションサービス ―</h2>
  </div>

  <div class="option row mt_40 sp_mt_20">
    <!-- 機器保証サービス -->
    <div class="col-lg-4 option_warranty">
      <h4 class="subpage_sub_h4 sp_mt_20">機器保証サービス</h4>
      <!-- pdf リンクボタン -->
      <p class="img_content_btn text-center box mt_40 sp_mt_20">
        <a href="<?php echo PDFURL; ?>/option_2.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
      </p>
    </div>

    <!-- 電話サポート -->
    <div class="col-lg-4 option_tel">
      <h4 class="subpage_sub_h4 sp_mt_20">電話サポート</h4>
      <!-- pdf リンクボタン -->
      <p class="img_content_btn text-center box mt_40 sp_mt_20">
        <a href="<?php echo PDFURL; ?>/option_3.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
      </p>
    </div>

    <!-- データ復旧サービス -->
    <div class="col-lg-4 option_data">
      <h4 class="subpage_sub_h4 sp_mt_20">データ復旧</h4>
      <!-- pdf リンクボタン -->
      <p class="img_content_btn text-center box mt_40 sp_mt_20">
        <a href="<?php echo PDFURL; ?>/option_1.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
      </p>
    </div>
    <div class="mt_40 option_natice">
      <ul class="small">
        <li>機器保証サービス
          <br>※対応機種（ノートパソコン・モデム・モバイルルーター・固定電話など、他にもお困りなことがあれば何でもご相談ください。）
          <br>※オプション廃止をご希望の方は、union電話受付にて受付します。</li>
        <li class="mt_10">電話サポート
          <br>《主なサポート内容》
          <br>・OS：Windows vista、7、8、10（MacOS、その他OSは一部対応）
          <br>・Microsoft Office（Word、Excel、Power Point、Outlook）の操作方法
          <br>・パソコンやプリンタ、スキャナなどの周辺機器の設定、操作案内
          <br>・ブラウザ、メール、ハガキ作成ソフトなど一般ソフトウェアの設定方法
          <br>・インターネット接続方法や利用方法
          <br>・有線／無線LAN機器、外付けドライブなどの設定方法</li>
      </ul>
    </div>
  </div>
</div>



<!-- 会員ページへのリンク -->
<div class="members_banner mt_80 sp_mt_40">
  <h2 class="members_banner_btn text-center">
    <a href="#!" class="d-inline-block boxInner">
      <img src="<?php echo IMAGEURL; ?>/logoBK.png" alt="" class="w-50 sp_mb_10">
      <br><span class="bannar_text">UNION WI-FI会員様ページ</span>
    </a>
  </h2>
</div>

</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>