<?php

function Head($showid, $type_account)
{
    require("../Database/index.php");
    $sql_Noapprove_Alert = "SELECT Status, COUNT(Status) AS count_no_status FROM Topic 
    WHERE ID_student = '" . $showid . "' AND Status = 'ยังไม่อนุมัติ'";

    $sql_Yesapprove_Alert = "SELECT Status, COUNT(Status) AS count_yes_status FROM Topic 
    WHERE ID_student = '" . $showid . "' AND Status = 'อนุมัติ'";

    $sql_Comment_Alert = "SELECT COUNT(Comment) AS count_comment FROM comment 
    WHERE ID_student = '" . $showid . "'";

    $sql_Teacher = "SELECT Type FROM login WHERE Type = '" . $type_account . "'";

    $result_No = $conn->query($sql_Noapprove_Alert);
    $result_Yes = $conn->query($sql_Yesapprove_Alert);
    $result_comment = $conn->query($sql_Comment_Alert);
    $result_teacher = $conn->query($sql_Teacher);

    if ($result_comment->num_rows > 0) {
    } else {
        $result_comment = 0;
    }
    $row_No = $result_No->fetch_assoc();
    $row_Yes = $result_Yes->fetch_assoc();
    $row_comment = $result_comment->fetch_assoc();
    $row_teacher = $result_teacher->fetch_assoc();

    $Noapprove_Alert = $row_No["Status"];
    $Yesapprove_Alert = $row_Yes["Status"];
    $Comment_Alert = $row_comment["count_comment"];
    $count_yes = $row_Yes["count_yes_status"];
    $count_no = $row_No["count_no_status"];
    $sum = $count_yes + $count_no + $Comment_Alert;
    $teacher_Alert = $row_teacher["Type"];
    echo '
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block"
            data-aos="fade-down" data-aos-delay="2000">
                <a href="?profile=1" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block" d-none d-sm-inline-block"
            data-aos="fade-down" data-aos-delay="2500">
                <a href="?person=1" class="nav-link">Contact</a>
            </li>
        </ul>
    
        <form class="form-inline ml-3" d-none d-sm-inline-block"
        data-aos="fade-down" data-aos-delay="3000">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    
        <ul class="navbar-nav ml-auto">
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="../bootstrap/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="../bootstrap/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../bootstrap/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">' . $sum . '</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> 
                <span class="dropdown-item dropdown-header">' . $sum . ' Notifications </span>
            ';

    // ปิดแจ้งเตือนฝั่งอาจารย์
    if ($teacher_Alert != "teacher") {
        echo '
                
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> ' . $Noapprove_Alert . ' 
                        <span class="float-right text-muted text-sm">' . $count_no . '</span>
                    </a> ';
    }
    #ต้องนี้คืออนุมัติ
    if ($Yesapprove_Alert != "") {
        echo '
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> ' . $Yesapprove_Alert . '
                        <span class="float-right text-muted text-sm">' . $count_yes . '</span>
                    </a>
                    ';
    }
    echo ' 
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> ข้อเสนอแนะ 
                        <span class="float-right text-muted text-sm">' . $Comment_Alert . '</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->    
    ';
}
