<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!--====== Title ======-->
    <title>Betting company {{env('APP_NAME')}} - online sports betting</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/png" />

    <!--====== Material Design Icons CSS ======-->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--====== mCustomScrollbar CSS ======-->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />

    <!--====== Pretty Checkbox CSS ======-->
    <link rel="stylesheet" href="css/pretty-checkbox.min.css" />
    <!--====== Cuntry Selection CSS ======-->
    <link rel="stylesheet" href="css/niceCountryInput.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.ccpicker.css">

    <!--====== Owl Carousel CSS ======-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="css/style.css" />

    <!-- ====== Toastr CSS ====== -->
    <link rel="stylesheet" href="css/toastr.min.css" />

    <!-- ====== Datatable CSS ====== -->
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/responsive.dataTables.min.css" />



    <style>
        label.error {
            color: #fa0000;
            font-size: 14px;
            font-weight: 500;
        }

        #success_msg {
            color: #6b7d8e !important;
            text-align: center !important;
            font-size: 14px !important;
            font-weight: 500 !important;
        }

        .okbtn {
            min-width: auto;
            font-size: 18px !important;
        }

        .tab_title {
            padding: 10px;
        }

        .tab-content>.active {
            display: contents;
        }

        .avatar_img {
            padding: 10px;
        }

        #view_password {
            left: auto;
            right: 5px;
        }

        #view_password_register {
            margin-right: 10px;
        }
    </style>

    @yield('css')
</head>

<body class="dark-bg-main">
    @include('include.header')
    @yield('content')
    @include('include.footer')
    <input type="hidden" id="referral_code" value="">
    <!--====== Login Modal Start ======-->
    <div class="modal fade l-modal" id="login-modal" tabindex="-1" aria-labelledby="login-modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header login-header">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    <h5 class="modal-title" id="exampleModalLabel">SITE ENTRANCE</h5>
                </div>
                <div class="modal-body pt-1">
                    <form class="login-form" method="post" action="#"
                        name="loginForm" id="loginForm">
                        @csrf
                        <div class="login-controls">
                            <label for="Username">
                                <span class="material-symbols-outlined input-ico">
                                    person
                                </span>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Your email/phone">
                            </label>
                        </div>

                        <div class="login-controls">
                            <label for="password">
                                <span class="material-symbols-outlined input-ico">
                                    lock
                                </span>
                                <input type="password" class="form-control" id="password" placeholder="password"
                                    name="password">

                                <span class="material-symbols-outlined input-ico" id="view_password">
                                    visibility_off
                                </span>
                            </label>
                        </div>

                        <div>
                            <label id="username-error" class="error" for="username" style="display: none;"></label>
                            <label id="password-error" class="error" for="password" style="display: none;"></label>
                            <label id="login-error" class="error"></label>
                        </div>

                        <div class="form-check form-switch md-switch d-flex align-items-center checkforlogin">
                            <input class="form-check-input me-1" type="checkbox" id="rememberme">
                            <label class="form-check-label f-14 ms-1" for="rememberme">Remember me</label>
                        </div>
                        <button class="btn green-btn md-btn custm-btn-2 mx-auto mt-3 mb-1"
                            id="loginSubmit">LOGIN</button>

                        <a href="javascript:void(0);" class="link-text f-14 d-flex justify-content-center"
                            data-bs-toggle="modal" data-bs-target="#forgot-modal" id="forgotPassword">Forgot your
                            password?</a>
                    </form>
                </div>
                <div class="login-footer mt-1">
                    <h4 class="f-14 d-flex justify-content-center reg_btn">Not registered yet?</h4>
                    <button class="btn orange-btn md-btn custm-btn-2 mx-auto mt-1 mb-2" data-bs-toggle="modal"
                        data-bs-target="#register-modal">REGISTER</button>
                </div>
            </div>
        </div>
    </div>
    <!--====== Login Modal End ======-->

    <!--====== Forgot Modal Start ======-->
    <div class="modal fade l-modal" id="forgot-modal" tabindex="-1" aria-labelledby="forgot-modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header login-header">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <h5 class="modal-title" id="exampleModalLabel">PASSWORD RECOVERY</h5>
                </div>
                <div class="modal-body pt-0">
                    <label id="registerError" class="error"></label>
                    <p class="link-text f-14 email_text">To recover your password, enter your email or phone number
                        used during registration</p>
                    <form class="login-form" method="post" id="forgotPasswordForm">
                        <input type="hidden" name="otp_id" id="otp_id">
                        <div class="login-controls" id="user_name_div">
                            <label for="Username">
                                <input type="text" class="form-control text-indent-0" id="user_name"
                                    placeholder="Your email/phone" name="username" required>
                            </label>
                        </div>
                        <div class="login-controls" id="otp_div">
                            <label for="otp">
                                <input type="text" class="form-control text-indent-0" id="otp"
                                    placeholder="Verification Code" name="otp">
                            </label>
                        </div>
                        <div>
                            <label id="otp_error" class="error"></label>
                        </div>
                        <button class="btn green-btn md-btn custm-btn-2 mx-auto mt-3 mb-3 w-100"
                            id="processSubmit">PROCEED</button>
                        <a href="#" class="link-text f-14 d-flex justify-content-center"
                            data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login-modal">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== Forgot Modal End ======-->


    <!--====== Password Modal Start ======-->
    <div class="modal fade l-modal" id="reset-password-modal" tabindex="-1" aria-labelledby="reset-password-modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header login-header">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    <h5 class="modal-title" id="exampleModalLabel">NEW PASSWORD CREATION</h5>
                </div>
                <div class="modal-body pt-0">
                    <form class="login-form" action="#" method="post" id="resetPasswordForm">
                        <input type="hidden" name="username" id="reset_username">
                        <div class="login-controls">
                            <label for="password">
                                <span class="material-symbols-outlined input-ico">
                                    lock
                                </span>
                                <input type="password" class="form-control" id="new_password" placeholder="Password"
                                    name="password" required>
                            </label>
                        </div>

                        <div class="login-controls">
                            <label for="password">
                                <span class="material-symbols-outlined input-ico">
                                    lock
                                </span>
                                <input type="password" class="form-control" id="confirm_password"
                                    placeholder="Confirm the password" name="confirm_password" required>
                            </label>
                        </div>
                        <div>
                            <label id="confirm_password-error" class="error" for="confirm_password"></label>
                            <label id="new_password-error" class="error" for="new_password"></label>
                        </div>
                        <button class="btn green-btn md-btn custm-btn-2 mx-auto mt-3 mb-3 w-100"
                            id="saveSubmit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== Password Modal End ======-->

    <!--====== Register Modal Start ======-->
    <div class="modal fade l-modal register-modal-popup" id="register-modal" tabindex="-1"
        aria-labelledby="register-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="dice-ico modal-ico"></div>
                <div class="chip-ico modal-ico"></div>
                <div class="ychip-ico modal-ico"></div>
                <div class="ball-ico modal-ico"></div>
                <div class="custom-header">
                    <div class="pa-40 pb-0">
                        <button type="button" class="btn btn-transparent text-white p-0 close-absolute"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="material-symbols-outlined">
                                close
                            </span>
                        </button>
                        <h5 class="register-title mb-3">REGISTER</h5>
                    </div>
                    <div class="register-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="oneclick-tab" data-bs-toggle="tab"
                                    data-bs-target="#oneclick" type="button" role="tab"
                                    aria-controls="oneclick" aria-selected="true">
                                    <span class="material-symbols-outlined">
                                        pan_tool_alt
                                    </span>One Click
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link disabled" tabindex="-1" aria-disabled="true">
                                    <span class="material-symbols-outlined">
                                        phone_iphone
                                    </span>Via moblie phone
                                </button>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="via-email-tab" data-bs-toggle="tab"
                                    data-bs-target="#via-email" type="button" role="tab"
                                    aria-controls="via-email" aria-selected="false">
                                    <span class="material-symbols-outlined">
                                        mail
                                    </span>Via email
                                </button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link disabled" tabindex="-1" aria-disabled="true">
                                    <span class="material-symbols-outlined">
                                        forum
                                    </span>Via social network
                                </button>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="modal-body p-0">
                    <div class="register-tabs">
                        <div class="tab-content" id="myTabContent">
                            {{-- <div class="tab-pane fade" id="oneclick" role="tabpanel"
                                aria-labelledby="oneclick-tab">
                                <form class="register-form row" action="http://52.71.176.55:8082/register_post"
                                    method="POST" name="registerForm" id="registerOneClickForm">
                                    <input type="hidden" name="country" id="countries" value="IN">
                                    <input type="hidden" name="register_type" id="register_type" value="1">
                                    <div class="col-md-6 col-12">
                                        <div class="input-group mb-3">
                                            <div class="niceCountryInputSelector" data-selectedcountry="IN"
                                                data-showspecial="false" data-showflags="true"
                                                data-i18nall="All selected" data-i18nnofilter="No selection"
                                                data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="input-group flex-nowrap mb-3">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined">
                                                    payments
                                                </span>
                                            </span>
                                            <select class="form-select custom-select" id="inputGroupSelect01"
                                                name="currency">
                                                <option selected value="₹">INR</option>
                                                <option value="$">USD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    settings
                                                </span>
                                            </span>
                                            <input type="text" class="form-control ps-0" id="promocode"
                                                name="promocode" placeholder="Promocode in case you have one">
                                            <label for="promocode" id="promocode_error"></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="checks-bg">
                                            <div class="pretty p-svg p-thick">
                                                <input type="checkbox" checked id="one_click_check" />
                                                <div class="state">
                                                    <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                        <path
                                                            d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                                                            style="stroke: white;fill:white;"></path>
                                                    </svg>
                                                    <label>I confirm that I am of legal age and agree with the <a>site
                                                            rules</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="btn orange-btn md-btn custm-btn-2 mx-auto mt-3 mb-0 registerSubmit"
                                        data-bs-toggle="modal" data-bs-target="#userpassword-modal"
                                        id="one_click_register">START GAME</button>
                                </form>
                            </div> --}}
                            <div class="tab-pane fade show active" id="via-email" role="tabpanel"
                                aria-labelledby="via-email-tab">
                                <form class="register-form row" action="/auth/register" method="post"
                                    name="registerForm" id="registerViaEmailForm">
                                    <input type="hidden" name="country" id="countries" value="IN">
                                    <input type="hidden" name="register_type" id="register_type" value="3">
                                    @csrf
                                    <div class="col-md-6 col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    badge
                                                </span>
                                            </span>
                                            <input type="text" class="form-control ps-0" id="name"
                                                placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    male
                                                </span>
                                            </span>
                                            <select class="form-select custom-select" id="gender" name="gender">
                                                <option selected value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    smartphone
                                                </span>
                                            </span>
                                            <input type="number" class="form-control ps-0" id="mobile"
                                                placeholder="Mobile" name="mobile">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    mail
                                                </span>
                                            </span>
                                            <input type="email" class="form-control ps-0" id="reg_email"
                                                placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    lock
                                                </span>
                                            </span>
                                            <input type="password" class="form-control ps-0" id="regpassword"
                                                placeholder="Password" name="password">
                                            <span class="material-symbols-outlined input-ico"
                                                id="view_password_register">
                                                visibility_off
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="input-group flex-nowrap mb-3">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined">
                                                    payments
                                                </span>
                                            </span>
                                            <select class="form-select custom-select" id="currency" name="currency">
                                                <option selected value="₹">INR</option>
                                                <option value="$">USD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="input-group mb-3">
                                            <div class="niceCountryInputSelector" data-selectedcountry="IN"
                                                data-showspecial="false" data-showflags="true"
                                                data-i18nall="All selected" data-i18nnofilter="No selection"
                                                data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <span class="material-symbols-outlined bold-icon">
                                                    settings
                                                </span>
                                            </span>
                                            <input type="text" class="form-control ps-0" id="promo_code"
                                                name="promocode" placeholder="Enter Promocode" value="{{isset($_GET['refer']) ? $_GET['refer'] : ''}}">
                                            {{-- <!-- <div class="CheckButton-icon d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="Icon_icon__2Th0s"><path d="M7 14c-.627 0-1.224-.109-1.802-.264L6.53 11.96c.156.014.309.041.469.041A5 5 0 007 2a4.937 4.937 0 00-3.519 1.481L6 6H0V0l2.055 2.055A6.961 6.961 0 017 0a7 7 0 110 14zM3.703 9.012l4.97-4.08 1.09 1.431-6.113 6.2-.005-.007-.007.006L.23 8.772l1.42-1.249z"></path></svg>
                                            </div>
                                            <button class="btn btn-transparent check-btn">Check</button> --> --}}
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <label for="promo_code" id="promo_code_error" class="error"></label>
                                    </div>

                                    <div class="col-12">
                                        <div class="checks-bg">
                                            <div class="pretty p-svg p-thick">
                                                <input type="checkbox" id="email_policy" checked />
                                                <div class="state">
                                                    <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                        <path
                                                            d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                                                            style="stroke: white;fill:white;"></path>
                                                    </svg>
                                                    <label>I confirm that I am of legal age and agree with the <a>site
                                                            rules</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn orange-btn md-btn custm-btn-2 mx-auto mt-3 mb-0 registerSubmit"
                                        id="register_via_email">START GAME</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====== Register Modal End ======-->



    <!--====== Avatar Modal Start ======-->
    <div class="modal fade" id="avtar-modal" tabindex="-1" aria-labelledby="avtar-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">CHOOSE GAME AVATAR </h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-data-tbl mt-2">
                        <div class="list-body scroll-div list-body1">
                            <div id="image_div">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Avatar Modal End ======-->

    <!--====== Plugin js ======-->
    <script src="js/jquery.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!--====== Slimscroll js ======-->
    <script src="js/jquery.mCustomScrollbar.js"></script>


    <!--====== Country Selection js ======-->
    <script src="js/niceCountryInput.js"></script>
    <script src="js/jquery.ccpicker.js" type="text/javascript"></script>

    <!--====== Animation Selection js ======-->
    <script src='js/anime.min.js'></script>

    <!--====== Owl Carousel js ======-->
    <script src='js/owl.carousel.min.js'></script>

    <!--====== Main js ======-->
    <script src="js/main.js"></script>

    <!--====== Validate js ======-->
    <script src="js/jquery.validate.min.js"></script>

    <!--====== Toastr js ======-->
    <script src="js/toastr.min.js"></script>

    <!--====== Datatable js ======-->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/dataTables.responsive.min.js"></script>
    <script src="unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>

    <script>
        var successMessage = '';
        var errorMessage = '';

        if (successMessage != undefined && successMessage != '') {
            swal('Success', successMessage, "success");
            'false';
        } else if (errorMessage != undefined && errorMessage != '') {
            swal('Error', errorMessage, "error");
            'false';
        }

        $.ajax({
            url: 'get_user_details',
            type: 'get',
            success: function(result) {
                if (result.isSuccess) {
                    $("#avatar_img").prop('src', result.data.avatar)
                    $("#username").text(result.data.username)
                    if (result.data.notification != '') {
                        swal(
                            'Notification',
                            result.data.notification,
                            'success'
                        ).then(function() {
                            $.ajax({
                                url: 'update_is_notify',
                                type: 'post',
                                data: {
                                    'id': result.data.id,
                                    'request_type': result.data.request_type,
                                },
                            })
                        });
                    }
                }
            }
        })
    </script>
    <script src="user/login.js"></script>
    @yield('js')
</body>

</html>
