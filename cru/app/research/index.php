<?php
session_start();
if (!isset($_SESSION["account_login"])) {
    header('location: /');
}
$name_teacher = $_SESSION["name_teacher"];
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../" />
    <meta charset="utf-8" />
    <title>COMPUTER SCIENCE | PROJECT</title>
    <meta name="description" content="Wizard examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="https://img.icons8.com/dusk/64/000000/saving-book.png" />
    <!-- create css -->
    <link rel="stylesheet" href="app/css/style_topic.css">
    <!-- line water -->
    <link rel="stylesheet" href="../../linewater.css">

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">

    <?php
    require('component/Head_mobile.php');
    Head_mobile($name_teacher);
    ?>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <?php
                require('component/Head.php');
                Head($name_teacher);
                ?>

                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <?php
                    require('component/Top_head.php');
                    Top_head();
                    include 'component/Content.php';
                    ?>
                </div>
                <?php
                require("component/Footer.php");
                Footer();
                ?>

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <!--end::Demo Panel-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/pages/crud/datatables/basic/headers.js"></script>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script>
        // left alignment setup
        $("#kt_daterangepicker_3").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary",
            },
            function(start, end, label) {
                $("#kt_daterangepicker_3 .form-control").val(
                    start.format("DD-MM-YYYY") + " <-> " + end.format("DD-MM-YYYY")
                );
            }
        );

        $("#kt_daterangepicker_3_modal").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary",
            },
            function(start, end, label) {
                $("#kt_daterangepicker_3 .form-control").val(
                    start.format("DD-MM-YYYY") + " <-> " + end.format("DD-MM-YYYY")
                );
            }
        );
    </script>
    <script>
        var _initPriceSlider = function(element) {
            // init slider
            var slider = document.getElementById(element);
            if (typeof slider === 'undefined') {
                return;
            }

            if (!slider) {
                return;
            }

            noUiSlider.create(slider, {
                start: [20, 60],
                connect: true,
                range: {
                    'min': 0,
                    'max': 100
                }
            });
        }
        _initPriceSlider('kt_price_slider1');
        _initPriceSlider('kt_price_slider2');
        _initPriceSlider('kt_price_slider3');
        _initPriceSlider('kt_price_slider4');
        _initPriceSlider('kt_price_slider5');
        _initPriceSlider('kt_price_slider6');
        var KTAppSettings = {
            breakpoints: {
                sm: 576,
                md: 768,
                lg: 992,
                xl: 1200,
                xxl: 1200
            },
            colors: {
                theme: {
                    base: {
                        white: "#ffffff",
                        primary: "#0BB783",
                        secondary: "#E5EAEE",
                        success: "#1BC5BD",
                        info: "#8950FC",
                        warning: "#FFA800",
                        danger: "#F64E60",
                        light: "#F3F6F9",
                        dark: "#000",
                    },
                    light: {
                        white: "#ffffff",
                        primary: "#D7F9EF",
                        secondary: "#ECF0F3",
                        success: "#C9F7F5",
                        info: "#EEE5FF",
                        warning: "#FFF4DE",
                        danger: "#FFE2E5",
                        light: "#F3F6F9",
                        dark: "#000",
                    },
                    inverse: {
                        white: "#ffffff",
                        primary: "#ffffff",
                        secondary: "#212121",
                        success: "#ffffff",
                        info: "#ffffff",
                        warning: "#ffffff",
                        danger: "#ffffff",
                        light: "#464E5F",
                        dark: "#ffffff",
                    },
                },
                gray: {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121",
                },
            },
            "font-family": "Poppins",
        };

        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table").html();
            // Append table with add row form on add new button click
            let number = 1;
            let calendar = 3;
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody").index();
                number++;
                calendar++;
                var row =
                    '<div class="form-group">' +
                    '<label>กิจกรรมที่ <b>(' + number + ')</b></label>' +
                    '<input type="text" class="form-control form-control-lg" placeholder="กรอกชื่อกิจกรรม" />' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<label>เลือกระยะเวลา</label>' +
                    '<div class="input-group" id="kt_daterangepicker_' + calendar + '">' +
                    '<div class="input-group-prepend">' +
                    '<span class="input-group-text"><i class="la la-calendar-check-o"></i></span>' +
                    '</div>' +
                    '<input type="text" class="form-control " placeholder="วันที่เริ่มต้น <-> วันที่สิ้นสุด">' +
                    '</div>' +
                    '</div>';
                $("table").append(row);
                $("table tbody")
                    .eq(index + 1)
                    .find(".add, .edit")
                    .toggle();
                $('[data-toggle="tooltip"]').tooltip();
                // left alignment setup
                $("#kt_daterangepicker_" + calendar + "").daterangepicker({
                        buttonClasses: " btn",
                        applyClass: "btn-primary",
                        cancelClass: "btn-secondary",
                    },
                    function(start, end, label) {
                        $("#kt_daterangepicker_" + calendar + " .form-control").val(
                            start.format("DD-MM-YYYY") + " <-> " + end.format("DD-MM-YYYY")
                        );
                    }
                );

                $("#kt_daterangepicker_" + calendar + "_modal").daterangepicker({
                        buttonClasses: " btn",
                        applyClass: "btn-primary",
                        cancelClass: "btn-secondary",
                    },
                    function(start, end, label) {
                        $("#kt_daterangepicker_" + calendar + " .form-control").val(
                            start.format("DD-MM-YYYY") + " <-> " + end.format("DD-MM-YYYY")
                        );
                    }
                );

            });
            // Add row on add button click
            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function() {
                $(this)
                    .parents("tr")
                    .find("td:not(:last-child)")
                    .each(function() {
                        $(this).html(
                            '<input type="text" class="form-control" value="' +
                            $(this).text() +
                            '">'
                        );
                    });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function() {
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });
    </script>
    <script src="assets/js/pages/custom/wizard/wizard-1.js"></script>
    <script src="assets/js/pages/widgets.js"></script>

</body>

</html>