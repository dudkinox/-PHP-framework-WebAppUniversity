<?php
function Top_head()
{
    echo '
<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
        ';
    // ขั้นตอน
    echo '
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <h5 class="text-white font-weight-bold my-1 mr-5">
                    แบบฟอร์มเสนอหัวข้อ
                </h5>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="/app?person=1" class="text-muted">เลือกที่ปรึกษา</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/app?research=1" class="text-muted">กรอกข้อมูล</a>
                    </li>
                </ul>
            </div>
            ';
    echo '
        </div>
    </div>
</div>    
    ';
}
