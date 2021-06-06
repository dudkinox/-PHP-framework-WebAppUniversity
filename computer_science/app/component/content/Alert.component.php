<?php
if (isset($_SESSION["comment"])) {
?>
    <!-- jQuery -->
    <script src="../bootstrap/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../bootstrap/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../bootstrap/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../bootstrap/plugins/toastr/toastr.min.js"></script>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            icon: 'success',
            title: 'เพิ่มความคิดเห็นเรียบร้อย'
        })
    </script>
<?php
    unset($_SESSION["comment"]);
} else if (isset($_SESSION["approve"])) {
?>
    <!-- jQuery -->
    <script src="../bootstrap/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../bootstrap/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../bootstrap/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../bootstrap/plugins/toastr/toastr.min.js"></script>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            icon: 'success',
            title: 'อนุมัติเรียบร้อย'
        })
    </script>
<?php
    unset($_SESSION["approve"]);
} else if (
    isset($_SESSION["alert_upload_file2"])
    || isset($_SESSION["alert_upload_file3"])
    || isset($_SESSION["alert_upload_file4"])
) { ?>
    <script src="../bootstrap/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../bootstrap/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../bootstrap/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../bootstrap/plugins/toastr/toastr.min.js"></script>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            icon: 'success',
            title: 'ส่งเอกสารเรียบร้อย'
        })
    </script>
<?php
    unset($_SESSION["alert_upload_file2"]);
    unset($_SESSION["alert_upload_file3"]);
    unset($_SESSION["alert_upload_file4"]);
}
