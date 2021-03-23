<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">FORM
                <span class="d-block text-muted pt-2 font-size-sm">แบบฟอร์มที่เคยส่ง</span>
            </h3>
        </div>
    </div>
    <div class="card-body text-center">
        <table class="table table-bordered table-hover table-checkable mt-10" id="kt_datatable">
            <thead>
                <tr>
                    <th colspan="10">ประเภทเอกสาร และสถานะอนุมัติ</th>
                </tr>
                <tr>
                    <th>ลำดับ</th>
                    <th>วันที่</th>
                    <th>รหัสนักศึกษา</th>
                    <th>คำนำหน้า</th>
                    <th>ชื่อ - สกุล</th>
                    <th>ประเภทเอกสาร</th>
                    <th>PDF</th>
                    <th>รอบที่แก้ไข</th>
                    <th>สถานะ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_table = "SELECT * FROM exam WHERE idpass = '" . $id_student . "'";
                $result_table = $conn->query($sql_table);
                if ($result_table->num_rows > 0) {
                    $round = 1;
                    while ($row_table = $result_table->fetch_assoc()) {
                        echo '
                    <tr>
                        <td>' . $round . '</td>
                        <td>' . $row_table["date_picker"] . '</td>
                        <td>' . $row_table["idpass"] . '</td>
                        <td>' . $row_table["sername"] . '</td>
                        <td>' . $row_table["namelastname"] . '</td>
                        <td>' . $row_table["Doc_type"] . '</td>
                        <td><a href = "Exam/report/?id=' . $id_student . '" target = "_blank"><img class = "cursor-pointer" src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                        <td>' . $row_table["Round_edit"] . '</td>
                        <td>2</td>
                        <td nowrap="nowrap">
                            <a href = "Exam/API.php?edit=1"><img class = "cursor-pointer" src="https://img.icons8.com/dusk/30/000000/edit.png"/></a>
                        </td>
                    </tr>';
                        $round++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>