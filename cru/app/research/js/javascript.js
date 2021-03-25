let count = 1;
function add_row_table() {
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
        start.format("DD-MM-YYYY") + " <-> " + end.format("DD-MM-YYYY")
      );
    }
  );
}
