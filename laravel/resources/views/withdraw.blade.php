@extends('Layout.usergame')
@section('content')
    <div class="deposite-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="pay-tabs">
                        <a href="/deposit" class="custom-tabs-link">DEPOSIT</a>
                        <a href="#" class="custom-tabs-link active">WITHDRAW</a>
                    </div>
                    <div class="pay-options">
                        <div class="payment-cols">
                            <div class="grid-view">


                                <!--<div class="grid-list">-->
                                <!--    <button class="btn payment-btn" data-bs-toggle="modal" data-bs-target="#withdraw-modal"-->
                                <!--        onclick="withdraw('1' , '')">-->
                                <!--        <img src="images/app-logo/g_pay_mt.svg " />-->
                                <!--        <div class="PaymentCard_limit">GPay</div>-->
                                <!--    </button>-->
                                <!--</div>-->




                                <!--<div class="grid-list">-->
                                <!--    <button class="btn payment-btn" data-bs-toggle="modal" data-bs-target="#withdraw-modal"-->
                                <!--        onclick="withdraw('2' , '')">-->
                                <!--        <img src="images/app-logo/phone_pe_mt.svg " />-->
                                <!--        <div class="PaymentCard_limit">PhonePe</div>-->
                                <!--    </button>-->
                                <!--</div>-->
                                
                                
                                <div class="grid-list">
                                    <button class="btn payment-btn" data-bs-toggle="modal" data-bs-target="#withdraw-modal"
                                        onclick="withdraw('6' , '')">
                                        <img src="images/app-logo/interkassa_net_banking.svg " />
                                        <div class="PaymentCard_limit">Net Banking</div>
                                    </button>
                                </div>

                                <div class="grid-list">
                                    <button class="btn payment-btn" data-bs-toggle="modal" data-bs-target="#withdraw-modal"
                                        onclick="withdraw('3' , '')">
                                        <img src="images/app-logo/upiMt.svg " />
                                        <div class="PaymentCard_limit">UPI</div>
                                    </button>
                                </div>

                                <!--<div class="grid-list">-->
                                <!--    <button class="btn payment-btn" data-bs-toggle="modal" data-bs-target="#withdraw-modal"-->
                                <!--        onclick="withdraw('5' , '')">-->
                                <!--        <img src="images/app-logo/paytm_amount.svg " />-->
                                <!--        <div class="PaymentCard_limit">Payment</div>-->
                                <!--    </button>-->
                                <!--</div>-->

                                <!--<div class="grid-list">-->
                                <!--    <button class="btn payment-btn" data-bs-toggle="modal" data-bs-target="#withdraw-modal"-->
                                <!--        onclick="withdraw('9' , '')">-->
                                <!--        <img src="images/app-logo/imps.svg " />-->
                                <!--        <div class="PaymentCard_limit">imps</div>-->
                                <!--    </button>-->
                                <!--</div>-->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade l-modal w-480" id="withdraw-modal" tabindex="-1" aria-labelledby="withdraw-modal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header login-header justify-content-center">
                    <span class="material-symbols-outlined absolute-btn text-dark f-18 bold-icon m-0"
                        data-bs-dismiss="modal" aria-label="Close">
                        close
                    </span>
                    <h5 class="modal-title pt-2" id="exampleModalLabel">withdraw Request</h5>
                </div>
                <div class="modal-body pt-1">
                    <form class="login-form text-center" action="/insert/withdrawal" method="post" id="withdraw_form">
                        @csrf
                        <input type="hidden" name="payment_gateway_type" id="payment_gateway_type">
                        <input type="hidden" name="min_withdraw_amount" id="min_withdraw_amount">
                        <div id="amount_div">
                            <label for="amount" class="form-label text-dark">Amount</label>
                            <div class="login-controls">
                                <label for="amount">
                                    <input type="text" class="form-control text-indent-0" id="amount" name="amount"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                                </label>
                            </div>
                            <label for="amount" class="form-label text-secondary">Available Balance : {{wallet(user('id'))}}</label>
                            <input type="hidden" name="wallet_balance" id="balance" value="{{wallet(user('id'),"num")}}">
                        </div>
                        <label id="amount-error" class="error" for="amount"></label>

                        <div id="account_div">
                            <label for="account_no" class="form-label text-dark">Account Number</label>
                            <div class="login-controls">
                                <label for="account_no">
                                    <input type="text" class="form-control text-indent-0" id="account_no"
                                        name="account_no" value="{{isset($bank->accountno) ? $bank->accountno : ''}}">
                                </label>
                            </div>
                            <label id="account_no-error" class="error" for="account_no"></label>
                        </div>

                        <div id="acc_holder_name_div">
                            <label for="account_holder_name" class="form-label text-dark ">Account Holder Name</label>
                            <div class="login-controls">
                                <label for="account_holder_name">
                                    <input type="text" class="form-control text-indent-0" id="account_holder_name"
                                        name="account_holder_name" value="{{user('name')}}">
                                </label>
                            </div>
                            <label id="account_holder_name-error" class="error" for="account_holder_name"></label>
                        </div>

                        <div id="">
                            <label for="name" class="form-label text-dark ">Bank Name</label>
                            <div class="login-controls">
                                <label for="bankname">
                                    <input type="text" class="form-control text-indent-0" id="bankname"
                                        name="bank_name" required>
                                </label>
                            </div>
                            <label id="name-error" class="error" for="name"></label>
                        </div>

                        <div id="ifsc_code_div">
                            <label for="ifsc_code" class="form-label text-dark ">IFSC Code</label>
                            <div class="login-controls">
                                <label for="ifsc_code">
                                    <input type="text" class="form-control text-indent-0" id="ifsc_code"
                                        name="ifsc_code" value="{{isset($bank->ifsccode) ? $bank->ifsccode : ''}}">
                                </label>
                            </div>
                            <label id="ifsc_code-error" class="error" for="ifsc_code"></label>
                        </div>

                        <div id="upi_id_div">
                            <label for="upi_id" class="form-label text-dark">UPI ID</label>
                            <div class="login-controls">
                                <label for="upi_id">
                                    <input type="text" class="form-control text-indent-0" id="upi_id"
                                        name="upi_id" value="{{isset($bank->upi_id) ? $bank->upi_id : ''}}">
                                </label>
                            </div>
                            <label id="upi_id-error" class="error" for="upi_id"></label>
                        </div>

                        <div id="mobile_div">
                            <label for="mobile_no" class="form-label text-dark">Mobile Number</label>
                            <div class="login-controls">
                                <label for="mobile_no">
                                    <input type="text" class="form-control text-indent-0" id="mobile_no"
                                        name="mobile_no" value="{{isset($bank->mobile_no) ? $bank->mobile_no : ''}}">
                                </label>
                            </div>
                            <label id="mobile_no-error" class="error" for="mobile_no"></label>
                        </div>

                        <div id="email_div">
                            <label for="email" class="form-label text-dark">Email</label>
                            <div class="login-controls">
                                <label for="email">
                                    <input type="email" class="form-control text-indent-0" id="email"
                                        name="email" value="{{user('email')}}">
                                </label>
                            </div>
                            <label id="email-error" class="error" for="email"></label>
                        </div>

                        <div id="address_div">
                            <label for="address" class="form-label text-dark">Address</label>
                            <div class="login-controls">
                                <label for="address">
                                    <input type="text" class="form-control text-indent-0" id="address"
                                        name="address">
                                </label>
                            </div>
                            <label id="address-error" class="error" for="address"></label>
                        </div>

                        <button class="btn yellow-btn md-btn custm-btn-2 mx-auto mt-3 mb-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{url('user/withdraw.js')}}"></script>
@isset($_GET['msg'])
@if ($_GET['msg'] == 'Success')
    <script>
        toastr.success("Request send successfully!");
    </script>
@endif
@if ($_GET['msg'] == 'error')
    <script>
        toastr.error("Something went wrong!");
    </script>
@endif
@endisset
@endsection