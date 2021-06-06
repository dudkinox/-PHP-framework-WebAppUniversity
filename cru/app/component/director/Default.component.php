<?php function dashboard($topic_dashboard, $text_dashboard)
{ ?>
    <div class="card-header">
        <h3 class="card-title">
            <?php echo $topic_dashboard; ?>
        </h3>
    </div>
    <div class="card-body">
        <div class="card card-primary card-outline">
            <div class="card-header bg-dark">
                <h5 class="card-title"><?php echo $text_dashboard; ?></h5>
                <div class="card-tools">
                    <a href="?page=1" class="btn btn-tool">
                        <button class="btn btn-primary">คลิ๊กเพื่อเริ่ม</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="card card-info">
    <?php
    $sql_dashboard = "SELECT * FROM status WHERE id_student = '" . $showid . "'";
    $result_dashboard = $conn->query($sql_dashboard);
    if ($result_dashboard->num_rows > 0) {
        $row_dashboard = $result_dashboard->fetch_assoc();
        $dashboard = $row_dashboard["Status"];
    ?>
        <div class="card-header" id="head_status">
            <h3 class="card-title">รายการขออนุมัติ</h3>
        </div>
        <div class="card-body">
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
                                <td><a href="approve/report?id=<?php echo $showid; ?>" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
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
        </div>
        <?php
        // query ความคิดเห้นอาจารย์
        $sql_comment_show = "SELECT * FROM comment WHERE ID_student = '" . $showid . "'";
        $result_comment_show = $conn->query($sql_comment_show);

        ?>
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">ความคิดเห็นจากอาจารย์</h3>
                </div>
                <div class="card-body p-0">
                    <?php if ($result_comment_show->num_rows > 0) { ?>
                        <?php
                        while ($row_comment_show = $result_comment_show->fetch_assoc()) {
                            $Name_teacher = $row_comment_show["Teacher_Name"];
                            $compose_textarea = $row_comment_show["Comment"];
                        }
                        ?>
                        <div class="mailbox-read-info">
                            <p>
                                <font color="#000000">อาจารย์ : <?php echo $Name_teacher; ?></font>
                            </p>
                        </div>
                        <div class="mailbox-read-message text-dark">
                            <?php echo $compose_textarea; ?>
                        </div>
                    <?php
                    } else { ?>
                        <div class="mailbox-read-info">
                            <p>
                                <font color="#000000">อาจารย์ : ยังไม่แสดง</font>
                            </p>
                        </div>
                        <div class="mailbox-read-message"></div>
                        <p>ยังไม่มีความเห็นจากอาจารย์</p>
                </div>
            <?php
                    } ?>
            </div>
        </div>
</div>
<?php
    } else {
        dashboard("หน้าแรก", 'กรุณาเริ่มด้วยการเลือกเมนู "เลือกที่ปรึกษา"');
    } ?>
</div>