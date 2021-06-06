<?php
require("../Database/index.php");

// ส่งค่ามา cs1
$cs = isset($_GET["cs"]) ? $_GET["cs"] : '';

// head
?>
<div class="card card-info">
    <div class="card-header" id="head_status">
        <?php if ($cs == 1) { ?>
            <h3 class="card-title">
                เลือกกรรมการสอบเสนอหัวข้อ
            </h3>
        <?php } else { ?>
            <h3 class="card-title">
                เลือกที่ปรึกษาเสนอหัวข้อวิจัย
            </h3>
        <?php } ?>
    </div>
    <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch" id="show_teacher"></div>
    </div>
</div>
<div class="card-footer ">
    <nav aria-label="Contacts Page Navigation">
        <ul class="pagination justify-content-center m-0">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
        </ul>
    </nav>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.getJSON('https://whitehurricane.000webhostapp.com/service2.php', function(data) {
                for (var i = 0; i < data.length; i++) {
                    document.getElementById("show_teacher").innerHTML += '<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">' +
                        '<div class="card bg-light">' +
                        '<div class="card-body pt-0">' +
                        '<div class="row">' +
                        '<div class="col-12 text-center my-3" id="img_teacher' + i + '"></div>' +
                        '<div class="col-12 text-center">' +
                        '<h2 class="lead" id="name_teacher' + i + '"></h2>' +
                        '<p class="text-muted text-sm" id="Expert' + i + '"></p>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="card-footer text-center">' +
                        '<div id="lim_path' + i + '"></div>' +
                        '</div>' +
                        '</div>';
                    $("#name_teacher" + i + "").html("<b>" + data[i].Name + "</b>");
                    $("#Expert" + i + "").html("<b>เชี่ยวชาญ: </b>" + data[i].Expert);
                    $("#img_teacher" + i + "").html("<img width = '170' height = '170' class = 'img-fluid rounded' src = 'http://whitehurricane.000webhostapp.com/assets/img/img_teacher/" + data[i].profile + "' />");
                    <?php if ($cs == 1) { ?> $("#lim_path" + i + "").html("" +
                            "<a href='?page=2&director_select=" + data[i].Name + "'" +
                            "class='btn btn-sm btn-primary ml-3'>" +
                            "<i class = 'fas fa-user'> เลือกกรรมการ </i>" +
                            "</a>"
                        <?php } else { ?> $("#lim_path" + i + "").html("<a class='btn btn-sm bg-teal'>0 / 5 </a>" +
                                "<a href='session/?research=1&name=" + data[i].Name + "'" +
                                "class='btn btn-sm btn-primary ml-3'>" +
                                "<i class = 'fas fa-user'> เลือกที่ปรึกษา </i>" +
                                "</a>"
                            <?php } ?>);
                        }
                });
</script>