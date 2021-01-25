<?php
session_start();
session_destroy();
if (isset($_POST["submit"])) {
    session_start();
    $_SESSION["account_login"] = htmlentities($_POST["account_login"]);
    $_SESSION["password_login"] = htmlentities($_POST["password_login"]);
    header('location: login/index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    $register = isset($_GET["register"]) ? $_GET["register"] : '';
    $forget = isset($_GET["forget"]) ? $_GET["forget"] : '';
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>วิทยาการคอมพิวเตอร์ - จันทรเกษม</title>
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
    <!-- สร้างเอง -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Css animetion -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <?php
        require('component/Head.php');
        Head();
        if ($register == 1) {
            require('component/Register.php');
            Register();
        } else if ($forget == 1) {
            require('component/Forget.php');
            Forget();
        }else{
            require('component/Content.php');
            Content();
        }
        ?>

    </div>

    <!-- jQuery -->
    <script src="bootstrap/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="bootstrap/dist/js/adminlte.min.js"></script>
    <!-- css animetion -->
    <script>
        AOS.init();
    </script>
</body>

</html>