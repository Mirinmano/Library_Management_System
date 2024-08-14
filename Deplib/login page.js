function validate(){
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username.length < 10 && username != "admin" ) {
  alert("inavalid username");
  return false;
  } else if(password.length < 10 && password != "123"){
  alert("inavali password");
  return false;
  }
  else{
  alert("login sucessfull")
    return true;
  }
}