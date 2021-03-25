<!-- import -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--  head -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
        <h1 class="m-0 text-white">Profile / แจ้งปัญหาเว็บไซต์</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="#">
              Option
            </a>
          </li>
          <li class="breadcrumb-item active">ตั้งค่า</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--  main -->
<div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <?php
          // profile
          $sql_img = "SELECT profile_img FROM image WHERE email = '" . $showemail . "'";
          $result_img = $conn->query($sql_img);
          if ($result_img->num_rows > 0) {
            $row_img = $result_img->fetch_assoc();
            $img = $row_img["profile_img"];
          } else {
            $img = "img/defult.png";
          }
          echo '
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="H1" src="' . $img . '" alt="User profile picture" />
              </div>
              <h3 class="profile-username text-center">' . $showid . '</h3>
              <p class="text-muted text-center">' . $showname . ' </p>
              <a id="profile" href="#settings" data-toggle="tab" class="btn btn-primary btn-block nav-link"><b>Edit Profile</b></a>
            </div>
          </div>';
          ?>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">รายการปัญหาที่แจ้ง</h3>
            </div>
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Education</strong>
              <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
              </p>
            </div>
          </div>
          <!-- รายงานปัญหา -->
          <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="color:black">รายงานปัญหา</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">ปัญหาที่พบ:</label>
                      <textarea class="form-control" id="message-text"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">

                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title">

                        Dashboard
                      </h3>
                    </div>
                    <div class="card-body pad table-responsive">
                      <table class="table table-bordered text-center">
                        <tr>
                          <th>ที่ปรึกษาโปรเจค </th>
                          <th>กรรมการคุมสอบ </th>
                          <th>ประธานหลักสูตร </th>
                          <th>อนุมัติเสนอหัวข้อ </th>
                          <th>อนุมัติขอสอบ </th>
                          <th>สถานะโปรเจค </th>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-default">อ.นิยม สุทธิหลวง</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default">อ.นิยม สุทธิหลวง</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default">อ.จันทรัตน์ กิ่งแสง</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default">อนุมัติ</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default">อนุมัติ</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default">ผ่าน</button>
                          </td>
                        </tr>

                      </table>
                    </div>
                    <!-- /.card -->
                  </div>

                </div>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <?php
                //การทำงาน login เพื่อเข้าหน้าแก้ไขข้อมูล
                if (isset($_POST["submit_edit"])) {
                  $ID = $_SESSION["account_login"];
                  $Password = md5($_POST["loginpassword"]);
                  if ($ID == $_POST["loginemail"] && $password == $Password) {
                    echo '
                    <div class="tab-pane" id="settings">
                      <form action="component/API/index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">เลขประจำตัวนักศึกษา</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_student" name="id_student" placeholder="เลขประจำตัวนักศึกษา" value="' . $showid . '" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="name_student" class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name_student" name="name_student" placeholder="ชื่อ-นามสกุล" value="' . $showname . '" required />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email_student" class="col-sm-2 col-form-label">อีเมล</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email_student" name="email_student" placeholder="อีเมล" value="' . $showemail . '" required />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="address_student" class="col-sm-2 col-form-label">ที่อยู่ติดต่อ</label>
                          <div class="col-sm-10">
                            <textarea class="text col-12" id="address_student" name="address_student" placeholder="ที่อยู่ติดต่อ">' . $showAddress . '</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="tel_student" class="col-sm-2 col-form-label">เบอร์โทรติดต่อ</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="tel_student" name="tel_student" placeholder="เบอร์โทรติดต่อ" value="' . $showTEL . '" required />
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger" name="submit">ยืนยัน</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  ';
                  } else {
                    unset($_POST["submit_edit"]);
                    echo '
                    <!-- แสดงผลลัพธ์ รหัสผิด -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-dark">
                            <h5 class="modal-title" id="exampleModalLongTitle"><img src="https://img.icons8.com/plasticine/60/000000/hazard-warning-flasher.png" />แจ้งเตือน</h5>
                          </div>
                          <div class="modal-body text-dark">
                            กรุณากรอกรหัสผ่านให้ถูกต้อง
                          </div>
                          <div class="modal-footer">
                            <a href = "/app/">
                              <button type="button" class="btn btn-secondary">ตกลง</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      $("document").ready(function() {
                        $("#exampleModalCenter").modal("show");
                      })
                    </script>
                    ';
                  }
                } else {
                  //login ก่อนแก้ไข
                  echo '
                  <div class="tab-pane" id="settings">
                    <div class="card card-info">
                      <div class="card-header">
                        <h3 class="card-title">login ก่อนทำการแก้ไข</h3>
                      </div>
                      <form class="form-horizontal" action="';
                  $_SERVER["PHP_SELF"];
                  echo '" method="POST">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="loginemail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="loginemail" name="loginemail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="loginpassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Password">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-info" name="submit_edit">Sign in</button>
                          <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div>
                      </form>
                    </div>
                  </div>
                ';
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>