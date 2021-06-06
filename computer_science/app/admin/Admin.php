<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add user</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row text-center">
            <!-- ปรับส่วนบนให้มีเนื้อที่ตรงกลาง -->
            <div class="col-lg-1 col-6"></div>
            <!-- ปรับส่วนบนให้มีเนื้อที่ตรงกลาง -->
            <div class="col-lg-3 col-6" data-aos="flip-left" data-aos-delay="1000">
                <div class="small-box bg-warning" data-tilt data-tilt-max="30" data-tilt-glare data-tilt-max-glare="0.55">
                    <div class="inner">
                        <h3>44</h3>
                        <h2>STUDENT</h2>
                    </div>
                    <div class="icon">
                        <img src="https://img.icons8.com/officel/30/000000/person-male.png" />
                    </div>
                    <a href="#add_student" class="small-box-footer">More info <img src="https://img.icons8.com/dusk/20/000000/low-priority.png" /></a>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="flip-left" data-aos-delay="1500">
                <!-- small box -->
                <div class="small-box bg-warning" data-tilt data-tilt-max="30" data-tilt-glare data-tilt-max-glare="0.55">
                    <div class="inner">
                        <h3>44</h3>
                        <h2>TEACHER</h2>
                    </div>
                    <div class="icon">
                        <img src="https://img.icons8.com/officel/30/000000/person-male.png" />
                    </div>
                    <a href="#add_student" class="small-box-footer">More info <img src="https://img.icons8.com/dusk/20/000000/low-priority.png" /></a>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="flip-left" data-aos-delay="2000">
                <!-- small box -->
                <div class="small-box bg-warning" data-tilt data-tilt-max="30" data-tilt-glare data-tilt-max-glare="0.55">
                    <div class="inner">
                        <h3>1</h3>
                        <h2>ADMIN</h2>
                    </div>
                    <div class="icon">
                        <img src="https://img.icons8.com/officel/30/000000/person-male.png" />
                    </div>
                    <a href="#add_student" class="small-box-footer">More info <img src="https://img.icons8.com/dusk/20/000000/low-priority.png" /></a>
                </div>
            </div>
        </div>
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="2500">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><img src="https://img.icons8.com/dusk/40/000000/ms-excel.png"> FORM Excel</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="admin/api.php?excel=1" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group" align="center">
                                <label>รูปแบบตารางนำเข้า</label> <br>
                                <img style="width: 1000px;" src="admin/excel/exceltable.jpg" alt="">
                            </div>
                            <div class="form-group">
                                <label>เลือกประเภทผู้ใช้</label>
                                <select class="form-control" name="type">
                                    <option selected disabled>เลือกประเภทผู้ใช้</option>
                                    <option value="student">นักศึกษา</option>
                                    <option value="teacher">อาจารย์</option>
                                    <option value="admin">admin</option>
                                </select>
                                <label for="file_excel">นำเข้าไฟล์ เอ็กเซล</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file_excel" name="file_excel" required="">
                                        <label class="custom-file-label" for="file_excel">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group text-center mt-3">
                                    <button name="submit" id="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" id="add_student">
                    <h3 class="card-title">FORM Manual</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="admin/api.php?insert=1" role="form">
                        <div class="form-group">
                            <label for="name">เลขประจำตัวนักศึกษา</label>
                            <input type="text" class="form-control" id="id_student" name="id_student" placeholder="Enter id" required />
                        </div>
                        <div class="form-group">
                            <label for="name">ชื่อจริง - นามสกุล</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Fullname" required />
                        </div>
                        <div class="form-group">
                            <label for="email">อีเมล</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required />
                        </div>
                        <div class="form-group">
                            <label for="password">รหัสผ่าน</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" required />
                        </div>
                        <div class="form-group">
                            <label for="tel">เบอร์โทรติดต่อ</label>
                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter TEL" required />
                        </div>
                        <div class="form-group">
                            <label for="address">ทีอยู่</label>
                            <input type="address" class="form-control" id="address" name="address" placeholder="Enter Address" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" name="type" id="type" style="width: 100%;">
                                <option selected disabled>เลือกประเภทผู้ใช้</option>
                                <option id="student" value="student">นักศึกษา</option>
                                <option id="teacher" value="teacher">อาจารย์</option>
                                <option id="admin" value="admin">admin</option>
                            </select>
                        </div>
                        <!-- รองรับ แก้ไข -->
                        <div class="form-group" style="display: none;">
                            <input type="text" id="edit_hidden" name="edit_hidden" readonly />
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">เพิ่มผู้ใช้</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">รายชื่อนักศึกษา</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>เลขประจำตัวนักศึกษา</th>
                                <th>ชื่อจริง - นามสกุล</th>
                                <th>อีเมล</th>
                                <th>รหัสผ่าน</th>
                                <th>เบอร์โทรติดต่อ</th>
                                <th>ทีอยู่</th>
                                <th>ประเภทผู้ใช้</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_table_user = "SELECT * FROM login";
                            $result_table_user = $conn->query($sql_table_user);
                            $i = 1;
                            while ($row_table_user = $result_table_user->fetch_assoc()) {
                                // script
                                echo '
                                <script>
                                    function edit' . $i . '(id_student,
                                                            name,
                                                            email,
                                                            password,
                                                            TEL,
                                                            Address,
                                                            Type){
                                        document.getElementById("id_student").value = id_student;
                                        document.getElementById("name").value = name;
                                        document.getElementById("email").value = email;
                                        document.getElementById("password").value = password;
                                        document.getElementById("tel").value = TEL;
                                        document.getElementById("address").value = Address;
                                        document.getElementById(Type).selected = Type;
                                        document.getElementById("edit_hidden").value = 1;
                                    }
                                </script>
                                ';
                                // data
                                $id_student = "'" . $row_table_user["id_student"] . "'";
                                $name = "'" . $row_table_user["name"] . "'";
                                $email = "'" . $row_table_user["email"] . "'";
                                $password = "'" . $row_table_user["password"] . "'";
                                $TEL = "'" . $row_table_user["TEL"] . "'";
                                $Address = "'" . $row_table_user["Address"] . "'";
                                $Type = "'" . $row_table_user["Type"] . "'";
                                echo '
                            <tr>
                                <td style = "cursor: pointer;" onclick = "edit' . $i . '(' . $id_student . ',
                                ' . $name . ',
                                ' . $email . ',
                                ' . $password . ',
                                ' . $TEL . ',
                                ' . $Address . ',
                                ' . $Type . ')
                                ">' . $row_table_user["id_student"] . '</td>
                                <td>' . $row_table_user["name"] . '</td>
                                <td>' . $row_table_user["email"] . '</td>
                                <td>' . $row_table_user["password"] . '</td>
                                <td>' . $row_table_user["TEL"] . '</td>
                                <td>' . $row_table_user["Address"] . '</td>
                                <td>' . $row_table_user["Type"] . '</td>
                                <td><a href = "admin/api.php?delete=1&key=' . $row_table_user["id_student"] . '"><img src="https://img.icons8.com/bubbles/50/000000/delete-forever.png"/></a></td>
                            </tr>';
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>