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
                $sql_research = "SELECT * FROM Topic WHERE id_student = '" . $id_student . "'";
                $result_research = $conn->query($sql_research);
                // รอบ
                $round = 1;
                if ($result_research->num_rows > 0) {
                    $row_research = $result_research->fetch_assoc();
                    // Status
                    $sql_status = "SELECT Status FROM Topic_status WHERE id_student = '" . $id_student . "'";
                    $result_status = $conn->query($sql_status);
                    $row_status = $result_status->fetch_assoc();

                    echo '
                    <tr>
                        <td>' . $round . '</td>
                        <td> - </td>
                        <td>' . $row_research["id_student"] . '</td>
                        <td> - </td>
                        <td>' . $name_student . '</td>
                        <td>เอกสารเสนอหัวข้อวิจัย</td>
                        <td><a href = "Exam/report/?id=' . $id_student . '" target = "_blank"><img class = "cursor-pointer" src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                        <td> ยังไม่ได้ทำ </td>';
                    // สถานะ
                    if ($row_status["Status"] == "ยังไม่อนุมัติ") {
                        echo '<td>2</td>';
                    } else {
                        echo '<td>4</td>';
                    }
                    echo '
                        <td nowrap="nowrap">
                            <a href = "Exam/API.php?edit=1"><img class = "cursor-pointer" src="https://img.icons8.com/dusk/30/000000/edit.png"/></a>
                        </td>
                    </tr>';
                    $round++;
                }
                // ขอสอบ
                $sql_exam = "SELECT * FROM exam WHERE idpass = '" . $id_student . "'";
                $result_exam = $conn->query($sql_exam);

                if ($result_exam->num_rows > 0) {
                    $row_exam = $result_exam->fetch_assoc();
                    echo '
                    <tr>
                        <td>' . $round . '</td>
                        <td>' . $row_exam["date_picker"] . '</td>
                        <td>' . $row_exam["idpass"] . '</td>
                        <td>' . $row_exam["sername"] . '</td>
                        <td>' . $row_exam["namelastname"] . '</td>
                        <td>' . $row_exam["Doc_type"] . '</td>
                        <td><a href = "Exam/report/?id=' . $id_student . '" target = "_blank"><img class = "cursor-pointer" src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                        <td>' . $row_exam["Round_edit"] . '</td>
                        <td>2</td>
                        <td nowrap="nowrap">
                            <a href = "Exam/API.php?edit=1"><img class = "cursor-pointer" src="https://img.icons8.com/dusk/30/000000/edit.png"/></a>
                        </td>
                    </tr>';
                    $round++;
                }

                ?>
            </tbody>
        </table>
    </div>
</div>