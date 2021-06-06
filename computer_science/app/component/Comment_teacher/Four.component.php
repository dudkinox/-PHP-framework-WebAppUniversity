<div class="card card-primary card-outline">
    <form action="component/API/index.php?comment=4" method="POST">
        <div class="card-header">
            <h3 class="card-title">เสนอแนะความคิดเห็น</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <input class="form-control" placeholder="เลือกรหัสนักศึกษา" id="id_student" name="id_student" readonly required />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="หัวข้อ" id="topic" name="topic" readonly required />
            </div>
            <div class="form-group">
                <textarea id="compose-textarea" name="compose_textarea" class="form-control" style="height: 300px">
                          <h1><u>แนะความคิดเห็นของอาจารย์</u></h1>
                          <h4>แก่นักศึกษา</h4>
                          <p>ข้อความตัวอย่าง ดั้งนี้</p>
                          <ul>
                            <li>แก้ไขคำนำ</li>
                            <li>แก้ชื่อหัวข้อ</li>
                            <li>ลดการใช้คำซ้ำ</li>
                            <li>เขียนไม่วกไปวนมา</li>
                          </ul>
                          <p>ตัวอย่างโดย</p>
                          <p>นักศึกษาเตรียมสหกิจ วิทยาการคอมพิวเตอร์</p>
                        </textarea>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-right">
                <button type="submit" class="btn btn-primary btn-block nav-link">ส่งกลับแก้ไข</button>
            </div>
            <div class="float-left">
                <button type="reset" onclick="close_comment()" class="btn btn-primary btn-block nav-link">ปิดหน้าต่าง</button>
            </div>
        </div>
    </form>
</div>