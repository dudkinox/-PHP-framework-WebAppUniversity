<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <!-- เลข id -->
        <span class="brand-text font-weight-light"><?php echo $showid; ?></span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://img.icons8.com/bubbles/50/000000/guest-male.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" data-aos="zoom-out" data-aos-delay="300">
                <!-- ชื่อ -->
                <a href="?profile=1" class="d-block"><?php echo $showname; ?></a>
            </div>
        </div>
        <?php if ($type_account == "admin") { ?>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a class="nav-link active">
                            <img src="https://img.icons8.com/dusk/40/000000/dashboard.png" />
                            <p> เพิ่มบัญชีผู้ใช้ <i class="right fas fa-angle-left"></i> </p>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } else if ($type_account == "teacher") { ?>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <?php if ($Directer == 1) { ?>
                            <a href="?Directer=1" class="nav-link bg-light">
                                <p>
                                    <img src="https://img.icons8.com/bubbles/40/000000/man-in-green-tie.png" />
                                    บทบาทที่ปรึกษา
                                </p>
                            </a>
                        <?php  } else { ?>
                            <a href="?Directer=1" class="nav-link">
                                <p>
                                    <img src="https://img.icons8.com/bubbles/40/000000/man-in-green-tie.png" />
                                    บทบาทที่ปรึกษา
                                </p>
                            </a>
                        <?php } ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($Directer == 2) { ?>
                            <a href="?Directer=2" class="nav-link bg-light">
                                <p>
                                    <img src="https://img.icons8.com/bubbles/40/000000/brown-curly-hair-lady-with-purple-glasses.png" />
                                    ประธานหลักสูตร
                                </p>
                            </a>
                        <?php  } else { ?>
                            <a href="?Directer=2" class="nav-link">
                                <p>
                                    <img src="https://img.icons8.com/bubbles/40/000000/man-in-green-tie.png" />
                                    ประธานหลักสูตร
                                </p>
                            </a>
                        <?php } ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($Directer == 3) { ?>
                            <a href="?Directer=3" class="nav-link bg-light">
                                <p>
                                    <img src="https://img.icons8.com/bubbles/40/000000/man-with-beard-in-jacket.png" />
                                    บทบาทกรรมการ
                                </p>
                            </a>
                        <?php  } else { ?>
                            <a href="?Directer=3" class="nav-link">
                                <p>
                                    <img src="https://img.icons8.com/bubbles/40/000000/man-in-green-tie.png" />
                                    บทบาทกรรมการ
                                </p>
                            </a>
                        <?php } ?>
                    </li>
                    <li class="nav-item">
                        <a href="?logout=1" class="nav-link">
                            <img src="https://img.icons8.com/dusk/30/000000/logout-rounded-left.png" />
                            <p>ออกจากระบบ</p>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } else { ?>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="https://sahakit2.monosackaline.repl.co/document/doc_index.html" target="_blank" class="nav-link">
                            <img src="https://img.icons8.com/dusk/30/000000/downloads-folder--v1.png" />
                            <p>ดาวโหลดแบบฟอร์ม</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?logout=1" class="nav-link">
                            <img src="https://img.icons8.com/dusk/30/000000/logout-rounded-left.png" />
                            <p>ออกจากระบบ</p>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php } ?>
    </div>
</aside>