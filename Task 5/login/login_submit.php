<?php
  include '../config.php';
  if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user) > 0) {
      echo "Đăng nhập thành công";
    } else {
      echo "Bạn đã nhập sai username hoặc password";
    }
  } else {
    header("location: login.html");
  }
?>