window.onload = function () {
  document.getElementById("BDetails").checked = true;

  if (document.getElementById("BDetails").checked == true) {
    document.getElementById("basicdetails").style.display = "block";
    document.getElementById("physicaldetails").style.display = "none";
  }
};

function show_form(type) {
  var b = document.getElementById("basicdetails");
  var p = document.getElementById("physicaldetails");

  if (type == "basic_details") {
    document.getElementById("basicdetails").style.display = "block";
    document.getElementById("physicaldetails").style.display = "none";
  }
  if (type == "physical_details") {
    document.getElementById("basicdetails").style.display = "none";
    document.getElementById("physicaldetails").style.display = "block";
  }
}
