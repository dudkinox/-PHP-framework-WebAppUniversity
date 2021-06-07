<div class="card card-row card-primary">
    <div class="card-header">
        <h3 class="card-title">
            To Do : สอบเสนอหัวข้อ
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <img src="https://img.icons8.com/flat-round/20/000000/minus.png" />
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php

        $sql_exam_dashboard = "SELECT * FROM exam 
                                WHERE teacher_name = '" . $showname . "' 
                                OR director_name = '" . $showname . "'
                                OR president_name  = '" . $showname . "' ";
        $result_exam_dashboard = $conn->query($sql_exam_dashboard);
        $round = 1;
        while ($row_deashboard = $result_exam_dashboard->fetch_assoc()) {
            $sql_name_student1 = "SELECT * FROM Login 
                                            WHERE no_std = '" . $row_deashboard["id_student"] . "'";
            $result_name_student1 = $conn->query($sql_name_student1);
            $row_no_std1 = $result_name_student1->fetch_assoc();
            $name_student = $row_no_std1["pre"] . " " . $row_no_std1["Firstname"] . " " . $row_no_std1["Lastname"];
        ?>
            <div class="card card-primary card-outline text-dark">
                <a class="d-block w-100" data-toggle="collapse" href="#exam<?php echo $round; ?>">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <?php echo $name_student; ?>
                        </h4>
                    </div>
                </a>
                <div id="exam<?php echo $round; ?>" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <h1>
                            <?php echo $row_deashboard["date"]; ?>
                        </h1>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="card card-row card-primary">
    <div class="card-header">
        <h3 class="card-title">
            To Do : สอบก้าวหน้าครั้งที่ 1
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <img src="https://img.icons8.com/flat-round/20/000000/minus.png" />
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php
        $sql_exam_dashboard = "SELECT * FROM exam_progress 
                                WHERE teacher_name = '" . $showname . "' 
                                OR director_name = '" . $showname . "'
                                OR president_name  = '" . $showname . "' ";
        $result_exam_dashboard = $conn->query($sql_exam_dashboard);
        while ($row_deashboard = $result_exam_dashboard->fetch_assoc()) {

            $sql_name_student2 = "SELECT * FROM Login 
                                    WHERE no_std = '" . $row_deashboard["id_student"] . "'";
            $result_name_student2 = $conn->query($sql_name_student2);
            $row_no_std2 = $result_name_student2->fetch_assoc();
            $name_student = $row_no_std2["pre"] . " " . $row_no_std2["Firstname"] . " " . $row_no_std2["Lastname"];
        ?>
            <div class="card card-primary card-outline text-dark">
                <a class="d-block w-100" data-toggle="collapse" href="#exam_progress<?php echo $round; ?>">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <?php echo $name_student; ?>
                        </h4>
                    </div>
                </a>
                <div id="exam_progress<?php echo $round; ?>" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <h1>
                            <?php echo $row_deashboard["date"]; ?>
                            <h1>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="card card-row card-primary">
    <div class="card-header">
        <h3 class="card-title">
            To Do : สอบก้าวหน้าครั้งที่ 2
        </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <img src="https://img.icons8.com/flat-round/20/000000/minus.png" />
            </button>
        </div>
    </div>
    <div class="card-body">
        <?php
        $sql_exam_dashboard = "SELECT * FROM exam_progress2 
                                WHERE teacher_name = '" . $showname . "' 
                                OR director_name = '" . $showname . "'
                                OR president_name  = '" . $showname . "' ";
        $result_exam_dashboard = $conn->query($sql_exam_dashboard);

        while ($row_deashboard = $result_exam_dashboard->fetch_assoc()) {
            $sql_name_student3 = "SELECT * FROM Login 
                WHERE no_std = '" . $row_deashboard["id_student"] . "'";
            $result_name_student3 = $conn->query($sql_name_student3);
            $row_no_std3 = $result_name_student3->fetch_assoc();
            $name_student = $row_no_std3["pre"] . " " . $row_no_std3["Firstname"] . " " . $row_no_std3["Lastname"];
        ?>
            <div class="card card-primary card-outline text-dark">
                <a class="d-block w-100" data-toggle="collapse" href="#exam_progress2<?php echo $round; ?>">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <?php echo $name_student; ?>
                        </h4>
                    </div>
                </a>
                <div id="exam_progress<2?php echo $round; ?>" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <h1>
                            <?php echo $row_deashboard["date"]; ?>
                        </h1>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>