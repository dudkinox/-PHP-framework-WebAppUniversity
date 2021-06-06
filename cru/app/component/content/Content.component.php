<div class="col-md-9" id="content">
    <div class="card" data-aos="zoom-in-up" data-aos-delay="1500">
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <?php
                    // ที่ปรึกษา
                    $sql_dashboard = "SELECT * FROM Topic WHERE id_student = '" . $showid . "'";
                    $result_dashboard = $conn->query($sql_dashboard);
                    // กรรมการคุมสอบ
                    $sql_director = "SELECT * FROM director WHERE id_student = '" . $showid . "'";
                    $result_director = $conn->query($sql_director);
                    ?>
                    <?php
                    if ($type_account == "student") {
                        // เลือกที่ปรึกษา
                        $page = isset($_GET["page"]) ? $_GET["page"] : '';
                        $option = isset($_GET["option"]) ? $_GET["option"] : '';
                        $director_select = isset($_GET["director_select"]) ? $_GET["director_select"] : '';
                        if ($page == 1) {
                            include 'component/director/Director.component.php';
                        } else if ($page == "approve") {
                            include 'component/director/Default.component.php';
                        } else if ($page == 2 && $director_select == "") {
                            include 'component/cs1/Send.component.php';
                        } else if ($page == 2 && $director_select != "") {
                            include 'File_exam_topic/File_exam_topic.php';
                        } else if ($page == "edit" && $option == "adviser") {
                            $teacher = isset($_GET["teacher"]) ? $_GET["teacher"] : '';
                            $_SESSION["name_teacher"] = $teacher;
                            echo '<script>window.location.href = "research/?option=edit&teacher=' . $teacher . '";</script>';
                        } else {
                            include 'component/director/Default.component.php';
                        }
                    } else if ($type_account == "teacher") {
                    ?>
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h3 class="card-title">รายชื่อร้องขอที่ปรึกษา</h3>
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
                                            <th>เอกสาร</th>
                                            <th>จำนวนรอบแก้ไข</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_consultant = "SELECT * FROM Topic WHERE Name_teacher = '" . $showname . "'";
                                        $result_consultant = $conn->query($sql_consultant);
                                        $url = 'http://whitehurricane.000webhostapp.com/service.php';
                                        $json = file_get_contents($url);
                                        $json = json_decode($json);
                                        $number = count($json);

                                        if ($result_consultant->num_rows > 0) {
                                            $round_consultant = 1;
                                            while ($row_consultant = $result_consultant->fetch_assoc()) {
                                                for ($i = 0; $i < $number; $i++) {
                                                    if ($json[$i]->no_std == $row_consultant["id_student"]) {
                                                        $name_student = $json[$i]->Firstname . " " . $json[$i]->Lastname;
                                                        break;
                                                    }
                                                }
                                                $sql_status_director = "SELECT Status, Round_Edit FROM Topic_status WHERE id_student = '" . $row_consultant["id_student"] . "'";
                                                $result_status_director = $conn->query($sql_status_director);
                                                $row_status_director = $result_status_director->fetch_assoc();
                                                echo '
                            <tr onclick = "click_comment(`' . $row_consultant["id_student"] . '`, `' . $row_consultant["NameProjectTH"] . '`)" style = "cursor: pointer;">
                              <td>' . $round_consultant . '</td>
                              <td>' . $row_consultant["date"] . '</td>
                              <td>' . $row_consultant["id_student"] . '</td>
                              <td>' . $name_student . '</td>
                              <td>' . $row_consultant["NameProjectTH"] . '</td>
                              <td><a href="approve/report?id=' . $row_consultant["id_student"] . '" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                              <td>' . $row_status_director["Round_Edit"] . '</td>
                              <td>';
                                                if ($row_status_director["Status"] == "ยังไม่อนุมัติ") {
                                                    echo '
                                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal' . $round_consultant . '">อนุมัติ</button>
                                <button type="button" class="btn btn-block btn-danger" onclick = "show_comment()">ไม่อนุมัติ</button>
                              ';
                                                } else if ($row_status_director["Status"] == "รอแก้ไข") {
                                                    echo '<span style = "color: #ff8c00;">รอแก้ไข</span>';
                                                } else {
                                                    echo '<span style = "color: #63ca1e;">' . $row_status_director["Status"] . '</span>';
                                                }
                                                echo '
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
                                                                <p>ยืนยันการอนุมัติหัวข้อวิจัย : <?php echo $row_consultant["NameProjectTH"]; ?></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" onclick="approve('<?php echo $row_consultant['id_student']; ?>')">อนุมัติ</button>
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
                    <?php } ?>
                    <div onclick="open_activity()">
                        <div style="display: none;" id="keep_activity">
                            <img src="https://img.icons8.com/dusk/64/4a90e2/circled-user-male-skin-type-7.png" />
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
    <?php if ($type_account == "teacher") { ?>
        <div class="card" style="display: none;" id="show_comment">
            <div class="row">
                <div class="col-md-12 text-dark">
                    <div class="card card-primary card-outline">
                        <form action="component/API/index.php?comment=1" method="POST">
                            <div class="card-header">
                                <h3 class="card-title">เสนอแนะความคิดเห็น</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control" placeholder="เลือกรหัสนักศึกษา" id="id_student" name="id_student" readonly required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="หัวข้อ" id="topic" name="topic" readonly required />
                                </div>
                                <div class="form-group">
                                    <textarea id="compose-textarea" name="compose_textarea" class="form-control" style="height: 300px">
                          <h1><u>แนะความคิดเห็นของอาจารย์</u></h1>
                          <h4>แก่นักศึกษา</h4>
                          <p>ข้อความตัวอย่าง ดั้งนี้</p>
                          <ul>
                            <li>แก้ไขคำนำ</li>
                            <li>แก้ชื่อหัวข้อ</li>
                            <li>ลดการใช้คำซ้ำ</li>
                            <li>เขียนไม่วกไปวนมา</li>
                          </ul>
                          <p>ตัวอย่างโดย</p>
                          <p>นักศึกษาเตรียมสหกิจ วิทยาการคอมพิวเตอร์</p>
                        </textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary btn-block nav-link">ส่งกลับแก้ไข</button>
                                </div>
                                <div class="float-left">
                                    <button type="reset" onclick="close_comment()" class="btn btn-primary btn-block nav-link">ปิดหน้าต่าง</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<script src="js/comment.js"></script>
<?php } ?>