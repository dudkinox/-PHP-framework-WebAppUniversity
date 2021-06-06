<?php
// Connect to database
require('../../Database/index.php');
// Get data
$id = isset($_GET["id"]) ? $_GET["id"] : '';
$edit = isset($_GET["edit"]) ? $_GET["edit"] : '';

if ($edit == '') {
  $sql = "SELECT * FROM exam WHERE idpass = '" . $id . "'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
} else {
  $sql = "SELECT * FROM exam_log WHERE idpass = '" . $id . "' AND Round_edit = " . $edit . "";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}

require_once __DIR__ . '/../../lib/pdf/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$style =
  '
<style>
.container{
    font-family: "Garuda";
    font-size: 12pt;
}
h3{
  text-align: center;
  font-family: "Garuda";
  }
h4{
  font-family: "Garuda";
}
p{
  font-family: "Garuda";
}
/* วันที่ */
.date{
  position: relative;
  left: 60%;
}
</style>';

$text = '
<div class = "container">
  <h4 style = "text-align:center;"><b>แบบการขอสอบประเมินผลโครงงานวิจัยทางวิทยาการคอมพิวเตอร์</b></h4>
  <h4 style = "text-align:center;"><b>สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏจันทรเกษม</b></h4>
  ';
if ($row["type"] == "ภาคในเวลาราชการ") {
  $text2 = '
  <div style = "display: inline;text-align: center;">
    <p><img src="https://img.icons8.com/ios/10/000000/checked-checkbox--v1.png"/>&nbsp;&nbsp;ภาคเวลาในราชการ
    &nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/ios/10/000000/unchecked-checkbox.png"/>&nbsp;&nbsp;ภายเวลานอกราชการ</p>
  </div>
  ';
} else {
  $text2 = '
  <div style = "display: inline;text-align: center;">
    <p><img src="https://img.icons8.com/ios/10/000000/unchecked-checkbox.png"/>&nbsp;&nbsp;ภาคเวลาในราชการ
    &nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/ios/10/000000/checked-checkbox--v1.png"/>&nbsp;&nbsp;ภายเวลานอกราชการ</p>
  </div>';
}
$size_hr = "'400px'";
$sigle_q = "'";
$test3 = '
<p align="right">' . $row["date_picker"] . '</p>
<p>เรียน ประธานหลักสูตร</p>
<p>เรื่อง ขอสอบเพื่อประเมินผลการวิจัยทางวิทยาการคอมพิวเตอร์</p>
<p>ข้าพเจ้า ' . $row["sername"] . '   ' .  $row["namelastname"] . '   รหัสประจำตัวนักศึกษา ' . $id . '</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีความประสงค์ขอสอบเพื่อประเมินโครงงานวิจัย เรื่อง ' . $row["comment"] . '</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งถือเป็นส่วนหนึ่งของการศึกษาในรายวิชาการวิจัยทางวิทยาการคอมพิวเตอร์</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยลงทะเบียนรายวิชาวิจัยวิทยาการคอมพิวเตอร์ ภาคเรียนที่ ' . $row["midterm"] . ' / ' . $row["year"] . '  กลุ่ม ' . $row["team"] . '</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จึงเรียนมาเพื่อโปรดพิจารณาดำเนินการต่อไป</p>
<p><b>&nbsp;&nbsp;&nbsp;เบอร์โทรนักศึกษา   ' . $row["number"] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อผู้ขอสอบ...........................................................</b></p>
<img width = "100%" height = "5px" src = "hr/hr.png" />
<p style = "border: 3px dotted #000;" width = "200">&nbsp;&nbsp;&nbsp;สำหรับอาจารย์ที่ปรึกษา</p>
<p>ความเห็นของอาจารย์ที่ปรึกษา&nbsp;&nbsp;<img src="https://img.icons8.com/ios/20/000000/unchecked-checkbox.png"/>&nbsp;&nbsp;อนุญาต
&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/ios/20/000000/unchecked-checkbox.png"/>&nbsp;&nbsp;ไม่อนุญาต</p>
<p>.......................................................................................................................................</p>
<p>ลงชื่อ ......................................... อาจารย์ที่ปรึกษา 	 ลงชื่อ .............................................. อาจารย์ที่ปรึกษาร่วม</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
)
</p>
<img width = "100%" height = "5px" src = "hr/hr.png" />
<p style = "border: 3px dotted #000;" width = "200">&nbsp;&nbsp;&nbsp;สำหรับกรรมการสอบ</p>
<p>ในการนี้ขอเสนอชื่อ................................................................................................เป็นกรรมการสอบในครั้งนี้</p>
<p>กรรมการสอบลงนาม...............................................................................รับทราบ เมื่อวันที่......./......./.......</p>
<p>และขอกำหนดวันเวลาและสถานที่สอบเป็นวันที่...........เวลา.....................................ห้องสอบ..............................</p>
<img width = "100%" height = "5px" src = "hr/hr.png" />
<p style = "border: 3px dotted #000;" width = "200">&nbsp;&nbsp;&nbsp;เฉพาะประธานหลักสูตร</p>
<p><b>ความเห็นของประธานหลักสูตร</b></p>
<p><img src="https://img.icons8.com/ios/20/000000/unchecked-checkbox.png"/> อนุญาต   โดยแต่งตั้งให้........................................เป็นประธานกรรมการสอบในครั้งนี้</p>
<p><img src="https://img.icons8.com/ios/20/000000/unchecked-checkbox.png"/> ไม่อนุญาต	 ..................................................</p>
<p align ="right">ลงชื่อ..................................................................ประธานหลักสูตร</p>
<p align ="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</p>
</div>
';
$mpdf->WriteHTML($style);
$mpdf->WriteHTML($text);
$mpdf->WriteHTML($text2);
$mpdf->WriteHTML($test3);

$mpdf->Output();
$conn->close();
