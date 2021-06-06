<?php $page = isset($_GET["page"]) ? $_GET["page"] : ''; ?>
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
                        } else if ($page == 3) {
                            include 'File_exam_topic/File_exam_topic.php';
                        } else if ($page ==  4) {
                            include 'File_exam_topic/File_exam_topic.php';
                        } else if ($page == 5) {
                            include 'File_exam_topic/File_exam_topic.php';
                        } else if ($page == "edit" && $option == "adviser") {
                            $teacher = isset($_GET["teacher"]) ? $_GET["teacher"] : '';
                            $_SESSION["name_teacher"] = $teacher;
                            echo '<script>window.location.href = "research/?option=edit&teacher=' . $teacher . '";</script>';
                        } else if ($page == "edit" && $option == "exam4") {
                            include 'File_exam_topic/File_exam_topic.php';
                        } else if ($page == "edit" && $option == "end_project") {
                            include 'File_exam_topic/File_exam_topic.php';
                        } else {
                            include 'component/director/Default.component.php';
                        }
                    } else if ($type_account == "teacher") {
                        if ($page == 1) {
                            include 'component/Table_teacher/One.component.php';
                        } else if ($page == 2) {
                            include 'component/Table_teacher/Two.component.php';
                        } else if ($page == 3) {
                            include 'component/Table_teacher/Three.component.php';
                        } else if ($page == 4) {
                            include 'component/Table_teacher/Four.component.php';
                        } else if ($page == 5) {
                            include 'component/Table_teacher/Five.component.php';
                        } else {
                            include 'component/Table_teacher/Deashboard.component.php';
                        }
                    } ?>
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
                    <?php
                    if ($page == 1) {
                        include 'component/Comment_teacher/One.component.php';
                    } else if ($page == 2) {
                        include 'component/Comment_teacher/Two.component.php';
                    } else if ($page == 3) {
                        include 'component/Comment_teacher/Three.component.php';
                    } else if ($page == 4) {
                        include 'component/Comment_teacher/Four.component.php';
                    } else if ($page == 5) {
                        include 'component/Comment_teacher/Five.component.php';
                    } else {
                        //include 'component/Comment_teacher/One.component.php';
                    }
                    ?>
                </div>
            </div>
        </div>
</div>

<script src="js/comment.js"></script>
<?php } ?>