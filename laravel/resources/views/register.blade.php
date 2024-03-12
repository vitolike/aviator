@extends('Layout.usergame2')
@section('content')
<div class="active" id="via-email">
    <form class="register-form row w-75" style="margin: 100px auto 0 auto; color: white !important;" action="/auth/register" method="post" name="registerForm" id="registerViaEmailForm">
        <h2>Register</h2>
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
                    <input type="text" class="form-control ps-0" id="name" placeholder="Name" name="name">
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
                    <input type="number" class="form-control ps-0" id="mobile" placeholder="Mobile" name="mobile">
                </div>
            </div>
            <div class="col-12">
                <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                    <span class="input-group-text" id="addon-wrapping">
                        <span class="material-symbols-outlined bold-icon">
                            mail
                        </span>
                    </span>
                    <input type="email" class="form-control ps-0" id="reg_email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="col-12">
                <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                    <span class="input-group-text" id="addon-wrapping">
                        <span class="material-symbols-outlined bold-icon">
                            lock
                        </span>
                    </span>
                    <input type="password" class="form-control ps-0" id="regpassword" placeholder="Password"
                        name="password">
                    <span class="material-symbols-outlined input-ico" id="view_password_register">
                        visibility_off
                    </span>
                </div>
            </div>
            {{-- <div class="col-md-6 col-12">
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
                    <div class="niceCountryInputSelector" data-selectedcountry="IN" data-showspecial="false"
                        data-showflags="true" data-i18nall="All selected" data-i18nnofilter="No selection"
                        data-i18nfilter="Filter" data-onchangecallback="onChangeCallback">
                    </div>
                </div>
            </div> --}}
            <div class="col-12">
                <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                    <span class="input-group-text" id="addon-wrapping">
                        <span class="material-symbols-outlined bold-icon">
                            settings
                        </span>
                    </span>
                    <input type="text" class="form-control ps-0" id="promo_code" name="promocode"
                        placeholder="Enter Promocode" value="{{ isset($_GET['refer']) ? $_GET['refer'] : '' }}" {{ isset($_GET['refer']) ? 'readonly' : '' }}>
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
            <button type="submit" class="btn orange-btn md-btn custm-btn-2 mx-auto mt-3 mb-0 registerSubmit"
                id="register_via_email">START GAME</button>

        </form>
    </div>
@endsection
