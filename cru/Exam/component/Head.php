<?php
function Head()
{
    echo '
<div id="kt_header" class="header flex-column header-fixed">
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Left-->
            <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Logo-->
                <a href="index.html" class="mr-20">
                    <img alt="Logo" src="https://img.icons8.com/dusk/64/000000/saving-book.png" class="max-h-35px" />
                </a>
                <div class="quick-search quick-search-inline ml-4 w-300px" id="kt_quick_search_inline">
                    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200">
                        </div>
                    </div>
                </div>
            </div>
                     ';
    //  ย้อนกลับ
    echo '
            <div class="topbar">
                <div class="topbar-item">
                    <a href = "/computer_science/app/">  
                        <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                            <div class="d-flex flex-column text-right pr-3">
                                <span class="text-dark font-weight-bolder font-size-sm d-none d-md-inline">ย้อนกลับ</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>    
    ';
}
