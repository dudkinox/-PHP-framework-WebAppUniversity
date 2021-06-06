<?php
// query ความคิดเห้นอาจารย์
$sql_comment_show = "SELECT * FROM comment WHERE ID_student = '" . $showid . "' AND level = 1";
$result_comment_show = $conn->query($sql_comment_show);
?>
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
            <div class="mailbox-read-message">
                <p>ยังไม่มีความเห็นจากอาจารย์</p>
            </div>
        <?php } ?>
    </div>
</div>