<?php

$file       = $_FILES["file"];      //お名前
$photo_name = $_POST["photo_name"];      //お名前


if($_FILES['file'] != '')
  {
      // ディレクトリがなかったら作成
      if(!file_exists('upload'))
      {
        mkdir('upload', 0777);
        
      }
      if(!file_exists('upload/tmp'))
      {
          mkdir('upload/tmp', 0777);
          
      }
      move_uploaded_file($_FILES['file']['photo_name'], 'upload/tmp/' . $_FILES['file']['name']);
      $posts['file'] = 'upload/tmp/' . $_FILES['file']['name'];
      $posts['FILE_name'] = $_FILES['file']['name'];
      exit;
  }
  move_uploaded_file($_FILES['file']['photo_name'], 'upload/tmp/' . $_FILES['file']['name']);
      $posts['file'] = 'upload/tmp/' . $_FILES['file']['name'];
      $posts['FILE_name'] = $_FILES['file']['name'];
      exit;
  
// var_dump($photo_name);

?>


aaaaaaaaaaaaa