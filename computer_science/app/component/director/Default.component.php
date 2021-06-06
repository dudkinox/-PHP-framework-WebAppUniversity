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
            <?php
            if ($page == "approve") {
                echo '<h3 class="card-title">รายการขออนุมัติ</h3>';
            } else if ($page == "exam_dashboard") {
                echo '<h3 class="card-title">สอบเสนอหัวข้อ</h3>';
            } else if ($page == "exam_progress1") {
                echo '<h3 class="card-title">สอบความก้าวหน้าครั้งที่ 1</h3>';
            } else if ($page == "exam_progress2") {
                echo '<h3 class="card-title">สอบความก้าวหน้าครั้งที่ 2</h3>';
            } else if ($page == "end_university") {
                echo '<h3 class="card-title">ส่งเล่มวิจัย และ โปสเตอร์</h3>';
            } else {
                echo '<h3 class="card-title">รายการขออนุมัติ</h3>';
            }
            ?>
        </div>
        <div class="card-body">
            <?php
            if ($page == "approve") {
                include 'component/director/topic/Table.php';
            } else if ($page == "exam_dashboard") {
                include 'component/director/exam/Table.php';
            } else if ($page == "exam_progress1") {
                include 'component/director/exam_progress1/Table.php';
            } else if ($page == "exam_dashboard2") {
                include 'component/director/exam_progress2/Table.php';
            } else if ($page == "end_university") {
                include 'component/director/end_univercity/Table.php';
            } else {
                include 'component/director/topic/Table.php';
            }
            ?>
        </div>

        <div class="col-md-12">
            <?php
            if ($page == "approve") {
                include 'component/director/topic/Comment.php';
            } else if ($page == "exam_dashboard") {
                include 'component/director/exam/Comment.php';
            } else if ($page == "exam_progress1") {
                include 'component/director/exam_progress1/Comment.php';
            } else if ($page == "exam_dashboard2") {
                include 'component/director/exam_progress2/Comment.php';
            } else {
                include 'component/director/topic/Comment.php';
            }
            ?>
        </div>
    <?php
    } else {
        dashboard("หน้าแรก", 'กรุณาเริ่มด้วยการเลือกเมนู "เลือกที่ปรึกษา"');
    } ?>
</div>