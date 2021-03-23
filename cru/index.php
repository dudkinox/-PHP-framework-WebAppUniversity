<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>LOGIN | COM & AI</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <link rel="stylesheet" href="css/style.css">
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/logohead.png" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- line water -->
    <link rel="stylesheet" href="linewater.css">
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">

            <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;background-image: url(img/Comp1.mp4);background-position: bottom;background-blend-mode: lighten;">
                <video autoplay muted loop id="myVideo">
                    <source src="img/Comp1.mp4" type="video/mp4">
                </video>

                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <a href="#" class="text-center mb-10" id="logo">
                        <img src="img/LogoAA.png" class="max-h-300px" alt="" data-tilt data-tilt-max="30" data-tilt-glare data-tilt-max-glare="0.55" />
                    </a>
                </div>
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(img/Start.png)" data-aos="fade-up" data-tilt data-tilt-max="30" data-tilt-glare data-tilt-max-glare="0.55"></div>
            </div>
            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <div class="d-flex flex-column-fluid flex-center">
                    <div class="login-form login-signin">
                        <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                            <div class="pb-13 pt-lg-0 pt-5" data-aos="flip-down" id="head_com">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg aos-init aos-animate">Welcome to Project</h3>
                            </div>
                            <div class="form-group" id="input_animetion" data-aos="fade-right">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="email" name="username" id="username" autocomplete="off" placeholder="EMAIL" />
                            </div>
                            <div class="form-group" id="input_animetion" data-aos="fade-right">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" id="password" autocomplete="off" placeholder="PASSWORD" />
                                <span class="text-muted font-weight-bold font-size-h10 mb-3">
                                    <a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder float-left">Create an Account</a>
                                    <a href="javascript:;" id="kt_login_forgot" class="text-primary font-weight-bolder float-right">Forgot Password ?</a>
                                </span>
                            </div>

                            <div class=" pb-lg-0 pb-5" id="sign_in">
                                <button type="button" id="kt_login_signin_submit" class="btn btn-primary btn-block font-weight-bolder font-size-h6 px-8 py-2 my-3 mr-3 mt-18">Sign In</button>
                            </div>

                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                    <div class="login-form login-signup">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="number" placeholder="ID STUDEDNT" name="id_student" id="id_student" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="text" placeholder="Fullname" name="fullname" id="fullname" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" id="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="cpassword" id="cpassword" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="text" placeholder="TEL" name="tel" id="tel" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="text" placeholder="Address" name="address" id="address" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="checkbox mb-0">
                                    <input type="checkbox" name="agree" />
                                    <span></span>
                                    <div class="ml-2 text-white">I Agree the
                                        <a href="#">terms and conditions</a>.
                                    </div>
                                </label>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0">
                                <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->


                    </div>
                    <!--end::Forgot-->
                </div>
                <!--end::Content body-->
                <!--begin::Content footer-->
                <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                        <span class="mr-1">2021©</span>
                        <a href="#" target="_blank" class="text-dark-75 text-hover-primary text-white">นักศึกษาสหกิจ</a>
                    </div>
                    <a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Plans</a>
                    <a href="https://www.facebook.com/CSAICRU" target="_blank" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
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
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!-- card filp -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.4.1/vanilla-tilt.min.js "></script>

    <script>
        "use strict";

        // Class Definition
        var KTLogin = function() {
            var _login;

            var _showForm = function(form) {
                var cls = 'login-' + form + '-on';
                var form = 'kt_login_' + form + '_form';

                _login.removeClass('login-forgot-on');
                _login.removeClass('login-signin-on');
                _login.removeClass('login-signup-on');

                _login.addClass(cls);

                KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
            }

            var _handleSignInForm = function() {
                var validation;

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validation = FormValidation.formValidation(
                    KTUtil.getById('kt_login_signin_form'), {
                        fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: 'กรุณากรอก Email'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'กรุณากรอก Password'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            submitButton: new FormValidation.plugins.SubmitButton(),
                            //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                $('#kt_login_signin_submit').on('click', function(e) {
                    e.preventDefault();

                    validation.validate().then(function(status) {
                        if (status == 'Valid') {
                            KTUtil.scrollTop();
                            var user = document.getElementById("username").value;
                            var pass = document.getElementById("password").value;
                            window.location.href = "login/index.php?id=" + user + "&pass=" + pass;
                        } else {
                            swal.fire({
                                text: "กรอกข้อมูลให้ครบถ้วน",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "เข้าใจแล้ว!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function() {
                                KTUtil.scrollTop();
                            });
                        }
                    });
                });

                // Handle forgot button
                $('#kt_login_forgot').on('click', function(e) {
                    e.preventDefault();
                    _showForm('forgot');
                });

                // Handle signup
                $('#kt_login_signup').on('click', function(e) {
                    e.preventDefault();
                    _showForm('signup');
                });
            }

            var _handleSignUpForm = function(e) {
                var validation;
                var form = KTUtil.getById('kt_login_signup_form');

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validation = FormValidation.formValidation(
                    form, {
                        fields: {
                            fullname: {
                                validators: {
                                    notEmpty: {
                                        message: 'Username is required'
                                    }
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email address is required'
                                    },
                                    emailAddress: {
                                        message: 'The value is not a valid email address'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required'
                                    }
                                }
                            },
                            cpassword: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password confirmation is required'
                                    },
                                    identical: {
                                        compare: function() {
                                            return form.querySelector('[name="password"]').value;
                                        },
                                        message: 'The password and its confirm are not the same'
                                    }
                                }
                            },
                            agree: {
                                validators: {
                                    notEmpty: {
                                        message: 'You must accept the terms and conditions'
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                $('#kt_login_signup_submit').on('click', function(e) {
                    e.preventDefault();

                    validation.validate().then(function(status) {
                        if (status == 'Valid') {
                            swal.fire({
                                text: "All is cool! Now you submit this form",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "เข้าใจแล้ว",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function() {
                                KTUtil.scrollTop();
                                var fullname = document.getElementById("fullname").value;
                                var email = document.getElementById("email").value;
                                var password = document.getElementById("cpassword").value;
                                var tel = document.getElementById("tel").value;
                                var address = document.getElementById("address").value;
                                var id_student = document.getElementById("id_student").value;
                                window.location.href = "insert/index.php?fullname=" + fullname + "&email=" + email + "&password=" + password + "&tel=" + tel + "&address=" + address + "&id_student=" + id_student;
                            });
                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "เข้าใจแล้ว",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function() {
                                KTUtil.scrollTop();
                            });
                        }
                    });
                });

                // Handle cancel button
                $('#kt_login_signup_cancel').on('click', function(e) {
                    e.preventDefault();

                    _showForm('signin');
                });
            }

            var _handleForgotForm = function(e) {
                var validation;

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validation = FormValidation.formValidation(
                    KTUtil.getById('kt_login_forgot_form'), {
                        fields: {
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email address is required'
                                    },
                                    emailAddress: {
                                        message: 'The value is not a valid email address'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                // Handle submit button
                $('#kt_login_forgot_submit').on('click', function(e) {
                    e.preventDefault();

                    validation.validate().then(function(status) {
                        if (status == 'Valid') {
                            // Submit form
                            KTUtil.scrollTop();
                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function() {
                                KTUtil.scrollTop();
                            });
                        }
                    });
                });

                // Handle cancel button
                $('#kt_login_forgot_cancel').on('click', function(e) {
                    e.preventDefault();

                    _showForm('signin');
                });
            }

            // Public Functions
            return {
                // public functions
                init: function() {
                    _login = $('#kt_login');

                    _handleSignInForm();
                    _handleSignUpForm();
                    _handleForgotForm();
                }
            };
        }();

        // Class Initialization
        jQuery(document).ready(function() {
            KTLogin.init();
        });

        AOS.init();
    </script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>