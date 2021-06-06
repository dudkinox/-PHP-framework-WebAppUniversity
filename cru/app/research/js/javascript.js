let count = 1;

function add_row_table() {
  var activity_input = document.getElementById("activity").value;
  var date_input = document.getElementById("date").value;
  if (activity_input != "" && date_input != "") {
    // add table
    count++;
    var table = document.createElement("TABLE");
    table.class = "table table-bordered text-center";
    table.id = "add_tbody";
    document.getElementById("add_table").appendChild(table);
    var tbody = document.createElement("TBODY");
    tbody.innerHTML =
      "<div class='form-group'>" +
      "<label>กิจกรรมที่ <b>(" +
      count +
      ")</b></label>" +
      "<input type='text' class='form-control form-control-lg' placeholder='กรอกชื่อกิจกรรม' name = 'activity" +
      count +
      "' />" +
      "</div>" +
      "<div class='form-group'>" +
      "<label>เลือกระยะเวลา</label>" +
      "<div class='input-group' id='date_picker" +
      count +
      "'>" +
      "<div class='input-group-prepend'>" +
      "<span class='input-group-text'>" +
      "<i class='la la-calendar-check-o'></i>" +
      "</span>" +
      "</div>" +
      "<input type='text' class='form-control 'placeholder='วันที่เริ่มต้น <-> วันที่สิ้นสุด' name = 'date" +
      count +
      "'/>" +
      "</div>" +
      "</div>";
    document.getElementById("add_tbody").appendChild(tbody);

    // datepicker
    $("#date_picker" + count + "").daterangepicker(
      {
        buttonClasses: " btn",
        applyClass: "btn-primary",
        cancelClass: "btn-secondary",
      },
      function (start, end, label) {
        $("#date_picker" + count + " .form-control").val(
          start.format("DD-MM-YYYY") + " ถึง " + end.format("DD-MM-YYYY")
        );
      }
    );
  } else {
    $("document").ready(function () {
      $("#alert_date_activity").modal("show");
    });
  }
}

function detail_preview() {
  var sNameProjectTH = document.getElementById("NameProjectTH").value;
  var sNameProjectEng = document.getElementById("NameProjectEng").value;
  var simportance = document.getElementById("importance").value;
  var sobjective = document.getElementById("objective").value;
  var sPrinciple = document.getElementById("Principle").value;
  var sactivity = document.getElementById("activity").value;
  var sdate = document.getElementById("date").value;
  var splan_work = document.getElementById("plan_work").value;
  var slimit_work = document.getElementById("limit_work").value;

  document.getElementById("show_preview").innerHTML =
    "ชื่อโปรเจค (ภาษาไทย)  : " +
    sNameProjectTH +
    "<br>ชื่อโปรเจค (ภาษาอังกฤษ) :  " +
    sNameProjectEng +
    "<br>ความเป็นมาและความสำคัญของปัญหา :  " +
    simportance +
    "<br>วัตถุประสงค์ :" +
    sobjective +
    "<br>หลักการ ทฤษฎี เหตุผล :" +
    sPrinciple +
    "<br>กิจกรรมที่ :" +
    sactivity +
    "<br>วันที่ :" +
    sdate +
    "<br>แผนการดำเนินงาน :" +
    splan_work +
    "<br>ขอบเขตการศึกษา :" +
    slimit_work;
}

function close_alert() {
  $("#alert_date_activity").modal("hide");
}
