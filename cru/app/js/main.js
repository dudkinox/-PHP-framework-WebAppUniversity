function keep_activity() {
  document.getElementById("activity").style = "display: none";
  document.getElementById("keep_activity").style = "display: block";
  document.getElementById("content").className = "col-md-12";
}

function open_activity() {
  document.getElementById("activity").style = "display: block";
  document.getElementById("keep_activity").style = "display: none";
  document.getElementById("content").className = "col-md-9";
}
