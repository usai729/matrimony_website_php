window.onload = function () {
  var bg_colors = [
    "background-color: #f9c5d1;\
    background: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);",
    "background-color: #e96196;\
    background: linear-gradient(170deg, #e96196 0%, #ffffff 74%);",
    "background-color: #fec84e;\
    background-image: linear-gradient(315deg, #fec84e 0%, #ffdea8 74%);",
    "background-color: #7ee8fa;\
    background-image: linear-gradient(315deg, #7ee8fa 0%, #80ff72 74%);",
    "background-color: #f9d29d;\
    background-image: linear-gradient(315deg, #f9d29d 0%, #ffd8cb 74%);",
  ];

  var gradient = bg_colors[Math.floor(Math.random() * bg_colors.length)];

  console.log("BG COLOR INDEX: " + bg_colors.indexOf(gradient));

  document.body.style = gradient;

  var check_box = document.getElementById("working");
  var profession = document.getElementById("profession");

  if (check_box) {
    document.getElementById("working").checked = true;

    if (check_box.checked == true) {
      profession.style.display = "flex";
      profession.value = "";
    } else {
      profession.style.display = "none";
      profession.value = "";
    }
  }
};
