function submit_profession() {
  fetch("http://localhost:8000/php/insert_salary.php", {
    method: "post",
    body: new FormData(document.getElementById("form")),
  })
    .then((response) => {
      return response.json();
    })
    .then((result) => {
      if (result.RESPONSE == "OK") {
        open("registration_p5.html", "_self");
      } else {
        document.getElementById("alert").style.display = "flex";
      }
    })
    .catch((e) => {
      open("registration_p5.html", "_self");
    });
}

window.history.forward();
function noBack() {
  window.history.forward();
}
