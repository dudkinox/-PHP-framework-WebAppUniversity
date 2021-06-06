<div class="card">
    <div class="card-header bg-warning">
        <h3 class="card-title">Project&poster</h3>
    </div>
    <div class="card-body text-center text-dark">
        <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ - สกุล</th>
                    <th>เล่มวิจัย</th>
                    <th>โปสเตอร์</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_consultant = "SELECT * FROM end_final WHERE teacher = '" . $showname . "'";
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
                        $sql_topic = "SELECT * FROM end_final WHERE id_student = '" . $row_consultant["id_student"] . "'";
                        $result_topic = $conn->query($sql_topic);
                        $row_topic = $result_topic->fetch_assoc();
                        echo '
                            <tr>
                              <td>' . $round_consultant . '</td>
                              <td>' . $row_consultant["id_student"] . '</td>
                              <td>' . $name_student . '</td>
                              <td><a href="fileexam/' . $row_consultant["final"] . '" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                              <td><a href="fileexam/' . $row_consultant["poster_final"] . '" target="_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png"></a></td>
                            </tr>';
                        $round_consultant++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>