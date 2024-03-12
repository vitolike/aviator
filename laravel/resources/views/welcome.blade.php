@extends('Layout.usergame')
@section('content')
<div class="main-container" style=" background-color: rgb(0, 35, 71);">
    <div class="collection-page d-none">
        <!--====== Slider Start ======-->
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="images/01.jpg" class="w-100" /></div>
            <div class="item"><img src="images/02.jpg" class="w-100" /></div>
            <div class="item"><img src="images/03.jpg" class="w-100" /></div>
        </div>
        <!--====== Slider End ======-->
        <!--====== Game List Start ======-->
        <div class="container">
            <div class="title-bg1">
                <h2 class="fw-bold">
                    <!-- <span class="material-symbols-outlined me-2">
                        grid_view
                    </span> -->
                 </h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 mb-4">
                    <div class="game-list-boxs">
                        <div class="position-relative">
                            <img src="images/aviator-img.png" class="w-100" />
                        </div>
                        <div class="px-3 mt-4 pb-2 text-center">
                            <h4 class=" mb-2">
                                @if (session()->has('userlogin'))
                                    <a href="/crash" class="btn demo-btns">
                                        PLAY NOW
                                    </a>
                                @else
                                    <a href="#" class="btn demo-btns" data-bs-toggle="modal"
                                        data-bs-target="#login-modal" id="login">
                                        LOGIN
                                    </a>
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Game List End ======-->
    </div>
</div>
@endsection