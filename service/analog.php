<?php

const TITLE = 'UNION アナログ戻し';
const CSS = '
<link rel="stylesheet" href="../union/public/css/common.css">
<link rel="stylesheet" href="../union/public/css/setting.css">
<link rel="stylesheet" href="../union/public/css/service_analog.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">ANALOG RETURN<br><span class="">アナログ戻し</span></h1>
  </div>
EOF;
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/header.php'); ?>

</header>
<!-- 通信事業コンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">

  <div class="">
    <h2 class="first_letter_design">光電話のアナログ戻しとは ―</h2>
  </div>
  <div class="row mt_20">
    <div class="col-lg-6">
      <p><img src="<?php echo IMAGEURL; ?>/analog_01.jpg" alt="unionプロバイダ" class="w-100"></p>
    </div>
    <div class="col-lg-6 sp_mt_20">
      <p style="line-height: 2rem;">NTT一般電話から光電話に変更した電話回線や電話番号をNTTの一般電話に戻すことをアナログ戻しと言われています。
      <br>利用している光回線の契約を切り換えるときは、固定電話の番号変更が何かとネックになります。
      <br>しかし、アナログ戻しは今使っている番号を残し、使い続けることが出来ます。</p>
    </div>
  </div>



  <!-- 料金 -->
  <div class="mt_80">
    <h2 class="first_letter_design">NTT光と、アナログ電話の違い／料金比較 ―</h2>
  </div>
  <div class="plice mt_20">
    <p class="small text-danger">※表記の金額は全て税抜です。</p>
    <!-- 料金表テーブル -->
    <table class="table table-bordered mt_10">
      <thead class="text-center">
        <tr class="">
          <th>NTT西日本料金</th>
          <th>NTT光</th>
          <th>アナログ回線</th>
        </tr>
        <tr>
          <td>インターネット回線+光電話</td>
          <td>4,800円（基本料）</td>
          <td>／</td>
        </tr>
        <tr>
          <td>プロバイダー料金</td>
          <td>約1,100円</td>
          <td>／</td>
        </tr>
        <tr>
          <td>アナログ電話</td>
          <td>／</td>
          <td>2,600円（基本料）</td>
        </tr>
        <tr>
          <td>電話料金 3分</td>
          <td>8円／全国20～80円</td>
          <td>市内8.5円
            <br>市外20～40円
            <br>県外20～80円</td>
        </tr>
        <tr>
          <th class="large font-weight-bold text-danger">合計</th>
          <th class="font-weight-bold text-danger">5,900円</th>
          <th class="font-weight-bold text-danger">2,600円</th>
        </tr>
      </thead>
    </table>
    <!-- 注意書き -->
    <p>NTT光とアナログの料金の違いの明細をみてみると、アナログ回線のほうが安い事が解ります。</p>            
  </div>



  <!-- アナログ戻しをする手順 -->
  <div class="mt_80">
    <h2 class="first_letter_design">アナログ戻しをする手順 ―</h2>
  </div>
  <!-- 手順フロー -->
  <div class="commission mt_20 sp_mt_20">
    <h3 class="text-center">全て弊社UNIONがサポート致します！</h3>
    <ul class="flow mt_40">
      <li>
        <dl class="stepcard">
          <dt><span class="icon">STEP.01</span>NTTに電話をして依頼</dt>
          <dd>NTTに電話をして、アナログ電話に戻したい旨を伝えます。</dd>
        </dl>
      </li>
      <li>
        <dl class="stepcard">
          <dt><span class="icon">STEP.02</span>工事日を決める</dt>
          <dd>担当者と工事日を決めます。<br>工事日=アナログ回線に変更される日になります。</dd>
        </dl>
      </li>
      <li>
        <dl class="stepcard">
          <dt><span class="icon">STEP.03</span>NTT光からアナログへ</dt>
          <dd>変更後半月ほどして、工事費のハガキが送られてきます。</dd>
        </dl>
      </li>
      <li>
        <dl class="stepcard">
          <dt><span class="icon">STEP.04</span>プロバイダーの解約</dt>
          <dd>NTT光を解約したからといって自動的にプロバイダーは解約されません。<br>ご自身で解約の手続きをする必要があります。</dd>
        </dl>
      </li>
    </ul>
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
          <a href="<?php echo SITEURL; ?>/service/form/analog.php" class="d-inline-block boxInner">申し込みフォームへ</a>
        </p>
      </div>

    </div>
  </div>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/footer.php'); ?>