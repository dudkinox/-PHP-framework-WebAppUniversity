<div class="card">
    <div class="card-header bg-warning">
        <h3 class="card-title">รายชื่อสอบความก้าวหน้าครั้งที่ 2</h3>
    </div>
    <div class="card-body text-center text-dark">
        <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>วันที่</th>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ - สกุล</th>
                    <th>หัวข้องานวิจัย (ภาษาไทย)</th>
                    <th>อาจารย์ที่ปรึกษา</th>
                    <th>กรรมการสอบ</th>
                    <th>ประธานหลักสูตร</th>
                    <th>เอกสาร</th>
                    <th>ดำเนินการ</th>
                    <th>คะแนน</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_consultant = "SELECT * FROM exam_progress2 
                                    WHERE teacher_name = '" . $showname . "'
                                    OR 	director_name = '" . $showname . "'
                                    OR president_name = '" . $showname . "'";

                $result_consultant = $conn->query($sql_consultant);

                if ($result_consultant->num_rows > 0) {
                    $round_consultant = 1;
                    while ($row_consultant = $result_consultant->fetch_assoc()) {
                        $sql_name_student = "SELECT * FROM Login 
                WHERE no_std = '" . $row_consultant["id_student"] . "'";
                        $result_name_student = $conn->query($sql_name_student);
                        $row_no_std = $result_name_student->fetch_assoc();
                        $name_student = $row_no_std["pre"] . " " . $row_no_std3["Firstname"] . " " . $row_no_std3["Lastname"];
                        $sql_topic = "SELECT NameProjectTH FROM Topic WHERE id_student = '" . $row_consultant["id_student"] . "'";
                        $result_topic = $conn->query($sql_topic);
                        $row_topic = $result_topic->fetch_assoc();
                        echo '
                            <tr onclick = "click_comment(`' . $row_consultant["id_student"] . '`, `' . $row_topic["NameProjectTH"] . '`)" style = "cursor: pointer;">
                              <td>' . $round_consultant . '</td>
                              <td>' . $row_consultant["date"] . '</td>
                              <td>' . $row_consultant["id_student"] . '</td>
                              <td>' . $name_student . '</td>
                              <td>' . $row_topic["NameProjectTH"] . '</td>
                              <td>' . $row_consultant["teacher_name"] . '</td>
                              <td>' . $row_consultant["director_name"] . '</td>
                              <td>' . $row_consultant["president_name"] . '</td>
                              <td><a href="fileexam/' . $row_consultant["progress_exam"] . '" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                              <td>';
                        if ($row_consultant["status"] == "ยังไม่อนุมัติ") {
                            echo '
                                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal' . $round_consultant . '">อนุมัติ</button>
                                <button type="button" class="btn btn-block btn-danger" onclick = "show_comment()">ไม่อนุมัติ</button>
                                 ';
                        } else if ($row_consultant["status"] == "รอแก้ไข") {
                            echo '<span style = "color: #FF9900;">รอแก้ไข</span>';
                        } else {
                            echo '<span style = "color: #63ca1e;">' . $row_consultant["status"] . '</span>';
                        }
                        echo '</td>
                        <td>
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="number" name="Point" placeholder="กรอกคะแนน" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-primary">ตกลง</button>
                            </span>
                          </div>
                        </form>
                        </td>
                            </tr>';
                ?>
                        <div class="modal fade text-dark" id="exampleModal<?php echo $round_consultant; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning">
                                        <h5 class="modal-title" id="exampleModalLongTitle">แจ้งเตือนการยืนยัน</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>ยืนยันการอนุมัติหัวข้อวิจัย : <?php echo $row_topic["NameProjectTH"]; ?></p>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-primary" onclick="approve4('<?php echo $row_consultant['id_student']; ?>')">อนุมัติ</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="js/approve.js"></script>
                <?php
                        $round_consultant++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>