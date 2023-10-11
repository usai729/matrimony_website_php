function submit_form() {
  fetch("http://localhost:8000/php/new_registration_part1.php", {
    method: "post",
    body: new FormData(document.getElementById("rform")),
  })
    .then((response) => {
      return response.json();
    })
    .then((result) => {
      if (result.RESPONSE == "OK") {
        open("registration_2nd_part.html", "_self");
        console.log("yes");
      } else {
        if (result.RESPONSE == "EXISTS") {
          document.getElementById("alert_exists").style.display = "flex";
        } else if (result.RESPONSE == "ERROR") {
          document.getElementById("alert").style.display = "flex";
          console.log(result);
        }
      }
    })
    .catch((e) => {
      document.getElementById("alert").style.display = "flex";
      console.log(e);
    });
}

function show_fields_1() {
  var check_box = document.getElementById("working");
  var profession = document.getElementById("profession");
  var profession_details =
    document.getElementsByClassName("profession_details");

  if (check_box.checked == true) {
    profession.style.display = "flex";
    profession.required = "required";
    profession.value = "";
  } else {
    profession.style.display = "none";
    profession.removeAttribute("required");
    profession.value = "";
  }

  if (profession_details.style.display == "none") {
  }
}
