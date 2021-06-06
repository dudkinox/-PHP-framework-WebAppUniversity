<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <?php $page = isset($_GET["page"]) ? $_GET["page"] : '';
                if ($type_account == "student") { ?>
                    <h1 class="m-0 text-white">หน้ากิจกรรม</h1>
                <?php } else if ($type_account == "teacher") {  ?>
                    <?php if ($Dashboard == 1) { ?>
                        <h1 class="m-0 text-white">Dashboard</h1>
                    <?php } else if ($page == 1){ ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : เลือกที่ปรึกษา </h1>
                    <?php } else if ($page == 2){ ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : สอบเสนอหัวข้อ  </h1>
                    <?php } else if ($page == 3){ ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : สอบความก้าวหน้าครั้งที่ 1  </h1>
                    <?php } else if ($page == 4){ ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : สอบความก้าวหน้าครั้งที่ 2  </h1>
                    <?php } else if ($page == 5){ ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : ส่งเล่มวิจัย โปสเตอร์   </h1>
                    <?php } else { ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม</h1>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <img src="https://img.icons8.com/dusk/30/000000/clock--v2.png" />
                        <span id="digitalclock" class="styling text-white"></span>
                        <script src="js/time.js"></script>
                        <span class="right badge badge-danger">time</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>