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

        use Mpdf\Tag\H1;

        $sql_exam_dashboard = "SELECT * FROM exam 
                                WHERE teacher_name = '" . $showname . "' 
                                OR director_name = '" . $showname . "'
                                OR president_name  = '" . $showname . "' ";
        $result_exam_dashboard = $conn->query($sql_exam_dashboard);
        $url = 'http://whitehurricane.000webhostapp.com/service.php';
        $json = file_get_contents($url);
        $json = json_decode($json);
        $number = count($json);
        $round = 1;
        while ($row_deashboard = $result_exam_dashboard->fetch_assoc()) {
            for ($i = 0; $i < $number; $i++) {
                if ($row_deashboard["id_student"] == $json[$i]->no_std) {
                    $name_student = $json[$i]->Firstname . " " . $json[$i]->Lastname;
                    break;
                }
            }
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
        $url = 'http://whitehurricane.000webhostapp.com/service.php';
        $json = file_get_contents($url);
        $json = json_decode($json);
        $number = count($json);
        while ($row_deashboard = $result_exam_dashboard->fetch_assoc()) {
            for ($i = 0; $i < $number; $i++) {
                if ($row_deashboard["id_student"] == $json[$i]->no_std) {
                    $name_student = $json[$i]->Firstname . " " . $json[$i]->Lastname;
                    break;
                }
            }
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
        $url = 'http://whitehurricane.000webhostapp.com/service.php';
        $json = file_get_contents($url);
        $json = json_decode($json);
        $number = count($json);
        while ($row_deashboard = $result_exam_dashboard->fetch_assoc()) {
            for ($i = 0; $i < $number; $i++) {
                if ($row_deashboard["id_student"] == $json[$i]->no_std) {
                    $name_student = $json[$i]->Firstname . " " . $json[$i]->Lastname;
                    break;
                }
            }
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