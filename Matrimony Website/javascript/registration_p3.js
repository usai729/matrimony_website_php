function load_image(event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
}

function submit_image() {
  var image = document.getElementById("input_file");

  if (image.value == "") {
    document.getElementById("alert").style.display = "flex";
  } else {
    fetch("http://localhost:8000/php/new_registration_p3.php", {
      body: new FormData(document.getElementById("form")),
      method: "POST",
    })
      .then((response) => {
        return response.json();
      })
      .then((result) => {
        if (result.RESPONSE == "OK") {
          open("registration_p4.html", "_self");
        } else {
          document.getElementById("alert").innerHTML =
            "An unknown error occured!";
          document.getElementById("alert").style.display = "flex";
        }
      })
      .catch((e) => console.log(e));
  }
}

window.history.forward();
function noBack() {
  window.history.forward();
}
