<?php
session_start();

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>

<head>
    <title>LOGIN | COM & AI</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="login/css/login.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bootstrap/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="bootstrap/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- aos animetion -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="hold-transition login-page" id="particles">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body user_card">
                <div class="d-flex justify-content-center" data-aos="flip-right" data-aos-delay="300">
                    <div class="brand_logo_container">
                        <img src="login/css/logo.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form class="log-form" action="login/index.php" method="post">
                        <div class="input-group mb-3" data-aos="fade-up" data-aos-delay="500">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control input_user" placeholder="username" required="">
                        </div>
                        <div class="input-group mb-2" data-aos="fade-up" data-aos-delay="800">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_user" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox" data-aos="fade-up" data-aos-delay="1100">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container" data-aos="fade-up" data-aos-delay="1400">
                            <input type="submit" name="submit" class="btn login_btn" value="เข้าสู่ระบบ">
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links" data-aos="flip-up" data-aos-delay="1700">
                        <a href="https://whitehurricane.000webhostapp.com/login/register.php" target="_blank" class="ml-2">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION["alert_password"])) { ?>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><img src="https://img.icons8.com/plasticine/60/000000/hazard-warning-flasher.png" />แจ้งเตือน</h5>
                    </div>
                    <div class="modal-body text-center h2">
                        <p> กรุณากรอกรหัสผ่านให้ถูกต้อง</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_alert()">ตกลง</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else if ($_SESSION["alert_login"]) { ?>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><img src="https://img.icons8.com/plasticine/60/000000/hazard-warning-flasher.png" />แจ้งเตือน</h5>
                    </div>
                    <div class="modal-body text-center h2">
                        <p>กรุณากรอกไอดีให้ถูกต้อง</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="close_alert()">ตกลง</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    session_destroy();
    ?>
    <!-- Template Main JS File -->
    <script src="login/css/login.js"></script>
    <!-- jQuery -->
    <script src="bootstrap/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="bootstrap/dist/js/adminlte.min.js"></script>
    <!-- aos animetion -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $('document').ready(function() {
            $('#exampleModalCenter').modal('show');
        })

        function close_alert() {
            $('#exampleModalCenter').modal('hide');
        }
    </script>
</body>

</html>