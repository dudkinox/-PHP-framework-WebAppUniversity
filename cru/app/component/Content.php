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
                  <div class="post clearfix">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="https://img.icons8.com/plasticine/100/000000/person-male.png" alt="User Image">
                      <span class="username">
                        <a href="#">นักศึกษาแจ้งปัญหา</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Sent you a message - 3 days ago</span>
                    </div>
                    <p>
                      ทดสอบข้อความ
                    </p>

                    <form class="form-horizontal">
                      <div class="input-group input-group-sm mb-0">
                        <input class="form-control form-control-sm" placeholder="แสดงความคิดเห็น">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-danger">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="https://img.icons8.com/plasticine/100/000000/person-male.png" alt="User Image">
                      <span class="username">
                        <a href="#">Adam Jones</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Posted 5 photos - 5 days ago</span>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-5">
                        <img class="img-fluid" src="../bootstrap/dist/img/photo1.png" alt="Photo">
                      </div>
                    </div>
                    <p>
                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                      <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                      <span class="float-right">
                        <a href="#" class="link-black text-sm">
                          <i class="far fa-comments mr-1"></i> Comments (5)
                        </a>
                      </span>
                    </p>
                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                  </div>
                </div>
                <div class="tab-pane" id="timeline">
                  <div class="timeline timeline-inverse">
                    <div class="time-label">
                      <span class="bg-danger">
                        10 Feb. 2014
                      </span>
                    </div>
                    <div>
                      <i class="fas fa-envelope bg-primary"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 12:05</span>
                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-primary btn-sm">Read more</a>
                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div>
                      <i class="fas fa-user bg-info"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </div>
                    <div>
                      <i class="fas fa-comments bg-warning"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                        </div>
                      </div>
                    </div>
                    <div class="time-label">
                      <span class="bg-success">
                        3 Jan. 2014
                      </span>
                    </div>
                    <div>
                      <i class="fas fa-camera bg-purple"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                        </div>
                      </div>
                    </div>
                    <div>
                      <i class="far fa-clock bg-gray"></i>
                    </div>
                  </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <?php
                //การทำงาน login เพื่อเข้าหน้าแก้ไขข้อมูล
                if (isset($_POST["submit_edit"])) {
                  $ID = $_SESSION["account_login"];
                  $Password = $_SESSION["password_login"];
                  if ($ID == $_POST["loginemail"] && $Password == $_POST["loginpassword"]) {
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