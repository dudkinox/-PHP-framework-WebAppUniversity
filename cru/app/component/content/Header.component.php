<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <?php if ($type_account == "student") { ?>
                    <h1 class="m-0 text-white">หน้ากิจกรรม</h1>
                <?php } else if ($type_account == "teacher") {  ?>
                    <?php if ($Directer == 1) { ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : บทบาทที่ปรึกษา</h1>
                    <?php } else if ($Directer == 2) { ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : ประธานหลักสูตร</h1>
                    <?php } else if ($Directer == 3) { ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : บทบาทกรรมการ</h1>
                    <?php } else { ?>
                        <h1 class="m-0 text-white">หน้ากิจกรรม : บทบาทที่ปรึกษา</h1>
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