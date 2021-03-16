<?php
function Forget()
{
    echo '
<div data-aos="flip-left">
 <div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">กรอก Email ของคุณเพื่อเปลี่ยนรหัสผ่าน</p>

        <form action="recover-password.html" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img src="https://img.icons8.com/dusk/24/000000/email.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12"></div>
                    <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mt-3 mb-1" id = "form1">
            <a href="/">เข้าสู่ระบบ</a>
        </p>
        <p class="mb-0" id = "form2">
            <a href="?register=1" class="text-center">สมัครสมาชิก</a>
        </p>
    </div>
    <!-- /.login-card-body -->
    </div>
</div>
    ';
}
