window.onload = function () {
  document.getElementById("pwd").type = "password";
};

function show_pwd() {
  var field = document.getElementById("pwd");

  if (field.type == "text") {
    field.type = "password";
    field.style.border = "2px solid gray";
  } else {
    field.type = "text";
    field.style.border = "2px dotted red";
  }
}
