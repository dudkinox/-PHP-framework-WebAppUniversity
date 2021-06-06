function click_comment(id_student, topic) {
  document.getElementById("id_student").value = id_student;
  document.getElementById("topic").value = topic;
}

function show_comment() {
  document.getElementById("show_comment").style = "display: block;";
}

function close_comment() {
  document.getElementById("show_comment").style = "display: none;";
}
