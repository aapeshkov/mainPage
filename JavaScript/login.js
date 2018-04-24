

var proverka = function() {
  var name = '1';
  var pass = '1';
  var password = document.getElementById("L").value;
  var login = document.getElementById("P").value;
if (login == name && password == pass) {
alert('Логин и пароль верны!');
}  else {
alert ( 'Error');

}

}
