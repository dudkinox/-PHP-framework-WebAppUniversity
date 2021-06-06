<?php
require("../Database/index.php");
$sql_level  = "SELECT Level FROM status WHERE id_student = '" . $showid . "'";
$result_level = $conn->query($sql_level);
$row_level = $result_level->fetch_assoc();
if ($row_level["Level"] > 4 && $row_level["Level"] != 5) {
?>
    <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>การสอบความก้าวหน้าครั้งที่ 1 ผ่านแล้ว </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>กรุณาส่งเล่มวิจัยและโปสเตอร์</td>
            </tr>
        </tbody>
    </table>
<?php } else if ($row_level["Level"] == 5 || $row_level["Level"] == 4) { ?>
    <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>แก้ไข</th>
                <th>คะแนน</th>
                <th>หัวข้อ</th>
                <th>ชื่อ - สกุล</th>
                <th>อาจารย์ที่ปรึกษา</th>
                <th>กรรมการสอบ</th>
                <th>ประธานหลักสูตร</th>
                <th>ไฟล์เอกสาร</th>
                <th>สถานะ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // หัวข้อ
            $sql_data = "SELECT * FROM Topic WHERE id_student = '" . $showid . "'";
            $result_data = $conn->query($sql_data);
            //ขอสอบ
            $sql_data_exam = "SELECT * FROM exam_progress2 WHERE id_student = '" . $showid . "'";
            $result_data_exam = $conn->query($sql_data_exam);

            if ($result_status->num_rows > 0) {
                if ($result_data->num_rows > 0) {
                    $row_data = $result_data->fetch_assoc();
                    $row_data_exam = $result_data_exam->fetch_assoc();
            ?>
                    <tr>
                        <td><a href="?page=edit&option=exam4"><img src="https://img.icons8.com/dusk/30/000000/edit--v1.png" /></a></td>
                        <td></td>
                        <td><?php echo $row_data["NameProjectTH"]; ?></td>
                        <td><?php echo $showname; ?></td>
                        <td><?php echo $row_data["Name_teacher"]; ?></td>
                        <td><?php echo $row_data_exam["director_name"]; ?></td>
                        <td><?php echo $row_data_exam["president_name"]; ?></td>
                        <td><a href="../app/fileexam/<?php echo $row_data_exam["progress_exam"]; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
                        <td>
                            <?php
                            if ($row_data_exam["status"] == "ยังไม่อนุมัติ") {
                                echo '<span id="approve_status"><p>' . $row_data_exam["status"] . '</p></span>';
                            } else if ($row_data_exam["status"] == 'รอแก้ไข') {
                                echo '<span style = "color: #FF9900;"><p>' . $row_data_exam["status"] . '</p></span>';
                            } else {
                                echo '<span style = "color: #28a745;"><p>' . $row_data_exam["status"] . '</p></span>';
                            }
                            ?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
<?php } ?>