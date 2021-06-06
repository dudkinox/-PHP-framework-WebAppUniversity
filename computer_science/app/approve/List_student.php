<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <h1 class="m-0 text-dark">หัวข้อวิจัยที่ขออนุมัติ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Approve
                        </a>
                    </li>
                    <li class="breadcrumb-item active">อนุมัติ</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card" data-aos="flip-left" data-aos-delay="1000">
    <div class="card-header">
        <h3 class="card-title">รายการที่นักศึกษาขออนุมัติ</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
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
                        echo '
                <tr>
                    <td>' . $row_data["NameProjectTH"] . '</td>
                    <td>' . $showname . '</td>
                    <td>' . $row_data["Name_teacher"] . '</td>
                    <td><a href = "approve/report?id=' . $showid . '" target = "_blank"><img src="https://img.icons8.com/dusk/30/000000/pdf.png" /></a></td>
                    <td>
                        <span id="approve_status">
                            <p>' . $row_status["Status"] . '</p>
                        </span>
                    </td>
                </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">ความคิดเห็นจากอาจารย์</h3>

            <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <p></p>
                <font color="#000000">ชื่ออาจารย์</font>
                </p>
            </div>
            <div class="mailbox-read-message">
                <p>ยังไม่มีความเห็นจากอาจารย์</p>
            </div>
        </div>
    </div>
</div>