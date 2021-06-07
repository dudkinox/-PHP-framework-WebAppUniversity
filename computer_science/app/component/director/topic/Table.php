<table id="example1" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>แก้ไข</th>
            <th>หัวข้อ</th>
            <th>ชื่อ - สกุล</th>
            <th>อาจารย์ที่ปรึกษา</th>
            <th>ไฟล์เอกสาร</th>
            <th>สถานะ</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // หัวข้อ
        $sql_data = "SELECT * FROM Topic WHERE id_student = '" . $showid . "'";
        $result_data = $conn->query($sql_data);
        // สถานะ
        $sql_status = "SELECT Status FROM Topic_status WHERE id_student = '" . $showid . "'";
        $result_status = $conn->query($sql_status);
        if ($result_status->num_rows > 0) {
            if ($result_data->num_rows > 0) {
                $row_data = $result_data->fetch_assoc();
                $row_status = $result_status->fetch_assoc();
        ?>
                <tr>
                    <td><a href="?page=edit&option=adviser&teacher=<?php echo $row_data["Name_teacher"]; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/edit--v1.png" /></a></td>
                    <td><?php echo $row_data["NameProjectTH"]; ?></td>
                    <td><?php echo $showname; ?></td>
                    <td><?php echo $row_data["Name_teacher"]; ?></td>
                    <td><a href="https://capital-cru.000webhostapp.com/report/?id=<?php echo $showid; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
                    <td>
                        <?php
                        if ($row_status["Status"] == "ยังไม่อนุมัติ") {
                            echo '<span id="approve_status"><p>' . $row_status["Status"] . '</p></span>';
                        } else if ($row_status["Status"] == "รอแก้ไข") {
                            echo '<span style = "color: #ff8c00;">รอแก้ไข</span>';
                        } else {
                            echo '<span style = "color: #28a745;"><p>' . $row_status["Status"] . '</p></span>';
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