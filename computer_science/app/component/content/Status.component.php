<div class="col-md-3" id="activity">
    <?php
    // profile
    $img = "img/defult.png";
    ?>
    <div class="card card-primary card-outline" data-aos="flip-right" data-aos-delay="500">
        <div class="card-header text-dark" id="head_status">
            ติดตามสถานะ
            <div class="card-tools">
                <button type="button" class="btn btn-tool float-right" onclick="keep_activity()">
                    <img src="https://img.icons8.com/dusk/30/000000/chevron-left.png" />
                </button>
            </div>
        </div>
        <div class="card-body box-profile">
            <div class="text-center card-box">
                <div class="member-card pt-2 pb-2">
                    <div class="thumb-lg member-thumb mx-auto"><img src="https://img.icons8.com/dusk/64/000000/student-center.png" class="rounded-circle img-thumbnail" alt="profile-image"> </div>
                    <div class="text-dark">
                        <h4><?php echo $showname; ?></h4>
                        <p class=" text-center"><?php echo $showid; ?>
                        <p class="text-muted">ver 0.0.1 <span>| </span><span><a href="#" class="text-pink">https://www.chandra.ac.th/</a></span></p>
                    </div>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-3">
                                    <p class="mb-0 text-muted">GPA</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3">
                                    <p class="mb-0 text-muted">ชั้นปี</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-3">
                                    <p class="mb-0 text-muted">ภาคปกติ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($type_account != "teacher") { ?>
                <p class="text-muted text-center">
                    <?php
                    if ($status == "เล่มวิจัยเเละโปรเจคเสร็จสิ้น") {
                        $color = "success";
                    } else {
                        $color = "danger";
                    }
                    ?>
                    <button type="button" class="btn btn-block btn-<?php echo $color; ?>" disabled>
                        <?php echo $status; ?>
                    </button>
                </p>
            <?php } ?>
            <a id="profile" href="https://whitehurricane.000webhostapp.com/login/student_page.php" target="_blank" class="btn btn-primary btn-block nav-link"><b>แก้ไขประวัติส่วนตัว</b></a>
        </div>
    </div>
    <?php
    switch ($status) {
        case "ยังไม่ได้เลือกที่ปรึกษา":
            $button_status = "คลิ๊กเพื่อเริ่ม";
            $button_color = "danger";
            break;
        case "รอที่ปรึกษาอนุมัติ":
            $button_status = "รออนุมัติ";
            $button_color = "secondary";
            break;
        default:
            $button_status = "คลิ๊กเพื่อเริ่ม";
            $button_color = "danger";
            break;
    }
    if ($type_account == "student") {
    ?>
        <div class="card card-primary text-center" data-aos="flip-right" data-aos-delay="1000">
            <div class="card-header" id="head_status" style="color: #000;">
                <h5>
                    ขั้นตอนการสอบวิจัย
                </h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <img src="https://img.icons8.com/flat-round/20/000000/minus.png" />
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>หัวข้อ</th>
                        <th>สถานะ</th>
                    </tr>
                    <tr>
                        <td>1. เลือกที่ปรึกษา</td>
                        <td>
                            <?php if ($level == 1) { ?>
                                <a href="?page=approve">
                                    <span style="color: #FF0000;">ยังไม่ดำเนินการ</span>
                                </a>
                            <?php } else { ?>
                                <a href="?page=approve">
                                    <span style="color: #63ca1e;">ผ่าน</span>
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2. สอบเสนอหัวข้อ</td>
                        <td>
                            <?php if ($level == 2) { ?>
                                <a href="?page=2&cs=1">
                                    <button type="button" class="btn btn-block btn-<?php echo $button_color; ?>">
                                        <?php echo $button_status; ?>
                                    </button>
                                </a>
                            <?php } else if ($level > 2) { ?>
                                <a href="?page=exam_dashboard">
                                    <span style="color: #63ca1e;">ผ่าน</span>
                                </a>
                            <?php } else { ?>
                                <img src="https://img.icons8.com/dusk/30/000000/lock-2.png" />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td> 3. สอบความก้าวหน้าครั้งที่ 1</td>
                        <td>
                            <?php if ($level == 3 && $status != "รออนุมัติ") { ?>
                                <a href="?page=3">
                                    <button type="button" class="btn btn-block btn-<?php echo $button_color; ?>">
                                        <?php echo $button_status; ?>
                                    </button>
                                </a>
                            <?php } else if ($status == "รออนุมัติ") { ?>
                                <a href="?page=exam_progress1">
                                    <span style="color: #FF9900;">รออนุมัติ</span>
                                </a>
                            <?php } else if ($level > 3) { ?>
                                <a href="?page=exam_progress1">
                                    <span style="color: #63ca1e;">ผ่าน</span>
                                </a>
                            <?php } else { ?>
                                <img src="https://img.icons8.com/dusk/30/000000/lock-2.png" />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4. สอบความก้าวหน้าครั้งที่ 2</td>
                        <td>
                            <?php if ($level == 4 && $status != 'รออนุมัติสอบความก้าวหน้าครั้งที่ 2') { ?>
                                <a href="?page=4">
                                    <button type="button" class="btn btn-block btn-<?php echo $button_color; ?>">
                                        <?php echo $button_status; ?>
                                    </button>
                                </a>
                            <?php } else if ($status == "รออนุมัติสอบความก้าวหน้าครั้งที่ 2") { ?>
                                <a href="?page=exam_dashboard2">
                                    <span style="color: #FF9900;">รออนุมัติ</span>
                                </a>
                            <?php } else if ($level > 4) { ?>
                                <a href="?page=exam_dashboard2">
                                    <span style="color: #63ca1e;">ผ่าน</span>
                                </a>
                            <?php } else { ?>
                                <img src="https://img.icons8.com/dusk/30/000000/lock-2.png" />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>5. ส่งเล่มวิจัย โปสเตอร์</td>
                        <td> <?php if ($level == 5) { ?>
                                <a href="?page=5">
                                    <button type="button" class="btn btn-block btn-<?php echo $button_color; ?>">
                                        <?php echo $button_status; ?>
                                    </button>
                                </a>
                            <?php } else if ($level > 5) { ?>
                                <a href="?page=end_university">
                                    <span style="color: #63ca1e;">ผ่าน</span>
                                </a>
                            <?php } else { ?>
                                <img src="https://img.icons8.com/dusk/30/000000/lock-2.png" />
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="card card-primary text-center" data-aos="flip-right" data-aos-delay="1000">
            <div class="card-header">
                <h3 class="card-title">ทำตามขั้นตอนด้านล่างนี้</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <img src="https://img.icons8.com/flat-round/20/000000/minus.png" />
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>หัวข้อ</th>
                        <th>สถานะ</th>
                    </tr>
                    <tr>
                        <td>1. เลือกที่ปรึกษา</td>
                        <td>
                            <a href="?page=1">
                                <button type="button" class="btn btn-block btn-dark">
                                    คลิ๊กดูรายละเอียด
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2. สอบเสนอหัวข้อ</td>
                        <td>
                            <a href="?page=2">
                                <button type="button" class="btn btn-block btn-dark">
                                    คลิ๊กดูรายละเอียด
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3. สอบความก้าวหน้าครั้งที่ 1</td>
                        <td>
                            <a href="?page=3">
                                <button type="button" class="btn btn-block btn-dark">
                                    คลิ๊กดูรายละเอียด
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4. สอบความก้าวหน้าครั้งที่ 2</td>
                        <td>
                            <a href="?page=4">
                                <button type="button" class="btn btn-block btn-dark">
                                    คลิ๊กดูรายละเอียด
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5. ส่งเล่มวิจัย โปสเตอร์</td>
                        <td>
                            <a href="?page=5">
                                <button type="button" class="btn btn-block btn-dark">
                                    คลิ๊กดูรายละเอียด
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
</div>