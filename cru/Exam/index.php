<?php
session_start();
if (!isset($_SESSION["account_login"])) {
    header('location: ../');
}
$calendar = isset($_GET["calendar"]) ? $_GET["calendar"] : '';
$menu = isset($_GET["menu"]) ? $_GET["menu"] : '';
$edit = isset($_GET["edit"]) ? $_GET["edit"] : '';

require('../Database/index.php');

$sql_data = "SELECT * FROM login WHERE email = '" . $_SESSION["account_login"] . "'";
$result_data = $conn->query($sql_data);
$row_data = $result_data->fetch_assoc();
$id_student = $row_data["id_student"];
$name_student = $row_data["name"];
$tel = $row_data["TEL"];
$sername = $row_data["sername"];
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <meta charset="utf-8" />
    <title>COMPUTER SCIENCE | CALENDAR</title>
    <meta name="description" content="Upcoming events and happenings" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="https://img.icons8.com/dusk/64/000000/saving-book.png" />
    <!-- create css -->
    <link rel="stylesheet" href="app/css/style_calendar.css">
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="https://img.icons8.com/dusk/64/000000/saving-book.png" class="max-h-30px" />
        </a>
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <?php
                require('component/Head.php');
                Head();
                ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <?php
                            require('component/Top_head.php');
                            Top_head();
                            ?>
                        </div>
                    </div>
                    <?php
                    if ($calendar == 1) {
                        include 'component/Content.php';
                    } else if ($menu == 1) {
                        include 'component/Menu.php';
                    } else if ($menu == 2) {
                        include 'component/Exam.php';
                    } else if ($menu == 3) {
                        include 'component/Project.php';
                    } else if ($edit == 1) {
                        include 'edit/index.php';
                    } else {
                        include 'component/Menu.php';
                    }
                    ?>
                </div>
                <?php
                require('component/Footer.php');
                Footer();
                ?>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#0BB783",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#D7F9EF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/datatables/basic/headers.js"></script>
    <!-- link page menu -->
    <script src="Exam/javascript.js"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
    <script>
        "use strict";

        var KTCalendarExternalEvents = function() {

            var initExternalEvents = function() {
                $('#kt_calendar_external_events .fc-draggable-handle').each(function() {
                    // store data so the calendar knows to render an event upon drop
                    $(this).data('event', {
                        title: $.trim($(this).text()), // use the element's text as the event title
                        stick: true, // maintain when user navigates (see docs on the renderEvent method)
                        classNames: [$(this).data('color')],
                        description: 'สถานะจองเเล้ว'
                    });
                });
            }

            var initCalendar = function() {
                var todayDate = moment().startOf('day');
                var YM = todayDate.format('YYYY-MM');
                var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                var TODAY = todayDate.format('YYYY-MM-DD');
                var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                var calendarEl = document.getElementById('kt_calendar');
                var containerEl = document.getElementById('kt_calendar_external_events');

                var Draggable = FullCalendarInteraction.Draggable;

                new Draggable(containerEl, {
                    itemSelector: '.fc-draggable-handle',
                    eventData: function(eventEl) {
                        return $(eventEl).data('event');
                    }
                });

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],

                    isRTL: KTUtil.isRTL(),
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },

                    height: 800,
                    contentHeight: 780,
                    aspectRatio: 3, // see: https://fullcalendar.io/docs/aspectRatio

                    nowIndicator: true,
                    now: TODAY + 'T09:25:00', // just for demo

                    views: {
                        dayGridMonth: {
                            buttonText: 'เดือน'
                        },
                        timeGridWeek: {
                            buttonText: 'เวลา'
                        },
                        timeGridDay: {
                            buttonText: 'วัน'
                        }
                    },

                    defaultView: 'dayGridMonth',
                    defaultDate: TODAY,

                    droppable: true, // this allows things to be dropped onto the calendar
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events 
                    navLinks: true,
                    events: [{
                            title: 'All Day Event', // Database 
                            start: YM + '-01',
                            description: 'สถานะจองเเล้ว',
                            className: "fc-event-danger fc-event-solid-warning"
                        },

                    ],

                    drop: function(arg) {
                        // is the "remove after drop" checkbox checked?
                        if ($('#kt_calendar_external_events_remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(arg.draggedEl).remove();
                        }
                    },

                    eventRender: function(info) {
                        var element = $(info.el);

                        if (info.event.extendedProps && info.event.extendedProps.description) {
                            if (element.hasClass('fc-day-grid-event')) {
                                element.data('content', info.event.extendedProps.description);
                                element.data('placement', 'top');
                                KTApp.initPopover(element);
                            } else if (element.hasClass('fc-time-grid-event')) {
                                element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                            } else if (element.find('.fc-list-item-title').lenght !== 0) {
                                element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                            }

                        }
                    }
                });


                calendar.render();
            }

            return {
                //main function to initiate the module
                init: function() {
                    initExternalEvents();
                    initCalendar();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTCalendarExternalEvents.init();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.4.1/vanilla-tilt.min.js "></script>
    <!--begin::Page Scripts(used by this page)-->
    <script>
        $("#kt_datetimepicker_3").datetimepicker({
            todayHighlight: true,
            format: "DD / MM / " + "YYYY",
        });
    </script>

</body>

</html>