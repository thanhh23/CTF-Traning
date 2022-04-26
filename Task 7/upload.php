<?php
  // var_dump($_FILES);

  // move_uploaded_file($_FILES['upload_file']['tmp_name'], 'C:\laragon\www\UploadFile\uploads/'.$_FILES['upload_file']['name']);

  $folder_path = 'C:\laragon\www\UploadFile\uploads/';
  $file_path = $folder_path.$_FILES['upload_file']['name'];

  $flag_ok = true;

  if(file_exists($file_path)) {
    echo 'File bi trung ten';
    $flag_ok = false;    
  }

  $ar = array('jpg', 'jpg', 'jpeg', 'gif', 'txt');
  $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

  if(!in_array($file_type, $ar)) {
    echo 'Loai file khong hop le';
    $flag_ok = false;
  }

  if($_FILES['upload_file']['size'] > 1000000) {
    echo 'dung luong file qua lon';
    $flag_ok = false;
  }

  if($flag_ok) {
    move_uploaded_file($_FILES['upload_file']['tmp_name'], $file_path);
    echo 'Upload thanh cong';
  } else {
    echo 'Khong upload duoc file';
  }
?>