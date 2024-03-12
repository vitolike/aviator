@extends('Layout.usergame2')
@section('content')
    <div class="active" id="via-email">
        <form class="register-form row w-25" style="margin: 100px auto 0 auto; color: white !important;"
            action="/wallet_transfer" method="post" id="amounttransfer">
            <h2>{{$title}}</h2>
            @csrf
            <div class="col-md-12 col-12">
                <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                    <span class="input-group-text" id="addon-wrapping">
                        <span class="material-symbols-outlined bold-icon">
                            badge
                        </span>
                    </span>
                    <input type="text" class="form-control ps-0" id="userid" placeholder="User Id" name="userid">
                </div>
            </div>
            <div class="col-12">
                <div class="input-group flex-nowrap mb-3 promocode align-items-center">
                    <span class="input-group-text" id="addon-wrapping">
                        <span class="material-symbols-outlined bold-icon">
                            money
                        </span>
                    </span>
                    <input type="number" class="form-control ps-0" id="amount" placeholder="Amount" name="amount">
                </div>
            </div>
            <div class="col-12">
                <label for="promo_code" id="promo_code_error" class="error"></label>
            </div>
            <button type="submit" class="btn orange-btn md-btn custm-btn-2 mx-auto mt-3 mb-0 registerSubmit">Transfer Now</button>

        </form>
    </div>
@endsection
@section('js')
<script>
   setInterval(() => {
                                    $.ajax({
                                        url: '/game-cron',
                                        type: "GET",
                                        dataType: "json",
                                        success: function(intialData) {}
                                    });
                                }, 1000);
</script>
@endsection