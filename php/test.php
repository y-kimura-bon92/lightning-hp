
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">

    


<form action="photo-common.php" method="post" enctype="multipart/form-data" id="form">
  <input type="hidden" name="_token" value="V4hU54gw4mriRw4S7E2ocaSCHNtpCBKyIlVBi6ds">  ファイル：
  <input type="file" name="photofile" value=""/><br /><br />

  商品名：<br />
  <input type="text" name="photo_name" size="50" value=""/><br /><br />

  <input type="submit" name="confirm" id="button" value="確認" />
</form>


  </div>
</body>
</html>