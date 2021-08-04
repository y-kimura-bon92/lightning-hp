<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>


  <!-- ヘッダーメインビジュアル -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3 font-weight-bold">挑戦する勇気を持ち、<br>変化を楽しむ</h1>
      <h3 class="text-center _main_logo_animation"><span>UNION</span></h3>
    </div>
  </div>
</header>



<!-- デザインコンテンツ -->
<div class="container mt_80">

  <!-- 企業理念 -->
  <div class="Philosophy">
    <h1 class="main_title"><span class="text-danger">P</span>hilosophy<span class="main_title_b">理念</span></h1>
    <p>株式会社UNIONは、通信事業をはじめ、WEBデザイン事業、iphone修理など幅広く、個人法人問わず、多くのお客様のニーズに合わせたご提案を行っております。<br>今は日本国で日本人向けの商材販売を行っていますが、今後、我々は世界に向け、今までに存在しないグループ会社を作り上げていく所存です。</p>
  </div>

  <!-- 事業紹介 -->
  <div class="service mt_80 sp_mt_40">
    <h1 class="main_title"><span class="text-danger">S</span>ervice<span class="main_title_b">事業紹介</span></h1>
    <!-- 通信事業 -->
    <div class="img_content row">
      <!-- 左側コンテンツ 画像 -->
      <div class="left_content_img box">
        <img src="<?php echo IMAGEURL; ?>/top_internet_service.jpg" alt="" class="boxInner col-11 col-lg-8">
      </div>
      <!-- 右側コンテンツ テキストエリア -->
      <div class="right_content_text col-11 col-lg-6 _design_img_animation">
        <h4 class="mb_20 sp_mb_10 font-weight-bold">-01 通信事業</h4>
        <p class="small">自社プロバイダーサービス、UNIONプロバイダの取り扱いを2020年4月1日よりスタート致しました！
          <br>安心の納得価格、満足の通信速度、充実の豊富なオプションサービス、万全のサポート体制を整えております。
          <br>お気軽にお問い合わせ・ご相談くださいませ。</p>
      </div>
      <!-- 空スペーサー 100px -->
      <div style="height: 100px;"></div>
      <!-- 通信事業ボタン -->
      <div class="img_content_btn text-center sp_mt_120 box">
        <a href="<?php echo SITEURL; ?>/internet.php" class="d-inline-block boxInner">詳細はこちら</a>
      </div>
    </div>

    <!-- web デザイン -->
    <div class="img_content mt_120 sp_mt_80 row">
      <!-- 右側コンテンツ 画像 -->
      <div class="right_content_img box">
        <img src="<?php echo IMAGEURL; ?>/top_web_design.jpg" alt="" class="boxInner col-11 col-lg-8">
      </div>
      <!-- 左側コンテンツ テキストエリア -->
      <div class="left_content_text col-11 col-lg-6 _design_img_animation">
        <h4 class="mb_20 sp_mb_10 font-weight-bold">-02 webデザイン</h4>
        <p class="small">株式会社UNIONはホームページ制作会社としても活動しております。
          <br>ただホームページを作るのが目的ではなく、ホームページが産み出す成果を目的としております。
          <br>お客様のニーズにマッチした、WEBサイトの力を飛躍的に高める戦略を構築致します。</p>
      </div>
      <!-- 空スペーサー 100px -->
      <div style="height: 100px;"></div>
      <!-- webデザインボタン -->
      <div class="img_content_btn text-center sp_mt_120 box">
        <a href="<?php echo SITEURL; ?>/webdesign.php" class="d-inline-block boxInner">詳細はこちら</a>
      </div>
    </div>
  </div>



  <!-- その他事業 -->
  <div class="other_business mt_120 sp_mt_80">
    <h4 class="mb_20 sp_mb_10 font-weight-bold">-03 その他事業</h4>
    <div class="other_business_content _3column_effect">
      <div class="row">

        <!-- iphone修理 -->
        <div class="col-lg-4">
          <a href="<?php echo SITEURL; ?>/other.php#iphone_repear" class="text-dark">
            <div class="other_card_item">
              <!-- iphone修理画像 -->
              <p class="mb_0"><img src="<?php echo IMAGEURL; ?>/iphone_repair.jpg" alt="アイフォン修理" class="w-100"></p>
              <!-- iphone修理テキストエリア -->
              <div class="bg-white pt-3 other_text_area">
                <h6 class="text-danger">iphone修理</h6>
                <p class="small">iPhoneの故障でお困りなら、UNIONにお任せ下さい！
                  <br>UNIONでは、iPhoneの画面割れ、バッテリー交換、起動しない、水没等、故障全般の修理を承っております。</p>
              </div>
            </div>
          </a>
        </div>

        <!-- その他 クレカ保証 -->
        <div class="col-lg-4 sp_mt_10">
          <a href="<?php echo SITEURL; ?>/other.php#curedit" class="text-dark">
            <div class="other_card_item">
              <!-- クレカ保証画像 -->
              <p class="mb_0"><img src="<?php echo IMAGEURL; ?>/not_yet_open.jpg" alt="" class="w-100"></p>
              <!-- クレカ保証テキストエリア -->
              <div class="bg-white pt-3 other_text_area">
                <h6 class="text-danger">クレカ保証</h6>
                <p class="small">準備中</p>
              </div>
            </div>
          </a>
        </div>

        <!-- その他 共済 -->
        <div class="col-lg-4 sp_mt_10">
          <a href="<?php echo SITEURL; ?>/other.php#mutual" class="text-dark">
            <div class="other_card_item">
              <!-- 共済画像 -->
              <p class="mb_0"><img src="<?php echo IMAGEURL; ?>/not_yet_open.jpg" alt="" class="w-100"></p>
              <!-- 共済テキストエリア -->
              <div class="bg-white pt-3 other_text_area">
                <h6 class="text-danger">共済</h6>
                <p class="small">UNIONの共済事業は正規も非正規も同じ仕事で同じ賃金・労働条件が当たり前の均等待遇、大企業の内部留保の活用で労働者の賃上げと安定した雇用の実現など、人間らしくいきいきと働くことができる職場と地域・社会をつくることをめざしています。</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- フル幅画像コンテンツ -->
<div class="full_img_content mt_120 mb_120">
  <div class="row full_img_2column">
    <div class="col-lg-3"></div>
    <a href="<?php echo SITEURL; ?>/recruit.php" class="text-white col-lg-3 full_img_btn_content">
      <span>
        <h3 class="full_img_btn">Recruit</h3>
        <hr>
        <p class="full_img_btn_b mb_0">採用情報</p>
      </span>
    </a>
    <a href="<?php echo SITEURL; ?>/company.php" class="text-white col-lg-3 sp_mt_20 full_img_btn_content">
      <h3 class="full_img_btn">Company</h3>
      <hr>
      <p class="full_img_btn_b mb_0">会社概要</p>
    </a>
  </div>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>