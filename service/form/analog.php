<?php

const TITLE = 'アナログ戻しお申し込み';
const CSS = '
<link rel="stylesheet" href="../../union/public/css/common.css">
<link rel="stylesheet" href="../../union/public/css/setting.css">
<link rel="stylesheet" href="../../union/public/css/application_form_unisp.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">APPLICATION<br><span class="">アナログ戻しお申し込み</span></h1>
  </div>
EOF;
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/header.php'); ?>

</header>
<!-- お申し込みコンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">お申し込み ―</h2>
  </div>

  <!-- 注意書き -->
  <div class="notes_contact mt_40">
    <span class="notes_contact_title">CHECK！！</span>
    <p class="text-danger">フォームを入力する前に必ずお読み下さい。</p>
    <div class="row mt_40">
      <div class="col-lg-6">
        <h4 class="text-center">会員規約</h4>
        <!-- pdf リンクボタン -->
        <p class="img_content_btn text-center box mt_20">
          <a href="<?php echo PDFURL; ?>/unionkiyaku.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
        </p>
      </div>
      <div class="col-lg-6 sp_mt_40">
        <h4 class="text-center">特定商取引法に基づく規約</h4>
        <!-- pdf リンクボタン -->
        <p class="img_content_btn text-center box mt_20">
          <a href="<?php echo PDFURL; ?>/tokusyouhou.pdf" class="d-inline-block boxInner" target="blank"><i class="far fa-file-pdf"></i> PDF</a>
        </p>
      </div>

    </div>
  </div>



  <!-- 申し込みフォーム -->
  <div class="row mt_80">
    <h4 class="subpage_sub_h4">申し込みフォーム</h4>
    <div class="contact-form mt_20">
      <form role="form" method="post" action="<?php echo SITEURL; ?>/service/application/confirm/analog.php">
        <!-- 名前 -->
        <div class="form-group">
          <label for="" class="mt_0">お名前</label>
          <input type="text" class="form-control input-lg" name="NAME" placeholder="Name">
        </div>

        <!-- 名前（カナ） -->
        <div class="form-group">
          <label for="">お名前（カナ）</label>
          <input type="text" class="form-control input-lg" name="NAME_KANA" placeholder="Kana" required>
        </div>

        <!-- メールアドレス -->
        <div class="form-group">
          <label for="">メールアドレス</label>
          <input type="email" class="form-control input-lg" name="EMAIL" placeholder="Email" required>
        </div>

        <!-- 電話番号 -->
        <div class="form-group">
          <label for="">電話番号</label>
          <input type="text" class="form-control input-lg" name="TEL" placeholder="Tel Number" required>
        </div>

        <!-- 生年月日 -->
        <div class="form-group">
          <label for="">生年月日</label>
          <!-- 年 -->
          <div class="row">
            <div class="col-6">
              <select type="selected" class="form-control" name="BIRTH_YEAR" value="" placeholder="Select One">
                <option value="" selected>年▼</option>
                <option value="1918">1918</option>
                <option value="1919">1919</option>
                <option value="1920">1920</option>
                <option value="1921">1921</option>
                <option value="1922">1922</option>
                <option value="1923">1923</option>
                <option value="1924">1924</option>
                <option value="1925">1925</option>
                <option value="1926">1926</option>
                <option value="1927">1927</option>
                <option value="1928">1928</option>
                <option value="1929">1929</option>
                <option value="1930">1930</option>
                <option value="1931">1931</option>
                <option value="1932">1932</option>
                <option value="1933">1933</option>
                <option value="1934">1934</option>
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
              </select>
            </div>
            <div class="col-6">
              <!-- 月  -->
              <select type="selected" class="form-control" name="BIRTH_MONTH" value="" placeholder="Select One">
                <option value="" selected>月▼</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
          </div>
        </div>

        <!-- 住所 -->
        <div class="form-group">
          <label for="">郵便番号</label>
          <!-- ▼郵便番号入力フィールド(7桁) -->
          <input type="text" class="form-control" name="zip11" value="" placeholder="541-0056" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');">
    
          <label for="">住所</label>
          <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
          <input type="text" class="form-control" name="addr11" value="" placeholder="大阪府大阪市中央区久太郎町3-1-27" >
    
          <label for="">マンション・建物名</label>
          <input type="text" class="form-control" name="bild11" value="" placeholder="船場大西ビル">
        </div>

        <div class="form-group">
          <label for="">支払方法</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="PEYMENT" value="クレジットカード" id="peyment_credit" placeholder="クレジットカード">
            <label class="form-check-label mt_0" for="peyment_credit">クレジットカード</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="PEYMENT" value="口座引落" id="peyment_bank" placeholder="口座引落">
            <label class="form-check-label mt_0 mb_0" for="peyment_bank">口座引落</label>
          </div>
        </div>

        <div class="peyment_credit sbh1">
          <div class="form-group">
            <label for="">カード会社</label>
            <select type="select" class="form-control" name="CARDCOMPANY" value="" >
              <option value="" selected>選択してください▼</option>
              <option value="VISA">VISA</option>
              <option value="MASTER">MASTER</option>
              <option value="JCB">JCB</option>
              <option value="American Express">American Express</option>
              <option value="Diners Club">Diners Club</option>
              <option value="楽天KC">楽天KC</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">カード番号</label>
            <div class="row">
              <div class="col-3">
                <input type="text" class="form-control" name="CARDNUM1" value="" placeholder="4444">
              </div>
              <div class="col-3">
                <input type="text" class="form-control" name="CARDNUM2" value="" placeholder="3333">
              </div>
              <div class="col-3">
                <input type="text" class="form-control" name="CARDNUM3" value="" placeholder="2222">
              </div>
              <div class="col-3">
                <input type="text" class="form-control" name="CARDNUM4" value="" placeholder="1111">
              </div>
            </div>
          </div>
          

          <div class="form-group">
            <label for="">カード有効期限</label>
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control" name="EXPIRATION1" value="" placeholder="05（月）">
              </div>
              <div class="col-6">
                <input type="text" class="form-control" name="EXPIRATION2" value="" placeholder="20（年）">  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="">カード名義人</label>           
            <input type="text" class="form-control" name="CARDNAME" value="" placeholder="TARO YAMADA">
          </div>

          <div class="form-group">
            <label class="label">セキュリティコード</label>           
            <input type="text" class="form-control" name="CARDSEC" value="" placeholder="123">
          </div>
        </div>

        <!-- 確認ボタン -->
        <button type="submit" class="btn btn-blank btn-default bounceInRight w-100 mt_80">確認画面へ</button>
      </form>
    </div>
  </div>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/lightning/union/common/footer.php'); ?>