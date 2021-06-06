<?php
function Head_mobile($option)
{
    if ($option == "edit") {
        $edit = "[แก้ไข]";
    } else {
        $edit = "";
    }
    echo '
<div id="kt_header_mobile" class="header-mobile bg-warning header-mobile-fixed">
    <a href="index.html">
        <img alt="Logo" src="https://img.icons8.com/dusk/64/000000/saving-book.png" class="max-h-30px" />
    </a>
    <h2>
        ' . $_SESSION["name_teacher"] . ' ' . $edit . '
    </h2>
    <div class="d-flex align-items-center">
        <button class="btn p-0 back-icon back-icon-left ml-4" id="kt_header_mobile_toggle"
             onclick = "window.close();">
            <span>BACK</span>
        </button>
    </div>
</div>
';
}
