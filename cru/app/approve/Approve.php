<?php
function Approve()
{
    $id_student = "'6111500143'";
    $topic = "'หุ่นยนต์แม่บ้าน'";
    // head
    echo '
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
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>    
    ';
    // main
    echo '
    <div class="card" data-aos="flip-left" data-aos-delay = "1000">
    <div class="card-header">
        <h3 class="card-title">รายการที่นักศึกษาขออนุมัติ</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ - สกุล</th>
                    <th>หัวข้อ</th>
                    <th>ไฟล์เอกสาร</th>
                    <th>อนุมัติ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td onclick = "click_comment('.$id_student.', '.$topic.')">6111500143</td>
                    <td>นาย ศุภณัฐ
                        ชินราช
                    </td>
                    <td>หุ่นยนต์แม่บ้าน</td>
                    <td><img src="https://img.icons8.com/dusk/30/000000/pdf.png"/></td>
                    <td><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch></td>
                </tr>
                <tr>
                    <td onclick = "click_comment('.$id_student.', '.$topic.')">6111500143</td>
                    <td>นาย ศุภณัฐ
                        ชินราช
                    </td>
                    <td>หุ่นยนต์แม่บ้าน</td>
                    <td><img src="https://img.icons8.com/dusk/30/000000/pdf.png"/></td>
                    <td><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch></td>
                </tr>
            </tbody>
        </table>
    </div>
</div> ';
// comment
    echo '
<section class="content">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">เสนอแนะความคิดเห็น</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <input class="form-control" placeholder="เลือกรหัสนักศึกษา" id = "id_student" />
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="หัวข้อ" id = "topic" />
            </div>
            <div class="form-group">
                <textarea id="compose-textarea" class="form-control" style="height: 300px">
                  <h1><u>เสนอแนะความคิดเห็นของอาจารย์</u></h1>
                  <h4>แก่นักศึกษา</h4>
                  <p>ข้อความตัวอย่าง ดั้งนี้</p>
                  <ul>
                    <li>แก้ไขคำนำ</li>
                    <li>แก้ชื่อหัวข้อ</li>
                    <li>ลดการใช้คำซ้ำ</li>
                    <li>เขียนไม่วกไปวนมา</li>
                  </ul>
                  <p>ตัวอย่างโดย</p>
                  <p>Admin ศุภณัฐ ชินราช นักศึกษาเตรียมสหกิจ วิทยาการคอมพิวเตอร์</p>
                </textarea>
            </div>
            <div class="form-group">
              <div class="btn btn-default btn-file">
                <i class="fas fa-paperclip"></i> เพิ่มไฟล์
                <input type="file" name="attachment">
              </div>
              <p class="help-block">Max. 32MB</p>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="float-right">
                <img src="https://img.icons8.com/dusk/50/000000/save.png"/>
            </div>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section>
    ';
    // comment script
    echo '
<script>
    function click_comment(id_student, topic){
      document.getElementById("id_student").value = id_student;
      document.getElementById("topic").value = topic;
    }
</script>
';
}
