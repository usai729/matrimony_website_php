function submit_desc() {
  fetch("http://localhost:8000/php/new_registration_p2.php", {
    method: "post",
    body: new FormData(document.getElementById("form")),
  })
    .then((response) => {
      return response.json();
    })
    .then((result) => {
      if (result.RESPONSE == "OK") {
        open("registration_p3.html", "_self");
      } else {
        console.log(result.MESSAGE);
      }
    })
    .catch((e) => {
      //console.log(e);
    });
}

window.history.forward();
function noBack() {
  window.history.forward();
}
