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
            <div class="text-center">
                <img class="H1" src="<?php echo $img; ?>" alt="User profile picture" />
            </div>
            <h3 class="profile-username text-center"><?php echo $showid; ?></h3>
            <p class="text-muted text-center"><?php echo $showname; ?></p>
            <p class="text-muted text-center"><button type="button" class="btn btn-block btn-danger" disabled><?php echo $status; ?></button></p>
            <a id="profile" href="https://whitehurricane.000webhostapp.com/login/student_page.php" data-toggle="tab" class="btn btn-primary btn-block nav-link"><b>แก้ไขประวัติส่วนตัว</b></a>
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
        case "ยังไม่ดำเนินการสอบเสนอหัวข้อ":
            $button_status = "คลิ๊กเพื่อเริ่ม";
            $button_color = "danger";
            break;
    }
    if ($type_account == "student") {
    ?>
        <div class="card card-primary text-center" data-aos="flip-right" data-aos-delay="1000">
            <div class="card-header" id="head_status">
                <h3 class="card-title">ทำตามขั้นตอนด้านล่างนี้</h3>
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
                            <?php } else { ?>
                                <img src="https://img.icons8.com/dusk/30/000000/lock-2.png" />
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>3. สอบความก้าวหน้า</td>
                        <td><img src="https://img.icons8.com/dusk/30/000000/lock-2.png" /></td>
                    </tr>
                    <tr>
                        <td>4. สอบจบ</td>
                        <td><img src="https://img.icons8.com/dusk/30/000000/lock-2.png" /></td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="card card-primary text-center" data-aos="flip-right" data-aos-delay="1000">
            <div class="card-header">
                <h3 class="card-title">ทำตามขั้นตอนด้านล่างนี้</h3>
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
                            <button type="button" class="btn btn-block btn-dark">
                                คลิ๊กดูรายละเอียด
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3. สอบความก้าวหน้า</td>
                        <td>
                            <button type="button" class="btn btn-block btn-dark">
                                คลิ๊กดูรายละเอียด
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4. สอบจบ</td>
                        <td>
                            <button type="button" class="btn btn-block btn-dark">
                                คลิ๊กดูรายละเอียด
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
</div>