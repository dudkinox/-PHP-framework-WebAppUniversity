<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <!-- เลข id -->
        <span class="brand-text font-weight-light"><?php echo $showid; ?></span>
    </a>
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://img.icons8.com/bubbles/50/000000/guest-male.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <!-- ชื่อ -->
                <a href="?profile=1" class="d-block"><?php echo $showname; ?></a>
            </div>
        </div>
        <?php
        if ($type_account == "admin") {
            echo '
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item has-treeview menu-open">
        <a  class="nav-link active">
            <img src="https://img.icons8.com/dusk/40/000000/dashboard.png" />
            <p>
                เพิ่มบัญชีผู้ใช้
                <i class="right fas fa-angle-left"></i>              
            </p>
        </a>
        ';
        } else {
            echo '
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="/" class="nav-link active">
                        <img src="https://img.icons8.com/dusk/40/000000/dashboard.png" />
                        <p>
                            วิจัยนักศึกษา
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <!-- แสดงช่องการกด menu -->
                            ';
            if ($person == 1) {
                echo '<a href="?person=1" class="nav-link active">';
            } else {
                echo '<a href="?person=1" class="nav-link">';
            }
            echo '
                            <img src="https://img.icons8.com/plasticine/30/000000/development-skill.png" />
                            <p>เสนอหัวข้อวิจัย</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        ';
            if ($approve == 1) {
                echo '<a href="?approve=1" class="nav-link active">';
            } else {
                echo '<a href="?approve=1" class="nav-link">';
            }
            echo '
                            <img src="https://img.icons8.com/plasticine/30/000000/approve.png" />
                            <p>ข้อเสนอแนะที่ปรึกษา</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/computer_science/Exam" class="nav-link">
                                <img src="https://img.icons8.com/dusk/30/000000/test-partial-passed.png" />
                                <p>ขอสอบ | เอกสารการอนุมัติ</p>
                            </a>
                        </li>
                    </ul>
                </li>
            ';
        }
        ?>
        <!-- ขั้นกลาง -->
        <li class="nav-item"><br /></li>
        <?php
        // MENU อาจารย์
        if ($type_account == "student") {
            echo '
                <li class="nav-item">
                    <a href="https://whitehurricane.000webhostapp.com/document/doc_index.html" target="_blank" class="nav-link">
                        <img src="https://img.icons8.com/dusk/30/000000/downloads-folder--v1.png" />
                        ดาวโหลดแบบฟอร์ม
                    </a>
                </li>
                ';
        }

        if ($type_account == "teacher") {
            echo '
                <li class="nav-item">';
            if ($calendar == 1) {
                echo '<a href="?calendar=1" class="nav-link active">';
            } else {
                echo '<a href="?calendar=1" class="nav-link">';
            }
            echo '
                            <img src="https://img.icons8.com/dusk/30/000000/calendar--v1.png" />
                            ห้องสอบ / ตารางเวลา
                        </a>
                </li>
                ';
        }
        ?>

        <li class="nav-item">
            <a href="?logout=1" class="nav-link">
                <img src="https://img.icons8.com/dusk/30/000000/logout-rounded-left.png" />
                <p>ออกจากระบบ</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="https://img.icons8.com/dusk/30/000000/clock--v2.png" />
                <p>
                    <span id="digitalclock" class="styling"></span>
                    <script src="js/time.js"></script>
                    <span class="right badge badge-danger">time</span>
                </p>
            </a>
        </li>
        </ul>
        </nav>
    </div>
</aside>