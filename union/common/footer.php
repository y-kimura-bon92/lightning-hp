        <footer>
          <div class="footer_content container pt_40 pb_40">
            <!-- フッターロゴ -->
            <h2 class="pb_40"><a href="<?php echo SITEURL; ?>"><img class="footer_logo" src="<?php echo IMAGEURL; ?>/logoBKWH.png" alt=""></a></h2>

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
                <p class="footer_content_btn text-center"><a href="<?php echo SITEURL; ?>/contact.php" class="d-inline-block">メールフォーム</a></p>
              </div>

              <!-- フッターサイトマップ -->
              <div class="col-lg-4 footer_right_content sp_mt_40">
                <p>サイトマップ</p>
                <ul class="outside_list">
                  <li><a href="<?php echo SITEURL; ?>">top</a></li>
                  <li><a href="<?php echo SITEURL; ?>/philosophy.php">代表メッセージ</a></li>
                  <li>事業内容
                    <ul class="inside_list">
                      <li><!-- 通信事業 -->
                        <a href="<?php echo SITEURL; ?>/internet.php">通信事業</a>
                        <ul style="text-indent: 1em;">
                          <li><a href="<?php echo SITEURL; ?>/service/isp.php">UNION ISP</a> - <a href="<?php echo SITEURL; ?>/service/form/isp.php">申し込み</a></li>
                          <li><a href="<?php echo SITEURL; ?>/service/wifi.php">UNION WI-FI</a> - <a href="<?php echo SITEURL; ?>/service/form/wifi.php">申し込み</a></li>
                          <li><a href="<?php echo SITEURL; ?>/service/analog.php">アナログ戻し</a> - <a href="<?php echo SITEURL; ?>/service/form/analog.php">申し込み</a></li>
                          <li><a href="https://kachibon.work/lightning/hikari_collaboration.html">光コラボレーション比較</a></li>
                          <!-- <li><a href="application_form_docomohikari.html">ドコモ光お申し込み</a></li> -->
                        </ul>
                      </li>
                      <li><!-- WEBデザイン -->
                        <a href="<?php echo SITEURL; ?>/webdesign.php">WEBデザイン</a>
                      </li>
                      <li><!-- その他事業 -->
                        <a href="<?php echo SITEURL; ?>/other.php">その他事業</a>
                        <ul style="text-indent: 1em;">
                          <li><a href="<?php echo SITEURL; ?>/other.php#iphone_repear">iphone修理</a></li>
                          <li><a href="<?php echo SITEURL; ?>/other.php#curedit">クレカ保証</a> - <a href="<?php echo SITEURL; ?>/service/form/credit.php">申し込み</a></li>
                          <li><a href="<?php echo SITEURL; ?>/other.php#mutual">共済</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="<?php echo SITEURL; ?>/company.php">企業内容・アクセス</a></li>
                  <li><a href="<?php echo SITEURL; ?>/contact.php">お問い合わせ</a></li>
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

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
  <script src="<?php echo SITEURL; ?>/union/public/js/index.js"></script>

  
  <!-- lozad.jsの読み込み -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
  <script>
    $(function($){
      $("img.lazy").lazyload();
    });
  </script>

</body>
</html>