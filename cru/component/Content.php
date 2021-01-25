<?php
function Content()
{
    echo '
<div data-aos="flip-left">
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">เข้าสู่ระบบ</p>

        <form action="'; $_SERVER["PHP_SELF"]; echo '" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name = "account_login" required/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/email.png" />
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name = "password_login" required/>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <img id = "email" src="https://img.icons8.com/dusk/24/000000/show-password.png" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div align="center">
                    <button type="submit" name = "submit" class="snip1562">Sign In</button>
                </div>
            </div>
        </form>
        <p class="mb-1" id = "form1">
            <a href="?forget=1" id = "forget">ลืมรหัสผ่าน</a>
        </p>
        <p class="mb-0" id = "form2">
            <a href="?register=1" class="text-center" id = "login">สมัครสมาชิก</a>
        </p>
    </div>
    <!-- /.login-card-body -->
    </div>
</div>    
    ';
}
