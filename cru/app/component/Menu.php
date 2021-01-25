<?php
function Menu($person, $approve, $testing)
{
    echo '
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">รหัสนักศึกษา</span>
        </a>
    
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://img.icons8.com/bubbles/50/000000/guest-male.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="?profile=1" class="d-block">ชื่อ - นามสกุล</a>
                </div>
            </div>
    
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="/" class="nav-link active">
                            <img src="https://img.icons8.com/dusk/40/000000/dashboard.png"/>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">';
    if ($person == 1) {
        echo '<a href="?person=1" class="nav-link active">';
    } else {
        echo '<a href="?person=1" class="nav-link">';
    }
    echo '
                                <img src="https://img.icons8.com/plasticine/30/000000/development-skill.png"/>
                                    <p>หัวข้อวิจัย</p>
                                </a>
                            </li>
                            <li class="nav-item">';
    if ($approve == 1) {
        echo '<a href="?approve=1" class="nav-link active">';
    } else {
        echo '<a href="?approve=1" class="nav-link">';
    }
    echo '
                                <img src="https://img.icons8.com/plasticine/30/000000/approve.png"/>
                                    <p>การอนุมัติ</p>
                                </a>
                            </li>
                            <li class="nav-item">';
    if ($testing == 1) {
        echo '<a href="?testing=1" class="nav-link active">';
    } else {
        echo '<a href="?testing=1" class="nav-link">';
    }
    echo '
                                <img src="https://img.icons8.com/dusk/30/000000/test-partial-passed.png"/>
                                    <p>สอบหัวข้อ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="?logout=1" class="nav-link">
                                <img src="https://img.icons8.com/dusk/30/000000/logout-rounded-left.png"/>
                                    <p>ออกจากระบบ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>    
    ';
}
