<?php
session_start();
if (!isset($_SESSION["account_login"])) {
    header('location: ../');
}
require("../Database/index.php");
$password = md5($_SESSION["password_login"]);
// $_SESSION["account_login"]
$type_account = strtolower($_SESSION["type"]);
$showname = $_SESSION["pre"] . $_SESSION["name"] . " " . $_SESSION["Lastname"];
$showid = $_SESSION["no_std"];
$sql_status = "SELECT Status, Level FROM status WHERE id_student = '" . $showid . "'";
$result_status = $conn->query($sql_status);
if ($result_status->num_rows > 0) {
    $row_status = $result_status->fetch_assoc();
    $status = $row_status["Status"];
    $level = $row_status["Level"];
} else {
    $status = "ยังไม่ได้เลือกที่ปรึกษา";
    $level = 1;
}


$logout = isset($_GET["logout"]) ? $_GET["logout"] : '';
if ($logout == 1) {
    session_destroy();
    header('location: ../');
}
$research = isset($_GET["research"]) ? $_GET["research"] : '';
$approve = isset($_GET["approve"]) ? $_GET["approve"] : '';
$testing = isset($_GET["testing"]) ? $_GET["testing"] : '';
$person = isset($_GET["person"]) ? $_GET["person"] : '';
$calendar = isset($_GET["calendar"]) ? $_GET["calendar"] : '';
$director = isset($_GET["director"]) ? $_GET["director"] : '';
$Directer = isset($_GET["Directer"]) ? $_GET["Directer"] : '';
$Dashboard = isset($_GET["Dashboard"]) ? $_GET["Dashboard"] : '';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COM-SCI System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../bootstrap/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../bootstrap/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../bootstrap/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../bootstrap/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../bootstrap/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- สร้าง CSS เอง -->
    <link rel="stylesheet" href="css/style.css">
    <!-- logo -->
    <link rel="shortcut icon" href="https://img.icons8.com/dusk/64/000000/saving-book.png" />
    <!-- css animetion -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../bootstrap/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../bootstrap/plugins/summernote/summernote-bs4.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../bootstrap/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../bootstrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../bootstrap/plugins/toastr/toastr.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php
        include "component/Head.php";
        include "component/Menus.php";
        ?>
        <div class="content-wrapper">
            <?php
            if ($research == 1) {
                $name_teacher = isset($_GET["name"]) ? $_GET["name"] : '';
                $_SESSION["name_teacher"] = $name_teacher;
                echo '<script>window.location.href = "research/"</script>';
            } else if ($approve == 1) {
                if ($type_account == "student") {
                    include "approve/List_student.php";
                }
            } else if ($calendar == 1) {
                echo '<script>window.location.href = "calendar/"</script>';
            } else if ($person == 1) {
                include "research/Person.php";
            } else if ($director == 1) {
                include "director/director.php";
            } else {
                if ($type_account == "admin") {
                    include "admin/Admin.php";
                } else {
                    $option = isset($_GET["option"]) ? $_GET["option"] : '';
                    if ($option == "edit") {
                        include "component/Content_edit.php";
                    } else {
                        include "component/Content.php";
                    }
                }
            }
            ?>
        </div>
        <div class="fb-customerchat" attribution=setup_tool page_id="103128325122912" theme_color="#0A7CFF" logged_in_greeting="สอบถามเพิ่มเติม ?" logged_out_greeting="สอบถามเพิ่มเติม ?">
        </div>
        <!-- /.content-wrapper -->
        <?php
        require("component/Footer.php");
        Footer();
        ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- jQuery -->
    <script src="../bootstrap/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../bootstrap/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../bootstrap/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../bootstrap/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../bootstrap/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../bootstrap/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../bootstrap/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../bootstrap/plugins/moment/moment.min.js"></script>
    <script src="../bootstrap/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../bootstrap/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../bootstrap/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../bootstrap/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../bootstrap/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../bootstrap/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../bootstrap/dist/js/demo.js"></script>
    <!-- Select2 -->
    <script src="../bootstrap/plugins/select2/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="../bootstrap/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../bootstrap/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../bootstrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Summernote -->
    <script src="../bootstrap/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.4.1/vanilla-tilt.min.js "></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../bootstrap/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- create javascript -->
    <script src="js/main.js"></script>
    <script>
        AOS.init();
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v9.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,

            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        $(function() {
            //Add text editor
            $('#compose-textarea').summernote()
            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
        })
        $(document).ready(function() {
            $("#keep_activity").draggable();
        });
        $('#exampleModalLongTitle').on('shown.bs.modal', function() {
            $('#exampleModalLongTitle').trigger('focus')
        })
    </script>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</body>

</html>