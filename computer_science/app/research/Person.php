<?php
require("../Database/index.php");
// $sql_teacher_limit = "SELECT COUNT(ID_student) AS count_yes,Name_teacher FROM Topic WHERE Status = 'อนุมัติ'";
$sql_teacher = "SELECT Name, about, address,phone, image FROM teacher ";
$limit = $conn->query($sql_teacher_limit);
$loop_teacher = $conn->query($sql_teacher);
// head
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
        <h1 class="m-0 text-dark">หัวข้อวิจัย</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="#">
              Research topic
            </a>
          </li>
          <li class="breadcrumb-item active">หัวข้อวิจัย</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
  <h1>เลือกอาจารย์ที่ปรึกษา</h1>
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">
        <?php
        $i = 0;
        // profile teacher
        while ($row = $loop_teacher->fetch_assoc()) {
          // main
          echo '
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
          <div class="card bg-light">
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>' . $row["Name"] . '</b></h2>
                  <p class="text-muted text-sm"><b>เชี่ยวชาญ: </b>' . $row["about"] . '</p>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address:' . $row["address"] . '</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:' . $row["phone"] . '</li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="' . $row["image"] . '" alt="" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            ';
          // $row_limit = $limit->fetch_assoc();
          $limit_count =  0;
          if ($limit_count > 5) {
            echo '
                  <div class="card-footer">
                    <div class="text-right">
                      <a href="#" class="btn btn-sm bg-teal">
                        ' . $limit_count . '/5
                      </a>
                      <a href="?research=1&name=' . $row[" Name"] . '" class="btn btn-sm btn-primary disabled">
                        <i class="fas fa-user">เลือกที่ปรึกษา</i>
                        </a>
                    </div>
                </div>';
          } else {
            echo '
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                          ' . $limit_count . '/5
                        </a>
                        <a href = "?research=1&name=' . $row["Name"] . '" class="btn btn-sm btn-primary">
                            <i class="fas fa-user"></i> เลือกที่ปรึกษา
                        </a>
                    </div>
                </div>';
          }
          echo '
          </div>
        </div>
        ';
          $i++;
        } ?>

      </div>
    </div>
    <div class="card-footer">
      <nav aria-label="Contacts Page Navigation">
        <ul class="pagination justify-content-center m-0">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
        </ul>
      </nav>
    </div>
  </div>

</section>