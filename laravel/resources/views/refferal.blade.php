@extends('Layout.usergame2')
@section('content')
    <div class="active" id="via-email">
        <form class="register-form row w-25" style="margin: 100px auto 0 auto; color: white !important;">
            <h2>Refferal</h2>
            @csrf
            <div class="col-md-12 col-12">
                <p>My Code: {{user('id')}}</p>
            </div>
            <div class="col-md-12 col-12">
                <p>My URL: <a href="{{url('register?refer'.user('id'))}}">{{url('register?refer'.user('id'))}}</a></p>
            </div>
        </form>
    </div>
@endsection