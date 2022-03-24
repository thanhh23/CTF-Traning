var check1 = false;      
var check2 = false;
function checkName() {
  var username = document.getElementById('username').value;
  var errorName = document.getElementById('errorName');


  var regexName = /^[0-9a-zA-Z]{5,15}$/; // điều kiện của username là từ 5 - 15 ký tự

  if (username == '' || username == null) {
    errorName.innerHTML = "(Tên người dùng không được để trống)";
    check1 = false;

  } else if (!regexName.test(username)) {
    errorName.innerHTML = "(Tên người dùng từ 5 - 15 ký tự)";
    check1 = false;

  } else {
    errorName.innerHTML = "";
    check1 = true;
    return;
  }
}

function checkPass() {
  var password = document.getElementById('password').value;
  var errorPassword = document.getElementById('errorPassword');

  var regexPass = /^[A-Z](?=.*\d)(?=.*[a-z])[0-9a-zA-Z]{8,}$/; // Điều kiện của password: viết hoa chữ cái đầu, 8-20 ký tự, A-Z, a-z , 0-9
  if (password == '' || password == null) {
    errorPassword.innerHTML = "(Mật khẩu không được để trống)";
    check2 = false;
  } else if (!regexPass.test(password)) {
    errorPassword.innerHTML = "(Mật khẩu chứa 8 - 20 ký tự, viết hoa chữ đầu, A-Z, a-z, 0-9)";
    check2 = false;
  } else {
    errorPassword.innerHTML = "";
    check2 = true;
    return;
  }
}

function validate() {
  if(check1 == false || check2 == false) {
    alert("Vui lòng nhập lại!");
    // console.log(check1)
    // console.log(check2)
  } else {
    alert("Dữ liệu được gửi đi thành công");
    document.getElementById('form').reset();
    // console.log(check1)
    // console.log(check2)
  }
}