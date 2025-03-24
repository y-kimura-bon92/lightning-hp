<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/header.php'); ?>

</header>
  <!-- お問い合わせコンテンツ -->
  <div class="container mt_120 mb_120 sp_mt_80">
    <div class="mb_80">
      <h2 class="first_letter_design">お問い合わせ ―</h2>
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

    <!-- メールフォーム -->
    <div class="row mt_40">
      <div class="contact-form">
        <form role="form" method="post" action="<?php echo SITEURL; ?>/mail/confirm.php">
          <div class="form-group">
            <label for="">お名前</label>
            <input type="text" class="form-control input-lg" name="NAME" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="">お名前（カナ）</label>
            <input type="text" class="form-control input-lg" name="NAME_KANA" placeholder="Kana" required>
          </div>
          <div class="form-group">
            <label for="">メールアドレス</label>
            <input type="email" class="form-control input-lg" name="EMAIL" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="">電話番号</label>
            <input type="text" class="form-control input-lg" name="TEL" placeholder="Tel Number">
          </div>
          <div class="form-group">
            <label for="">FAX番号</label>
            <input type="text" class="form-control input-lg" name="FAX" placeholder="Fax number">
          </div>
          <div class="form-group">
            <label for="">お問い合わせ内容</label>
            <textarea class="form-control input-lg" name="MESSAGE" placeholder="Message"></textarea>
          </div>

          <!-- 確認ボタン -->
          <button type="submit" class="btn btn-blank btn-default bounceInRight w-100 mt_80">確認画面へ</button>
        </form>
      </div>
    </div>
  </div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/footer.php'); ?>