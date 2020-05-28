var $ = function (id){
    return document.getElementById(id);
}

var login = function(){
  //alert("g");
  var emailAddress = $("email").value;
  var password = $("pw").value;
  var emailValidate1 = emailAddress.indexOf("@");
  var emailValidate2 = emailAddress.indexOf(".", emailValidate1);

  if(emailValidate1 < 0){
    alert("A valid email address must include an @ sign.");
    return 0;
  }
  if(emailValidate2 < 0){
    alert("A valid email address must include a period after the @ sign");
    return 0;
  }
  if(password != 1111){
    alert("Password wrong!");
    return 0;
  }

  alert("Login Success!");
  location.href = "main.html";
}

window.onload = function(){
  $("login").onclick = login;
}
