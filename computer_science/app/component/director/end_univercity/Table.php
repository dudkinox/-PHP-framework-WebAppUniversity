<table id="example1" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            <th>แก้ไข</th>
            <th>รหัสนักศึกษา</th>
            <th>เล่มวิจัย</th>
            <th>โปสเตอร์</th>
            <th>อาจารย์ที่ปรึกษา</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // หัวข้อ
        $sql_data = "SELECT * FROM end_final WHERE id_student = '" . $showid . "'";
        $result_data = $conn->query($sql_data);

        if ($result_data->num_rows > 0) {
            $row_data = $result_data->fetch_assoc();
        ?>
            <tr>
                <td><a href="?page=edit&option=end_project"><img src="https://img.icons8.com/dusk/30/000000/edit--v1.png" /></a></td>
                <td><?php echo $showid; ?></td>
                <td><a href="../app/fileexam/<?php echo $row_data["final"]; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
                <td><a href="../app/fileexam/<?php echo $row_data["poster_final"]; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
                <td><?php echo $row_data["teacher"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>