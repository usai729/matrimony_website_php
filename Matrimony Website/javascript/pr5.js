window.onload = function (gender) {
  fetch("http://localhost:8000/php/user_gender.php", {
    method: "GET",
  })
    .then((response) => {
      return response.text();
    })
    .then((result) => {
      if (result == "male") {
        document.getElementById("age").setAttribute("min", "21");
      } else {
        document.getElementById("age").setAttribute("min", "18");
      }
    })
    .catch((e) => {
      console.log(e);
    });
};
