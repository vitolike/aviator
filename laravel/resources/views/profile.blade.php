@extends('Layout.usergame')
@section('content')
    <div class="deposite-container">
        <div class="sub-header option-2">
            <span class="material-symbols-outlined bold-icon f-30">
                person
            </span>
            <h2 class="f-24 fw-bold mt-3">Personal details</h2>
            <p>Use functions of this section and fill in the missing information fields. Expand your capabilities on the
                site!</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-md-3 d-flex">
                    <div class="w-100 bg-white">
                        <div class="custom-accordian ">
                            <div class="accordian-header">
                                <h3>ACCOUNT DETAILS</h3>
                                <button class="btn btn-transparent p-0 accrodian-btn">
                                    <span class="material-symbols-outlined bold-icon text-white">
                                        expand_circle_down
                                    </span>
                                </button>
                            </div>
                            <div class="accordian-body">
                                <div class="acc-row">
                                    <div class="row-controls">
                                        <div class="left">
                                            Bank Name
                                        </div>
                                        <div class="right">
                                            <div class="d-flex align-items-center">

                                                <div>{{isset($bank->bankname)?$bank->bankname:'No Bank name found!'}}</div>

                                                <button class="btn btn-transparent p-0 lh-18 ms-1">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-row">
                                    <div class="row-controls">
                                        <div class="left">
                                            Account number
                                        </div>
                                        <div class="right">
                                            <div class="d-flex align-items-center">
                                                <div>{{isset($bank->accountno)?$bank->accountno:'No Account no found!'}}</div>
                                                <button class="btn btn-transparent p-0 lh-18 ms-1">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-row">
                                    <div class="row-controls">
                                        <div class="left">
                                            IFSC Code
                                        </div>
                                        <div class="right">
                                            <div class="d-flex align-items-center">
                                                <div>{{isset($bank->ifsccode)?$bank->ifsccode:'No IFSC Code found!'}}</div>
                                                <button class="btn btn-transparent p-0 lh-18 ms-1">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18"
                                                        id="changePassword" data-bs-toggle="modal"
                                                        data-bs-target="#change-pwd-modal">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-row">
                                    <div class="row-controls">
                                        <div class="left">
                                            Branch Name
                                        </div>
                                        <div class="right">
                                            <div class="d-flex align-items-center">
                                                <div>{{isset($bank->branchname)?$bank->branchname:'No Branch Found!'}}</div>
                                                <button class="btn btn-transparent p-0 lh-18 ms-1">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18"
                                                        id="changePassword" data-bs-toggle="modal"
                                                        data-bs-target="#change-pwd-modal">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-3 d-flex">
                    <div class="w-100 bg-white">
                        <div class="custom-accordian">
                            <div class="accordian-header">
                                <h3>CONTACT DETAILS</h3>
                                <button class="btn btn-transparent p-0 accrodian-btn">
                                    <span class="material-symbols-outlined bold-icon text-white">
                                        expand_circle_down
                                    </span>
                                </button>
                            </div>
                            <div class="accordian-body">
                                <div class="acc-row">
                                    <div class="row-controls">
                                        <div class="left">
                                            Phone Number
                                        </div>
                                        <div class="right">
                                            <div class="d-flex align-items-center">
                                                <div>{{user('mobile')? user('mobile'):'No mobile no found!' }}</div>
                                                <button class="btn btn-transparent p-0 lh-18 ms-1" data-bs-toggle="modal"
                                                    data-bs-target="#link-phone-modal">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-row">
                                    <div class="row-controls verify-control">
                                        <div class="left">
                                            E-mail
                                        </div>
                                        <div class="right">
                                            <div class="d-flex align-items-center">
                                                <div id="user_email">{{ user('email') }}</div>
                                                <button class="btn btn-transparent p-0 lh-18 ms-1" data-bs-toggle="modal"
                                                    data-bs-target="#link-email-modal" id="emailModal">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-md-4 mb-4">
                    <div class="custom-accordian">
                        <div class="accordian-header">
                            <h3>PERSONAL DETAILS</h3>
                            <button class="btn btn-transparent p-0 accrodian-btn">
                                <span class="material-symbols-outlined bold-icon text-white">
                                    expand_circle_down
                                </span>
                            </button>
                        </div>
                        <input type="hidden" id="member_id" value="" name="member_id">
                        <div class="accordian-body">
                            <div class="profile-row">
                                <div class="Profile_column">
                                    <div class="acc-row">
                                        <div class="row-controls">
                                            <div class="left">
                                                Full name<em>*</em>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div>{{ user('name') }}</div>
                                                <button class="btn btn-transparent p-0 lh-18 ms-1" id="firstlock">
                                                    <span class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                        lock
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="acc-row">
                                        <div class="row-controls">
                                            <div class="left">
                                                Gender<em>*</em>
                                            </div>
                                            <div class="right">
                                                <div class="d-flex align-items-center" id="gender_txt">
                                                    <div>{{ ucfirst(user('gender')) }}</div>
                                                    <button class="btn btn-transparent p-0 lh-18 ms-1" id="genderlock">
                                                        <span
                                                            class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                            lock
                                                        </span>
                                                    </button>
                                                </div>
                                                <label id="gender-error" class="error" for="gender"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-row">
                                        <div class="row-controls">
                                            <div class="left">
                                                Country<em>*</em>
                                            </div>
                                            <div class="right">
                                                <div class="d-flex align-items-center">
                                                    <div>{{ ucfirst(user('country')) }}</div>
                                                    <button class="btn btn-transparent p-0 lh-18 ms-1">
                                                        <span
                                                            class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                            lock
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Profile_divide "></div>
                                <div class="Profile_column">
                                    <div class="acc-row">
                                        <div class="row-controls">
                                            <div class="left">
                                                Currency<em>*</em>
                                            </div>
                                            <div class="right">
                                                <div class="d-flex align-items-center" id="birth_date_txt">
                                                    <div>{{ user('currency') }}</div>
                                                    <button class="btn btn-transparent p-0 lh-18 ms-1" id="birthdatelock">
                                                        <span
                                                            class="material-symbols-outlined bold-icon text-muted f-18 lh-18">
                                                            lock
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="acc-row">
                                        <div class="row-controls">
                                            <div class="left">
                                                Pass<em>*</em>
                                            </div>
                                            <div class="right">
                                                <div class="login-controls w-100 m-0">
                                                    <label for="Username">
                                                        <input type="text" class="form-control text-indent-0"
                                                            id="document">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
