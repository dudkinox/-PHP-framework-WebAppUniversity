<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <h1>เลือกกรรมการคุมสอบ</h1>
            </div>
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Director</a></li>
                    <li class="breadcrumb-item active">Form</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">

        <div class="card card-default" data-aos="fade-up-left" data-aos-delay="1000">
            <div class="card-header bg-warning">
                <h3 class="card-title">เลือกกรรมการที่คุมสอบ</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="director/API.php" method="POST">
                            <div class="form-group">
                                <label>รายชื่อ เลือกได้ 3 ท่าน</label>
                                <select class="duallistbox" multiple="multiple" name="select_teacher[]" required>
                                    <?php
                                    $sql_teacher = "SELECT Name FROM teacher";
                                    $result_teacher = $conn->query($sql_teacher);
                                    if ($result_teacher->num_rows > 0) {
                                        while ($row_teacher = $result_teacher->fetch_assoc()) {
                                            echo '
                                        <option value = "' . $row_teacher["Name"] . '">' . $row_teacher["Name"] . '</option>
                                        ';
                                        }
                                    } else {
                                        echo '
                                    <option disable>ไม่มีข้อมูลอาจารย์</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary col-4" type="submit">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>