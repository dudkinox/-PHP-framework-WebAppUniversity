<?php
$Doc_type = isset($_GET["id"]) ? $_GET["id"] : '';
$sql_exam_edit = "SELECT * FROM exam WHERE idpass = '" . $id_student . "'";
$result_exam_edit = $conn->query($sql_exam_edit);
$row_exam_edit = $result_exam_edit->fetch_assoc();
if ($Doc_type != "เอกสารเสนอหัวข้อวิจัย") {
?>
    <div class="col-lg-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header bg-primary">
                <h1 class="card-title h1">แบบการขอสอบประเมินผลโครงงานวิจัยทางวิทยาการคอมพิวเตอร์ [แก้ไข]</h1>
            </div>
            <form class="form" action="Exam/API.php?edit=1" method="POST">
                <div class="card-body text-center">
                    <div class="form-group row">
                        <label class="col-4 col-form-label">ประเภทภาควิชาที่เรียน</label>
                        <div class="radio-inline col-6">
                            <?php if ($row_exam_edit["type"] == "ภาคในเวลาราชการ") { ?>
                                <label class="radio radio-lg">
                                    <input type="radio" value="ภาคในเวลาราชการ" checked="checked" id="type" name="type" />
                                    <span></span>
                                    ภาคในเวลาราชการ
                                </label>
                                <label class="radio radio-lg">
                                    <input type="radio" value="ภาคนอกเวลาราชการ" id="type" name="type" />
                                    <span></span>
                                    ภาคนอกเวลาราชการ
                                </label>
                            <?php } else { ?>
                                <label class="radio radio-lg">
                                    <input type="radio" value="ภาคในเวลาราชการ" id="type" name="type" />
                                    <span></span>
                                    ภาคในเวลาราชการ
                                </label>
                                <label class="radio radio-lg">
                                    <input type="radio" value="ภาคนอกเวลาราชการ" checked="checked" id="type" name="type" />
                                    <span></span>
                                    ภาคนอกเวลาราชการ
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_picker" class="col-4 col-form-label">วัน - เดือน - ปี</label>
                        <div class="col-6">
                            <input type="text" value="<?php echo $row_exam_edit["date_picker"]; ?>" name="date_picker" class="form-control" placeholder="วัน - เดือน - ปี" required />
                            <span class="form-text text-muted">แก้ไขเลขวันที่</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">ข้าพเจ้า</label>
                        <div class="radio-inline col-6">
                            <label class="radio radio-lg">
                                <input type="radio" value="นาย" checked="checked" id="sername" name="sername" />
                                <span></span>
                                นาย
                            </label>
                            <label class="radio radio-lg">
                                <input type="radio" value="นาง" id="sername" name="sername" />
                                <span></span>
                                นาง
                            </label>
                            <label class="radio radio-lg">
                                <input type="radio" value="นางสาว" id="sername" name="sername" />
                                <span></span>
                                นางสาว
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name_lastname" class="col-4 col-form-label">โปรดกรอกชื่อ-นามสกุล</label>
                        <div class="col-6">
                            <input class="form-control" type="search" placeholder="กรอกชื่อ-นามสกุล" id="name_lastname" name="name_lastname" value="<?php echo $name_student; ?>" required readonly />
                            <span class="form-text text-muted">โปรดกรอกชื่อ-นามสกุล</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_pass" class="col-4 col-form-label">รหัสประจำตัว</label>
                        <div class="col-6">
                            <input class="form-control" type="search" placeholder="6111500143" id="id_pass" name="id_pass" value="<?php echo $id_student; ?>" required readonly />
                            <span class="form-text text-muted">โปรดกรอกเลข</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-4 col-form-label">มีความประสงค์ขอสอบเพื่อประเมินโครงงานวิจัย เรื่อง</label>
                        <div class="col-6">
                            <textarea class="form-control" id="comment" name="comment" rows="3" title="กรอกข้อความ" required><?php echo $row_exam_edit["comment"]; ?></textarea>
                            <span class="form-text text-muted">โปรดกรอกข้อความไม่เกิน 150 บรรทัด</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="midterm" class="col-4 col-form-label">ลงทะเบียนรายวิชาวิจัยวิทยาการคอมพิวเตอร์ ภาคเรียนที่</label>
                        <div class="col-6 row">
                            <div class="col-lg-3">
                                <input class="form-control" type="number" placeholder="00" id="midterm" name="midterm" value="<?php echo $row_exam_edit["midterm"]; ?>" required />
                            </div>
                            <div class="col-lg-1">
                                <h2>/</h2>
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="search" placeholder="พ.ศ." id="year" name="year" value="<?php echo $row_exam_edit["year"]; ?>" required />
                            </div>
                            <div class="col-lg-1">
                                <h2>กลุ่ม</h2>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" type="number" placeholder="00" id="group" name="group" value="<?php echo $row_exam_edit["team"]; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-4 col-form-label">เบอร์โทร</label>
                        <div class="col-6">
                            <input class="form-control" type="search" placeholder="082-000-0000" id="number" name="number" value="<?php echo $tel; ?>" required readonly />
                            <span class="form-text text-muted">โปรดกรอกเลข</span>
                        </div>
                    </div>
                    <div class="form-group row" style="display:none">
                        <div class="col-6">
                            <input class="form-control" type="text" id="doc_type" name="doc_type" value="ขอสอบประเมินผลโครงงานวิจัย" required readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary text-center" type="submit">ยืนยันการแก้ไข</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } else { ?>

<?php } ?>