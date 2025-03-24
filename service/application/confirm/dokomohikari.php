<?php
session_start();

const TITLE = 'ドコモ光お申し込み（確認画面）';
const CSS = '
<link rel="stylesheet" href="../../../union/public/css/common.css">
<link rel="stylesheet" href="../../../union/public/css/setting.css">
<link rel="stylesheet" href="../../../union/public/css/application_form_unisp.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">APPLICATION<br><span class="">ドコモ光（転用）お申し込み<br>（確認画面）</span></h1>
  </div>
EOF;

// セッションにデータをセット
if (isset (
  $_POST['APP_DETALIS'],
  $_POST['TRANSFER_NUMBER'],
  $_POST['NAME'],
  $_POST['NAME_KANA'],
  $_POST['TEL'],
  $_POST['BIRTH_YEAR'],
  $_POST['BIRTH_MONTH'],
  $_POST['BIRTH_DAY'],
  $_POST['GENDER'],
  $_POST['zip11'],
  $_POST['addr11'],
  $_POST['bild11'],
  $_POST['PLAN'],
  $_POST['OPTION'],
  $_POST['ISP'],
  $_POST['CONSTRUCTION_COST'],
  $_POST['CONFIRM_CALL'],
  $_POST['CONST_DATE'],
  $_POST['REMARKS']
)) {
  $_SESSION['APP_DETALIS']       = $_POST['APP_DETALIS'];
  $_SESSION['TRANSFER_NUMBER']   = $_POST['TRANSFER_NUMBER'];
  $_SESSION['NAME']              = $_POST['NAME'];
  $_SESSION['NAME_KANA']         = $_POST['NAME_KANA'];
  $_SESSION['TEL']               = $_POST['TEL'];
  $_SESSION['BIRTH_YEAR']        = $_POST['BIRTH_YEAR'];
  $_SESSION['BIRTH_MONTH']       = $_POST['BIRTH_MONTH'];
  $_SESSION['BIRTH_DAY']         = $_POST['BIRTH_DAY'];
  $_SESSION['GENDER']            = $_POST['GENDER'];
  $_SESSION['zip11']             = $_POST['zip11'];
  $_SESSION['addr11']            = $_POST['addr11'];
  $_SESSION['bild11']            = $_POST['bild11'];
  $_SESSION['PLAN']              = $_POST['PLAN'];
  $_SESSION['OPTION']            = $_POST['OPTION'];
  $_SESSION['ISP']               = $_POST['ISP'];
  $_SESSION['CONSTRUCTION_COST'] = $_POST['CONSTRUCTION_COST'];
  $_SESSION['CONFIRM_CALL']      = $_POST['CONFIRM_CALL'];
  $_SESSION['CONST_DATE']        = $_POST['CONST_DATE'];
  $_SESSION['REMARKS']           = $_POST['REMARKS'];
}

  // 変数にPOSTデータを代入
  $APP_DETALIS       = $_POST['APP_DETALIS'];       //申し込み内容（新規／転用）
  $TRANSFER_NUMBER   = $_POST['TRANSFER_NUMBER'];   //転用番号
  $NAME              = $_POST['NAME'];              //名前
  $NAME_KANA         = $_POST['NAME_KANA'];         //名前（カナ）
  $TEL               = $_POST['TEL'];               //電話番号
  $BIRTH_YEAR        = $_POST['BIRTH_YEAR'];        //生年月日（年）
  $BIRTH_MONTH       = $_POST['BIRTH_MONTH'];       //生年月日（月）
  $BIRTH_DAY         = $_POST['BIRTH_DAY'];         //生年月日（日）
  $GENDER            = $_POST['GENDER'];            //性別
  $zip11             = $_POST['zip11'];             //郵便番号
  $addr11            = $_POST['addr11'];            //住所
  $bild11            = $_POST['bild11'];            //マンション・建物名
  $PLAN              = $_POST['PLAN'];              //プラン名
  $OPTION            = $_POST['OPTION'];            //オプション
  $ISP               = $_POST['ISP'];               //既存ISP
  $CONSTRUCTION_COST = $_POST['CONSTRUCTION_COST']; //工事費
  $CONFIRM_CALL      = $_POST['CONFIRM_CALL'];      //確認電話
  $CONST_DATE        = $_POST['CONST_DATE'];        //工事希望日
  $REMARKS           = $_POST['REMARKS'];           //備考

?>


<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/header.php'); ?>

</header>
<!-- お申し込みコンテンツ -->
<div class="container mt_120 mb_120 sp_mt_80">
  <div class="mb_80">
    <h2 class="first_letter_design">ドコモ光お申し込み<br>（確認画面） ―</h2>
  </div>

  <!-- 確認画面送信フォーム -->
  <div class="confirmation mt_40">
    <form action="<?php echo SITEURL; ?>/service/application/complete/docomohikari.php" method="post">
      <table class="table">
        <tr class="row">
          <th class="col-4">申し込み内容（新規／転用）</th>
          <td class="col-8">
            <?php echo $_POST["APP_DETALIS"]; ?>
          </td>
        </tr>
        <tr class="row">
          <th class="col-4">転用番号</th>
          <td class="col-8"><?php echo $_POST["TRANSFER_NUMBER"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">お名前</th>
          <td class="col-8"><?php echo $_POST["NAME"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">お名前（カナ）</th>
          <td class="col-8"><?php echo $_POST["NAME_KANA"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">電話番号</th>
          <td class="col-8"><?php echo $_POST["TEL"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">生年月日</th>
          <td class="col-8"><?php echo $_POST["BIRTH_YEAR"]; ?>年<?php echo $_POST["BIRTH_MONTH"]; ?>月<?php echo $_POST["BIRTH_DAY"]; ?>日</td>
        </tr>
        <tr class="row">
          <th class="col-4">性別</th>
          <td class="col-8"><?php echo $_POST["GENDER"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">郵便番号</th>
          <td class="col-8"><?php echo $_POST["zip11"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">住所</th>
          <td class="col-8"><?php echo $_POST["addr11"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">マンション・建物名</th>
          <td class="col-8"><?php echo $_POST["bild11"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">プラン名</th>
          <td class="col-8"><?php echo $_POST["PLAN"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">オプション</th>
          <td class="col-8"><?php echo $_POST["OPTION"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">既存ISP</th>
          <td class="col-8"><?php echo $_POST["ISP"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">工事費</th>
          <td class="col-8"><?php echo $_POST["CONSTRUCTION_COST"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">確認電話</th>
          <td class="col-8"><?php echo $_POST["CONFIRM_CALL"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">工事希望日</th>
          <td class="col-8"><?php echo $_POST["CONST_DATE"]; ?></td>
        </tr>
        <tr class="row">
          <th class="col-4">備考</th>
          <td class="col-8"><?php echo $_POST["REMARKS"]; ?></td>
        </tr>
      </table>

      <div class="btn_area mt_40">
        <!-- 戻るボタン -->
        <a type="button" href="#" onClick="history.back(); return false;" class="btn btn-outline-danger" style="border-width: 1px;">戻る</a>
        <!-- 送信ボタン -->
        <input style="border-width: 1px;" type="submit" value="申込みを確定する" class="btn btn-blank btn-default bounceInRight">
      </div>
    </form>
  </div>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/union/common/footer.php'); ?>