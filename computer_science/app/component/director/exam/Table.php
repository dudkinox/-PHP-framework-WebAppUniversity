<table id="example1" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
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
        $sql_data_exam = "SELECT * FROM exam WHERE id_student = '" . $showid . "'";
        $result_data_exam = $conn->query($sql_data_exam);
        // สถานะ
        $sql_status = "SELECT Status FROM Topic_status WHERE id_student = '" . $showid . "'";
        $result_status = $conn->query($sql_status);
        if ($result_status->num_rows > 0) {
            if ($result_data->num_rows > 0) {
                $row_data = $result_data->fetch_assoc();
                $row_status = $result_status->fetch_assoc();
                $row_data_exam = $result_data_exam->fetch_assoc();
        ?>
                <tr>
                    <td><?php echo $row_data["NameProjectTH"]; ?></td>
                    <td><?php echo $showname; ?></td>
                    <td><?php echo $row_data["Name_teacher"]; ?></td>
                    <td><?php echo $row_data_exam["director_name"]; ?></td>
                    <td><?php echo $row_data_exam["president_name"]; ?></td>
                    <td><a href="../app/fileexam/<?php echo $row_data_exam["exam_topic"]; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
                    <td>
                        <span style="color: #28a745;">
                            <p>ผ่าน</p>
                        </span>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>