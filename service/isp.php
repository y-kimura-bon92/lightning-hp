<?php

const TITLE = 'UNION プロバイダ';
const CSS = '
<link rel="stylesheet" href="../union/public/css/common.css">
<link rel="stylesheet" href="../union/public/css/setting.css">
<link rel="stylesheet" href="../union/public/css/service_union_isp.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">UN-ISP<br><span class="">UNION プロバイダ</span></h1>
  </div>
EOF;
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/header.php'); ?>

</header>
<!-- 通信事業コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">

  <!-- プロバイダイメージ画像 -->
  <div class="">
    <p><img class="w-100" src="img/orign_union_isp.jpg" alt=""></p>
  </div>

  <!-- 会員ページへのリンク -->
  <div class="members_banner mt_80 sp_mt_40">
    <h2 class="members_banner_btn text-center">
      <a href="https://mypage.unisp.jp/usertool/" class="d-inline-block boxInner" target="blank">
        <img src="<?php echo IMAGEURL; ?>/logo_shadow.png" alt="" class="w-50 sp_mb_10">
        <br><span class="bannar_text">UNIONプロバイダ会員様ページ</span>
      </a>
    </h2>
  </div>



  <!-- 料金 -->
  <div class="mt_80">
    <h2 class="first_letter_design">UNIONプロバイダ料金 ―</h2>
  </div>

  <div class="plice mt_20">
    <p class="small text-danger">※表記の金額は全て税抜です。</p>
    <!-- 料金表テーブル -->
    <table class="table table-bordered mt_10">
      <thead class="text-center">
        <tr class="row">
          <th class="col-6">戸建て</th>
          <th class="col-6">マンション</th>
        </tr>
        <tr>
          <th colspan="2" style="font-size: 200%;">どちらも￥950</th>
        </tr>
      </thead>
    </table>
    <!-- 注意書き -->
    <ul class="small">
      <li>特にお申し出が無い場合、3年単位で自動更新となります。</li>
      <li>途中解約などの場合、契約解除料（25,000円）がかかります（更新期間＜3年契約満了月の当月、翌月、翌々月の3カ月間＞を除く）。</li>
    </ul>
    <!-- pdf リンクボタン -->
    <div class="img_content_btn text-center box mt_40 sp_mt_20">
      <a href="<?php echo PDFURL; ?>/isp_commission.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
    </div>
  </div>



  <!-- 手数料 -->
  <div class="commission mt_80 sp_mt_40">
    <!-- 手数料テーブル -->
    <table class="table table-bordered mt_10">
      <tbody class="text-center">
        <tr class="row">
          <td class="col-8">事務手数料</td>
          <td class="col-4">無料！！</td>
        </tr>
        <tr class="row">
          <td class="col-8">月額利用料最大一ヶ月
            </td>
          <td class="col-4">無料！！</td>
        </tr>
        <tr class="row">
          <td class="col-8">初期設定<br class="sp_br">・遠隔サポート
            </td>
          <td class="col-4">無料！！</td>
        </tr>
      </tbody>
    </table>
    <!-- pdf リンクボタン -->
    <div class="img_content_btn text-center box mt_40 sp_mt_20">
      <a href="<?php echo PDFURL; ?>/isp_commission.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
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
          <a href="<?php echo SITEURL; ?>/service/form/isp.php" class="d-inline-block boxInner">申し込みフォームへ</a>
        </p>
      </div>

    </div>
  </div>



  <!-- 会員ページへのリンク -->
  <div class="members_banner mt_80 sp_mt_40">
    <h2 class="members_banner_btn text-center">
      <a href="https://mypage.unisp.jp/usertool/" class="d-inline-block boxInner" target="blank"><img src="<?php echo IMAGEURL; ?>/logo_shadow.png" alt="" class="w-50"><br><span class="bannar_text">UNIONプロバイダ会員様ページ</span></a>
    </h2>
  </div>
  
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/footer.php'); ?>