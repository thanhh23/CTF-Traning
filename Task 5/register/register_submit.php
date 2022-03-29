<?php
  include '../config.php';
  if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password != $repassword) {
      header("location: register.html");
    }

    $sql = "SELECT * FROM user WHERE username='$username'";
    $old = mysqli_query($conn, $sql);
    $password = md5($password);
    
    if(mysqli_num_rows($old) > 0) {
      header("location: register.html");
    } else {
      $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
      mysqli_query($conn, $sql);
      echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>";
      header("location: ../login/login.html");
    }
  } else {
    header("location:register.html");
  }
