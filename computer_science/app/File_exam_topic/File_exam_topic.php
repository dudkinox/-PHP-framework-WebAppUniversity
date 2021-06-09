<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="card card-primary">
    <div class="card-header text-dark">
        <?php
        $page = isset($_GET["page"]) ? $_GET["page"] : '';
        $option = isset($_GET["option"]) ? $_GET["option"] : '';
        if ($page == 2) {
        ?>
            <h3>ส่งเอกสารขอสอบเสนอหัวข้อ</h3>
        <?php } else if ($page == 3) { ?>
            <h3>สอบความก้าวหน้าครั้งที่ 1 </h3>
        <?php } else if ($page == 4) { ?>
            <h3>สอบความก้าวหน้าครั้งที่ 2 </h3>
        <?php } else if ($page == 5) { ?>
            <h3>ส่งเล่มวิจัย และ โปสเตอร์</h3>
        <?php } else if ($page == "edit" && $option != "end_project") { ?>
            <h3>สอบความก้าวหน้าครั้งที่ 2 (เเก้ไข) </h3>
        <?php } else if ($page == "edit" && $option == "end_project") { ?>
            <h3>ส่งเล่มวิจัย และ โปสเตอร์ (เเก้ไข) </h3>
        <?php } ?>
    </div>
    <?php
    require("../Database/index.php");
    $get_teacher_name = 'SELECT Name_teacher FROM Topic_status 
                        WHERE id_student="' . $showid . '" AND Status="อนุมัติแล้ว"';
    $result_teacher_name = $conn->query($get_teacher_name);
    $row_teacher_name = $result_teacher_name->fetch_assoc();
    $show_teacher_name = $row_teacher_name["Name_teacher"]; // ที่ปรึกษา

    if ($page == 2) {
        $director_show_name = isset($_GET["director_select"]) ? $_GET["director_select"] : ''; //กรรมการ
    } else {
        $sql_show_name = "SELECT director_name FROM exam WHERE id_student = '" . $showid . "'";
        $result_show_name =  $conn->query($sql_show_name);
        $row_show_name = $result_show_name->fetch_assoc();
        $director_show_name = $row_show_name["director_name"];
    }

    $sql_position = "SELECT * FROM Group_teacher WHERE Position = '1'";
    $result_position = $conn->query($sql_position);
    $row_position = $result_position->fetch_assoc();
    $president_show_name = $row_position["Name"]; //ประธานหลักสูตร

    $sql_name = "SELECT * FROM Group_teacher";
    $result_name = $conn->query($sql_name);
    while ($row_name = $result_name->fetch_assoc()) {
        if ($row_name["Name"] == $show_teacher_name) {
            $image_teacher_name = 'http://whitehurricane.000webhostapp.com/assets/img/img_teacher/' . $row_name["profile"] . '';
        }
        if ($row_name["Name"] == $director_show_name) {
            $image_director_name = 'http://whitehurricane.000webhostapp.com/assets/img/img_teacher/' . $row_name["profile"] . '';
        }
        if ($row_name["Name"] == $president_show_name) {
            $image_president_name = 'http://whitehurricane.000webhostapp.com/assets/img/img_teacher/' . $row_name["profile"] . '';
        }
    }
    ?>
    <?php if ($page == 2) { ?>
        <form action="File_exam_topic/API/insert.php?api=2" method="POST" enctype="multipart/form-data">
        <?php } else if ($page == 3) { ?>
            <form action="File_exam_topic/API/insert.php?api=3" method="POST" enctype="multipart/form-data">
            <?php } else if ($page == 4) { ?>
                <form action="File_exam_topic/API/insert.php?api=4" method="POST" enctype="multipart/form-data">
                <?php } else if ($page == 5) { ?>
                    <form action="File_exam_topic/API/insert.php?api=5" method="POST" enctype="multipart/form-data">
                    <?php } else if ($page == "edit" && $option != "end_project") { ?>
                        <form action="File_exam_topic/API/insert.php?api=edit" method="POST" enctype="multipart/form-data">
                        <?php } else if ($page == "edit" && $option == "end_project") { ?>
                            <form action="File_exam_topic/API/insert.php?api=edit&option=end_project" method="POST" enctype="multipart/form-data">
                            <?php } ?>
                            <div class="text-center">
                                <div class="row" style="padding: 25px;">
                                    <?php if ($page != 5 && $page != "edit") { ?>
                                        <div class="card col-4">
                                            <img class="card-img-top" src="<?php echo $image_teacher_name; ?>" alt="<?php echo $show_teacher_name; ?>">
                                            <div class="card-body text-dark" id="consult" name="consult">
                                                <h5>ที่ปรึกษา</h5>
                                                <p class="card-text"><?php echo $show_teacher_name; ?></p>
                                            </div>
                                            <input type="text" style="display: none;" id="show_teacher_name" name="show_teacher_name" value="<?php echo $show_teacher_name; ?>" readonly>
                                        </div>
                                        <div class="card col-4">
                                            <img class=" card-img-top" src="<?php echo $image_director_name; ?>" alt="<?php echo $director_show_name; ?>">
                                            <div class="card-body text-dark" id="director" name="director">
                                                <h5>กรรมการ</h5>
                                                <p class="card-text"><?php echo $director_show_name; ?></p>
                                            </div>
                                            <input type="text" style="display: none;" id="director_show_name" name="director_show_name" value="<?php echo $director_show_name; ?>" readonly>
                                        </div>
                                        <div class="card col-4">
                                            <img class="card-img-top" src="<?php echo $image_president_name; ?>" alt="<?php echo $president_show_name; ?>">
                                            <div class="card-body text-dark" id="president" name="president">
                                                <h5>ประธานหลักสูตร</h5>
                                                <p class="card-text"><?php echo $president_show_name; ?></p>
                                            </div>
                                            <input type="text" style="display: none;" id="president_show_name" name="president_show_name" value="<?php echo $president_show_name; ?>" readonly>
                                        </div>
                                    <?php } else { ?>
                                        <div class="card col-4"></div>
                                        <div class="card col-4">
                                            <img class="card-img-top" src="<?php echo $image_teacher_name; ?>" alt="<?php echo $show_teacher_name; ?>">
                                            <div class="card-body text-dark" id="consult" name="consult">
                                                <h5>ที่ปรึกษา</h5>
                                                <p class="card-text"><?php echo $show_teacher_name; ?></p>
                                            </div>
                                            <input type="text" style="display: none;" id="show_teacher_name" name="show_teacher_name" value="<?php echo $show_teacher_name; ?>" readonly>
                                        </div>
                                        <div class="card col-4"></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group  text-center">
                                <label for="file">อัพโหลดไฟล์เอกสาร</label>
                                <div class="input-group container">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input text-dark" id="file" name="file" required>
                                        <label class="custom-file-label" for="file">เลือกไฟล์</label>
                                    </div>
                                </div>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

                            <!--  เรียกใช้ JQuery -->
                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

                            <!--  เรียกใช้ Font Awesome-->
                            <script src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>

                            <!--  เรียกใช้  picker_date.js สำหรับสร้างตัวเลือก ปฎิทิน -->
                            <script src="https://รับเขียนโปรแกรม.net/picker_date/picker_date.js"></script>
                            <?php if ($page == 5) { ?>
                                <div class="form-group  text-center">
                                    <label for="file_poster">อัพโหลดโปสเตอร์</label>
                                    <div class="input-group container">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input text-dark" id="file_poster" name="file_poster" required>
                                            <label class="custom-file-label" for="file_poster">เลือกไฟล์</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  text-center">
                                    <label for="file_poster">อัพโหลดเปเปอร์</label>
                                    <div class="input-group container">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input text-dark" id="file_poster" name="file_poster" required>
                                            <label class="custom-file-label" for="file_poster">เลือกไฟล์</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } else if ($page == "edit" && $option == "end_project") { ?>
                                <div class="form-group  text-center">
                                    <label for="file_poster">อัพโหลดโปสเตอร์</label>
                                    <div class="input-group container">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input text-dark" id="file_poster" name="file_poster" required>
                                            <label class="custom-file-label" for="file_poster">เลือกไฟล์</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  text-center">
                                    <label for="file_poster">อัพโหลดเปเปอร์</label>
                                    <div class="input-group container">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input text-dark" id="file_poster" name="file_poster" required>
                                            <label class="custom-file-label" for="file_poster">เลือกไฟล์</label>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="container">
                                    <div class="form-group text-center">
                                        <label>เลือกวันที่</label>
                                        <!--  สร้าง textbox สำหรับสร้างตัวเลือก ปฎิทิน โดยมี id มีค่าเป็น my_date  -->
                                        <input id="my_date" class="form-control" id="date" name="date" required>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-group text-center">
                                <div class="senddocument">
                                    <button type="submit" name="enter">ตกลง</button>
                                </div>
                            </div>
                            </form>
                            <script>
                                //กำหนดให้ textbox ที่มี id เท่ากับ my_date เป็นตัวเลือกแบบ ปฎิทิน
                                picker_date(document.getElementById("my_date"), {
                                    year_range: "-12:+10"
                                });
                                /*{year_range:"-12:+10"} คือ กำหนดตัวเลือกปฎิทินให้ แสดงปี ย้อนหลัง 12 ปี และ ไปข้างหน้า 10 ปี*/
                            </script>
</div>