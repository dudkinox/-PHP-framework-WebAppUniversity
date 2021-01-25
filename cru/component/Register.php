<?php
function Register()
{
    echo '
<div data-aos="flip-left">
  <div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">สมัครสมาชิก</p>

        <form action="insert/" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="ชื่อ - สกุล" id = "name" name = "name" required />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/test-account.png"/>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" id = "account" name = "account" required />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/email.png"/>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="รหัสผ่าน" id = "password" name = "password" required />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/show-password.png" />
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" id = "confirm_password" name = "confirm_password" required />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/show-password.png" />
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="รหัสประจำตัวนักศึกษา" id = "id_student" name = "id_student" required />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/id-verified.png" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree" required/>
                        <label id = "regis" for="agreeTerms">
                            ยอมรับ <a href="#">อ่านเงื่อนไขเพิ่มเติม</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="?forget=1" class="text-center" id = "register">ลืมรหัสสมาชิก</a>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->    
</div>
    ';
}
?>
