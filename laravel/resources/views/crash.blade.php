<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!--====== Title ======-->
    <title>{{ env('APP_NAME') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png" />

    <!--====== Material Design Icons CSS ======-->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--====== mCustomScrollbar CSS ======-->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css" />

    <!--====== Pretty Checkbox CSS ======-->
    <link rel="stylesheet" href="css/pretty-checkbox.min.css" />
    <!--====== Cuntry Selection CSS ======-->
    <link rel="stylesheet" href="css/niceCountryInput.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.ccpicker.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="../../css/bootstrap.css" />

    <!--====== Owl Carousel CSS ======-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="../../css/style.css" />

    <!-- ====== Toastr CSS ====== -->
    <link rel="stylesheet" href="../../css/toastr.min.css" />

    <!-- ====== Datatable CSS ====== -->
    <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../../css/responsive.dataTables.min.css" />

    <script crossorigin src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>


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

        #image_div {
            text-align: -webkit-center;
        }

        .side_logo {
            width: 60px;
        }

        .balance_btn {
            background-color: #003364;
        }

        #invite_link_btn {
            color: #003364;
            background-color: #fff;
        }

        .copy_owner_details:hover {
            color: #0c5396;
        }
    </style>

</head>

<body class="dark-bg-main">




    <style>
        .blink_section {
            opacity: 0.5 !important;
        }

        .stage-board {
            background-color: #000;
        }

        body {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Old versions of Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
        supported by Chrome, Edge, Opera and Firefox */
        }

        /* toastr START */
        .custom-toaster {
            position: fixed;
            top: 50px;
            transform: translateX(-50%);
            left: 50%;
            z-index: 99999;
        }

        .cashout-toaster1,
        .cashout-toaster2 {
            height: 55px;
            border-radius: 55px;
            min-width: 300px;
            background: #123405;
            border: 1px solid #4EAF11;
            display: flex;
            align-items: center;
            transition: all 0.4s;
            padding: 0 0 0 15px;
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            opacity: 0;
            margin-bottom: -55px;
            visibility: hidden;
        }

        .error-toaster1 {
            height: 55px;
            border-radius: 55px;
            min-width: 300px;
            background-color: #B3021B;
            border-color: #B3021B;
            display: flex;
            align-items: center;
            transition: all 0.4s;
            padding: 0 0 0 15px;
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            opacity: 0;
            margin-bottom: -55px;
            visibility: hidden;
        }

        .error-toaster1.show {
            margin: 0;
            opacity: 1;
            visibility: visible;
        }

        .error-toaster2 {
            height: 55px;
            border-radius: 55px;
            min-width: 300px;
            background-color: #B3021B;
            border-color: #B3021B;
            display: flex;
            align-items: center;
            transition: all 0.4s;
            padding: 0 0 0 15px;
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            opacity: 0;
            margin-bottom: -55px;
            visibility: hidden;
        }

        .error-toaster2.show {
            margin: 0;
            opacity: 1;
            visibility: visible;
        }

        .cashout-toaster1.show {
            margin: 0;
            opacity: 1;
            visibility: visible;
        }

        .cashout-toaster2.show {
            opacity: 1;
            visibility: visible;
        }

        .cashout-toaster2 {
            margin-top: 10px;
        }

        .cashout-stop {
            color: #D2D2D2;
        }

        .stop-number {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
        }

        .got-block {
            width: 120px;
            height: 45px;
            background: #4EAF11;
            border-radius: 45px;
            margin-left: 10px;
            overflow: hidden;
        }

        .star-left {
            width: 30px;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.6;
        }

        .star-right {
            width: 30px;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.6;
        }

        .got-amout {
            font-size: 13px;
            line-height: 16px;
            color: #fff;
            font-weight: 500;
            z-index: 2;
        }

        .custom-toaster .material-symbols-outlined {
            color: #72836B;
            font-size: 20px;
            margin-left: 5px;
            cursor: pointer;
            font-variation-settings: 'FILL'0, 'wght'700, 'GRAD'0, 'opsz'48;
        }

        .custom-toaster-error {
            background-color: #B3021B;
            border-color: #B3021B;
            border-radius: 10px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        /* toastr END */

        .hide {
            display: none !important;
        }

        /* .game-play div {
        pointer-events: none;
    } */
        .load-txt {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #fff;
            z-index: 90;
        }

        .stop-action {
            pointer-events: none;
            opacity: 0.7;
        }

        .counter-num {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            font-weight: 700;
            color: #fff;
            z-index: 3;
        }

        .counter-num span {
            font-size: 80px;
            font-weight: 700;
            margin-left: 5px;
        }

        /* .list-body {
        max-height: 500px !important;
    } */
        .text-danger {
            color: #f7001f !important;
        }

        @media (max-width:768px) {
            #auto_increment_number_div .flew_away_section {
                font-size: 18px;
            }

            #auto_increment_number_div #auto_increment_number {
                font-size: 65PX;
                line-height: 40px;
            }

            .center-loading svg {
                width: 100px;
                height: 50px;
            }

            .game-play {
                height: auto;
            }

            #extra_bet_section {
                margin-top: 10px;
            }

            footer {
                display: none;
            }
        }

        .bet-border-red {
            border-color: #f7001f !important;
        }

        .bet-border-yellow {
            border-color: #e69308 !important;
        }
    </style>
    {{-- Preloader area  --}}
    <div class="load-txt">
        <div class="loading-game-1">
            <div class="center-loading text-white text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120">
                    <g fill="#E50539" fill-rule="nonzero">
                        <path
                            d="M67.785 67.77a10.882 10.882 0 0 0 2.995-5.502l18.37-6.36c.47-.163.876-.471 1.16-.88l29.263-42.18a2.343 2.343 0 0 0-.268-2.993L110.153.704a2.344 2.344 0 0 0-3.314 0L95.73 11.813C71.965-5.861 38.683-3.514 17.58 17.588a60.26 60.26 0 0 0-8.829 11.21 2.343 2.343 0 0 0 4.001 2.441 55.575 55.575 0 0 1 8.142-10.336C40.184 1.613 70.512-.68 92.378 15.165l-5.72 5.72c-8.742-5.967-19.302-8.837-29.947-8.1a47.31 47.31 0 0 0-30.183 13.751 47.722 47.722 0 0 0-5.92 7.207 2.344 2.344 0 0 0 3.897 2.605 42.996 42.996 0 0 1 5.337-6.497c14.233-14.234 36.774-16.445 53.436-5.586l-6.818 6.818a33.418 33.418 0 0 0-19.773-4.186A33.338 33.338 0 0 0 36.47 36.48a2.344 2.344 0 0 0 3.314 3.314c8.787-8.786 22.336-10.795 33.215-5.248L58.38 49.163a10.969 10.969 0 0 0-6.164 3.084 10.882 10.882 0 0 0-2.996 5.504l-18.37 6.36c-.47.163-.876.47-1.159.879L.427 107.17a2.343 2.343 0 0 0 .268 2.992l9.152 9.151a2.337 2.337 0 0 0 1.657.687c.6 0 1.2-.23 1.657-.687l11.109-11.109A59.835 59.835 0 0 0 59.99 120a59.873 59.873 0 0 0 42.43-17.571 60.476 60.476 0 0 0 7.162-8.63 2.343 2.343 0 1 0-3.87-2.643 55.793 55.793 0 0 1-6.606 7.959c-19.321 19.32-49.61 21.598-71.487 5.74l5.722-5.723a47.325 47.325 0 0 0 30.058 8.092A47.318 47.318 0 0 0 93.472 93.48a47.82 47.82 0 0 0 5.15-6.09 2.343 2.343 0 0 0-3.82-2.715 43.106 43.106 0 0 1-4.644 5.49c-14.21 14.211-36.783 16.436-53.436 5.587l6.82-6.82a33.416 33.416 0 0 0 19.825 4.182A33.343 33.343 0 0 0 83.53 83.54a2.344 2.344 0 0 0-3.314-3.315c-8.777 8.778-22.34 10.792-33.215 5.25L61.62 70.855a10.97 10.97 0 0 0 6.165-3.084zm40.711-62.095l6.11 6.11-27.712 39.944-16.207 5.61a10.892 10.892 0 0 0-2.903-5.092 10.953 10.953 0 0 0-3.512-2.348l44.224-44.224zM11.504 114.342l-6.11-6.11 27.712-39.944 16.207-5.61a10.892 10.892 0 0 0 2.903 5.092 10.953 10.953 0 0 0 3.512 2.348l-44.224 44.224zm44.018-49.894a6.223 6.223 0 0 1-1.85-4.44l.003-.094c.036-.19.047-.383.035-.579a6.22 6.22 0 0 1 1.812-3.766A6.33 6.33 0 0 1 60 53.726a6.33 6.33 0 0 1 4.478 1.843 6.223 6.223 0 0 1 1.85 4.44l-.003.094a2.325 2.325 0 0 0-.035.579 6.22 6.22 0 0 1-1.812 3.766c-2.47 2.458-6.487 2.457-8.956 0z" />
                        <path
                            d="M113.341 82.064a2.344 2.344 0 0 0-3.115 1.131l-.026.057a2.343 2.343 0 1 0 4.26 1.955l.013-.028a2.344 2.344 0 0 0-1.132-3.115zM7.65 35.765a2.343 2.343 0 0 0-3.072 1.241l-.021.05a2.338 2.338 0 0 0 2.165 3.228c.922 0 1.8-.55 2.173-1.454.5-1.19-.056-2.56-1.245-3.065z" />
                    </g>
                </svg>
                <div class="secondary-font f-40 mt-2 waiting-text"> WAITING FOR NEXT ROUND</div>
                <div class="line-loader mt-2">
                    <div class="fill-line"></div>
                </div>
            </div>
        </div>
    </div>

    @include('include.game-header')

    <div class="custom-toaster">
        <div class="cashout-toaster1 ">
            <div class="cashout-stop">
                <div style="font-weight: 600; color: white;">You have cashed out!</div>
                <div class="stop-number"></div>
            </div>
            <div class="got-block position-relative d-flex align-items-center justify-content-center">
                <img src="images/star.svg" class="star-right" />
                <img src="images/star1.svg" class="star-left" />
                <div class="got-amout">
                    <div style="font-weight: 600;">You got:</div>
                    <div class="out-amount" style="font-weight: 600;"></div>
                </div>
            </div>
            <span class="material-symbols-outlined bold-icon">
                close
            </span>
        </div>

        <div class="cashout-toaster2 ">
            <div class="cashout-stop">
                <div style="font-weight: 600; color: white;">You have cashed out!</div>
                <div class="stop-number"></div>
            </div>
            <div class="got-block position-relative d-flex align-items-center justify-content-center">
                <img src="images/star.svg" class="star-right" />
                <img src="images/star1.svg" class="star-left" />
                <div class="got-amout">
                    <div style="font-weight: 600;">You got:</div>
                    <div class="out-amount" style="font-weight: 600;"></div>
                </div>
            </div>
            <span class="material-symbols-outlined bold-icon">
                close
            </span>
        </div>

        <div class="error-toaster1 justify-content-between custom-toaster-error">
            <div class="msg">You have cashed out!</div>
            <span class="material-symbols-outlined bold-icon me-2" style="color: white;">
                close
            </span>
        </div>

        <div class="error-toaster2 justify-content-between custom-toaster-error">
            <div class="msg">Stage time out!</div>
            <span class="material-symbols-outlined bold-icon me-2" style="color: white;">
                close
            </span>
        </div>
    </div>

    <div class="main-container">
        <!--====== Left Sidebar Start ======-->
        <div class="left-sidebar">
            <div class="tabs-navs">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item active" role="presentation">
                        <button class="nav-link active" id="pills-allbets-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-allbets" type="button" role="tab"
                            aria-controls="pills-allbets" aria-selected="true">All Bets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mybets-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-mybets" type="button" role="tab"
                            aria-controls="pills-mybets" aria-selected="false">My Bets</button>
                    </li>
                    <span class="active-line"></span>
                </ul>
            </div>
            <div class="contents-blocks">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-allbets" role="tabpanel"
                        aria-labelledby="pills-allbets-tab">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bets-count secondary-font f-14">TOTAL BETS : <span class="text-success"
                                    id="total_bets">0</span></div>
                            <div class="custom-badge mx-auto hide" id="prev_win_multi">0.00x</div>
                            <div class="">
                                <button class="btn btn-transparent previous-history d-flex align-items-center"
                                    id="current_hand_btn" onclick="previous_hand(1);">
                                    <span class="material-symbols-outlined f-18 me-1 history-icos">
                                        history
                                    </span>
                                    <span class="material-symbols-outlined f-18 me-1 close-icos">
                                        close
                                    </span>
                                    Previous hand
                                </button>
                                <button
                                    class="btn btn-transparent previous-history selected d-flex align-items-center hide"
                                    id="previous_hand_btn" onclick="previous_hand(2);">
                                    <span class="material-symbols-outlined f-18 me-1 history-icos">
                                        history
                                    </span>
                                    <span class="material-symbols-outlined f-18 me-1 close-icos">
                                        close
                                    </span>
                                    Previous hand
                                </button>
                            </div>
                        </div>
                        <div class="list-data-tbl mt-2">
                            <div class="list-header">
                                <div class="column-1">
                                    User
                                </div>
                                <div class="column-2">
                                    Bet
                                </div>
                                <div class="column-3">
                                    Mult.
                                </div>
                                <div class="column-4">
                                    Cash out
                                </div>
                            </div>
                            <div class="list-body scroll-div list-body0" id="all_bets"> </div>

                            <div class="list-body scroll-div list-body0 hide" id="prev_bets"> </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-mybets" role="tabpanel" aria-labelledby="pills-mybets-tab">
                        <div class="list-data-tbl mt-2">
                            <div class="list-header">
                                <div class="column-1">
                                    Date
                                </div>
                                <div class="column-2">
                                    Bet
                                </div>
                                <div class="column-3">
                                    Mult.
                                </div>
                                <div class="column-4">
                                    Cash out
                                </div>
                                <div class="ps-2"></div>
                            </div>
                            <div class="list-body scroll-div list-body1" id="my_bet_list">
                                @foreach ($mybets as $item)
                                    <div class="list-items">
                                        <div class="column-1 users fw-normal">
                                            {{ dformat($item->created_at, 'h:i') }}
                                        </div>
                                        <div class="column-2">
                                            <button
                                                class="btn btn-transparent previous-history d-flex align-items-center mx-auto fw-normal">
                                                {{ number_format($item->amount, 2) }}₹
                                            </button>
                                        </div>
                                        <div class="column-3">

                                            <div class="bg3 custom-badge mx-auto">
                                                {{ number_format($item->cashout_multiplier, 2) }}x</div>

                                        </div>
                                        <div class="column-4 fw-normal">
                                            {{ number_format($item->amount * $item->cashout_multiplier, 2) }}₹
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--====== Left Sidebar End ======-->
        <!--====== Right Sidebar Start ======-->
        <div class="right-sidebar">
            <div class="game-play">
                <div class="history-top">
                    <div class="stats">
                        <div class="payouts-wrapper">
                            <div class="payouts-block">
                                @foreach ($allresults as $item)
                                    @if ($item->result != 'pending' && $item->result != '')
                                        <div class="bg1 custom-badge">{{ number_format($item->result, 2) }}x</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="shadow">
                        </div>
                        <div class="button-block">
                            <div class="dropdown-toggle button histry-toggle">
                                <div class="trigger">
                                    <span class="material-symbols-outlined">
                                        history
                                    </span>
                                    <span class="material-symbols-outlined dd-icon up-arrow">
                                        arrow_drop_up
                                    </span>
                                    <span class="material-symbols-outlined dd-icon down-arrow">
                                        arrow_drop_down
                                    </span>
                                </div>
                            </div>
                            <div class="history-dropdown">
                                <div class="pa-5 secondary-font text-white pb-0">ROUND HISTORY</div>
                                <div class="d-flex flex-wrap pa-5 round-history-list">

                                    @foreach ($allresults as $item)
                                        @if ($item->result != 'pending' && $item->result != '')
                                            <div class="bg1 custom-badge">{{ number_format($item->result, 2) }}x</div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="d-flex align-items-center justify-content-center">
                <h3 id="auto_increment_number" class="text-center text-white">1.00x</h3>
            </div> -->
                <div class="stage-board">
                    <div class="counter-num text-center" id="auto_increment_number_div" style="display: none;">
                        <div class="secondary-font f-40 flew_away_section" style="display: none;">FLEW AWAY!</div>
                        <div id="auto_increment_number">1.00<span>X</span></div>
                    </div>
                    <!-- <div class="counter-num" id="auto_increment_number" style="display: none;">1.00<span>X</span></div> -->
                    <div class="loading-game">
                        <div class="center-loading text-white text-center game-centeral-loading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                viewBox="0 0 120 120">
                                <g fill="#E50539" fill-rule="nonzero">
                                    <path
                                        d="M67.785 67.77a10.882 10.882 0 0 0 2.995-5.502l18.37-6.36c.47-.163.876-.471 1.16-.88l29.263-42.18a2.343 2.343 0 0 0-.268-2.993L110.153.704a2.344 2.344 0 0 0-3.314 0L95.73 11.813C71.965-5.861 38.683-3.514 17.58 17.588a60.26 60.26 0 0 0-8.829 11.21 2.343 2.343 0 0 0 4.001 2.441 55.575 55.575 0 0 1 8.142-10.336C40.184 1.613 70.512-.68 92.378 15.165l-5.72 5.72c-8.742-5.967-19.302-8.837-29.947-8.1a47.31 47.31 0 0 0-30.183 13.751 47.722 47.722 0 0 0-5.92 7.207 2.344 2.344 0 0 0 3.897 2.605 42.996 42.996 0 0 1 5.337-6.497c14.233-14.234 36.774-16.445 53.436-5.586l-6.818 6.818a33.418 33.418 0 0 0-19.773-4.186A33.338 33.338 0 0 0 36.47 36.48a2.344 2.344 0 0 0 3.314 3.314c8.787-8.786 22.336-10.795 33.215-5.248L58.38 49.163a10.969 10.969 0 0 0-6.164 3.084 10.882 10.882 0 0 0-2.996 5.504l-18.37 6.36c-.47.163-.876.47-1.159.879L.427 107.17a2.343 2.343 0 0 0 .268 2.992l9.152 9.151a2.337 2.337 0 0 0 1.657.687c.6 0 1.2-.23 1.657-.687l11.109-11.109A59.835 59.835 0 0 0 59.99 120a59.873 59.873 0 0 0 42.43-17.571 60.476 60.476 0 0 0 7.162-8.63 2.343 2.343 0 1 0-3.87-2.643 55.793 55.793 0 0 1-6.606 7.959c-19.321 19.32-49.61 21.598-71.487 5.74l5.722-5.723a47.325 47.325 0 0 0 30.058 8.092A47.318 47.318 0 0 0 93.472 93.48a47.82 47.82 0 0 0 5.15-6.09 2.343 2.343 0 0 0-3.82-2.715 43.106 43.106 0 0 1-4.644 5.49c-14.21 14.211-36.783 16.436-53.436 5.587l6.82-6.82a33.416 33.416 0 0 0 19.825 4.182A33.343 33.343 0 0 0 83.53 83.54a2.344 2.344 0 0 0-3.314-3.315c-8.777 8.778-22.34 10.792-33.215 5.25L61.62 70.855a10.97 10.97 0 0 0 6.165-3.084zm40.711-62.095l6.11 6.11-27.712 39.944-16.207 5.61a10.892 10.892 0 0 0-2.903-5.092 10.953 10.953 0 0 0-3.512-2.348l44.224-44.224zM11.504 114.342l-6.11-6.11 27.712-39.944 16.207-5.61a10.892 10.892 0 0 0 2.903 5.092 10.953 10.953 0 0 0 3.512 2.348l-44.224 44.224zm44.018-49.894a6.223 6.223 0 0 1-1.85-4.44l.003-.094c.036-.19.047-.383.035-.579a6.22 6.22 0 0 1 1.812-3.766A6.33 6.33 0 0 1 60 53.726a6.33 6.33 0 0 1 4.478 1.843 6.223 6.223 0 0 1 1.85 4.44l-.003.094a2.325 2.325 0 0 0-.035.579 6.22 6.22 0 0 1-1.812 3.766c-2.47 2.458-6.487 2.457-8.956 0z" />
                                    <path
                                        d="M113.341 82.064a2.344 2.344 0 0 0-3.115 1.131l-.026.057a2.343 2.343 0 1 0 4.26 1.955l.013-.028a2.344 2.344 0 0 0-1.132-3.115zM7.65 35.765a2.343 2.343 0 0 0-3.072 1.241l-.021.05a2.338 2.338 0 0 0 2.165 3.228c.922 0 1.8-.55 2.173-1.454.5-1.19-.056-2.56-1.245-3.065z" />
                                </g>
                            </svg>
                            <div class="secondary-font f-40 mt-2 waiting-text"> WAITING FOR NEXT ROUND</div>
                            <div class="line-loader mt-2">
                                <div class="fill-line"></div>
                            </div>
                        </div>
                        <div class="bottom-left-plane">
                            <img class="plane-static" src="images/p.png" />
                        </div>
                    </div>
                    <img src="images/bg-rotate-old.svg" class="rotateimage rotatebg" />
                    <canvas id="myCanvas" height=400 width="1900"></canvas>
                </div>
                <!-- <h6 id="running_type" class="text-center text-white">...........</h6> -->
                <div class="bet-controls">
                    <div class="bet-control double-bet" id="main_bet_section">
                        <div class="controls">
                            <div class="bet-box-action" style="display: none;" id="add_extra_bet_section_btn">
                                <span class="material-symbols-outlined text-success">
                                    add_circle
                                </span>
                            </div>
                            <div class="navigation">
                                <input id="bet_type" type="hidden" value="0">
                                <div class="navigation-switcher">
                                    <div class="slider bet-btn">Bet</div>
                                    <div class="slider auto-btn">Auto</div>
                                    <span class="active-line"></span>
                                </div>
                            </div>
                            <div class="first-row auto-game-feature">
                                <div class="bet-block">
                                    <div class="spinner">
                                        <div class="input">
                                            <input id="bet_amount" value="10.00" type="text"
                                                class="main_bet_amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        </div>
                                        <div class="qty-buttons">
                                            <button class="minus " id="main_minus_btn"
                                                onclick="bet_amount_decremental(this);">
                                                <span class="material-symbols-outlined">
                                                    remove
                                                </span>
                                            </button>
                                            <button class="plus" id="main_plus_btn"
                                                onclick="bet_amount_incremental(this);">
                                                <span class="material-symbols-outlined">
                                                    add
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bets-opt-list">
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">100</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">200</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">500</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt main_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">1000</span><span class="currency">₹</span></button>
                                    </div>
                                </div>
                                <div class="buttons-block" id="bet_button">
                                    <button class="btn btn-success bet font-family-title ng-star-inserted main_bet_btn"
                                        onclick="bet_now(this, 0);" id="main_bet_now"><label
                                            class="font-family-title label">BET</label></button>
                                </div>
                                <div class="buttons-block" id="cancle_button" style="display: none;">
                                    <div class="btn-tooltip f-14 mb-1" id="waiting" style="display: none;">Waiting
                                        for next round</div>
                                    <button
                                        class="btn btn-danger bet font-family-title height-70 ng-star-inserted main_bet_btn"
                                        onclick="cancle_now(this, 0);" id="main_cancel_now"><label
                                            class="font-family-title label">CANCEL</label></button>
                                </div>
                                <div class="buttons-block" id="cashout_button" style="display: none;">
                                    <input type="hidden" name="main_bet_id" id="main_bet_id">
                                    <button class="btn btn-warning bet font-family-title ng-star-inserted"
                                        onclick="cash_out_now(this, 0);">
                                        <label class="font-family-title label">CASH OUT</label>
                                        <div class="font-family-title label" id="cash_out_amount"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="second-row">
                                <!-- <div class="auto-bet-wrapper">
                                <div class="auto-bet">
                                    <button class="btn btn-sm btn-secondary auto-play-btn secondary-font"> Auto play </button>
                                </div>
                            </div> -->
                                <div class="cashout-block m-0">
                                    <div class="cash-out-switcher">
                                        <div class="form-check form-switch lg-switch d-flex align-items-center pe-5">
                                            <label class="form-check-label f-12 me-1" for="bet">Auto Bet</label>
                                            <input class="form-check-input m-0" type="checkbox" role="bet"
                                                id="main_auto_bet">
                                        </div>
                                        <div class="form-check form-switch lg-switch d-flex align-items-center">
                                            <label class="form-check-label f-12 me-1" for="cashout">Auto Cash
                                                Out</label>
                                            <input class="form-check-input m-0" type="checkbox" role="cashout"
                                                id="main_checkout">
                                        </div>
                                    </div>
                                    <div class="cashout-spinner-wrapper">
                                        <div class="cashout-spinner disabled">
                                            <div class="spinner small">
                                                <div class="input full-width">
                                                    <input class="f-16 font-weight-bold" disabled type="text"
                                                        value="1.01" id="main_incrementor"
                                                        onchange="main_incrementor_change(this.value);">
                                                </div>
                                                <div class="text text-x">
                                                    <span class="material-symbols-outlined">
                                                        close
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bet-control double-bet" id="extra_bet_section">
                        <div class="controls">
                            <div class="bet-box-action" id="remove_extra_section_btn">
                                <span class="material-symbols-outlined">
                                    do_not_disturb_on
                                </span>
                            </div>
                            <div class="navigation">
                                <input id="bet_type" type="hidden" value="0">
                                <div class="navigation-switcher">
                                    <div class="slider bet-btn">Bet</div>
                                    <div class="slider auto-btn">Auto</div>
                                    <span class="active-line"></span>
                                </div>
                            </div>
                            <div class="first-row auto-game-feature">
                                <div class="bet-block">
                                    <div class="spinner">
                                        <div class="input">
                                            <input id="bet_amount" value="10.00" class="extra_bet_amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                        </div>
                                        <div class="qty-buttons">
                                            <button class="minus" id="extra_minus_btn"
                                                onclick="bet_amount_decremental(this);">
                                                <span class="material-symbols-outlined">
                                                    remove
                                                </span>
                                            </button>
                                            <button class="plus" id="extra_plus_btn"
                                                onclick="bet_amount_incremental(this);">
                                                <span class="material-symbols-outlined">
                                                    add
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bets-opt-list">
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">100</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">200</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">500</span><span class="currency">₹</span></button>
                                        <button class="btn btn-secondary btn-sm bet-opt extra_amount_btn"
                                            onclick="select_direct_bet_amount(this);"><span
                                                class="amt">1000</span><span class="currency">₹</span></button>
                                    </div>
                                </div>
                                <div class="buttons-block" id="bet_button">
                                    <button class="btn btn-success bet font-family-title ng-star-inserted main_bet_btn"
                                        id="extra_bet_now" onclick="bet_now(this, 1);"><label
                                            class="font-family-title label">BET</label></button>
                                </div>
                                <div class="buttons-block" id="cancle_button" style="display: none;">
                                    <div class="btn-tooltip f-14 mb-1" id="waiting" style="display: none;">Waiting
                                        for next round</div>
                                    <button
                                        class="btn btn-danger bet font-family-title height-70 ng-star-inserted main_bet_btn"
                                        id="extra_cancel_now" onclick="cancle_now(this, 1);"><label
                                            class="font-family-title label">CANCEL</label></button>
                                </div>
                                <div class="buttons-block" id="cashout_button" style="display: none;">
                                    <input type="hidden" name="extra_bet_id" id="extra_bet_id">
                                    <button class="btn btn-warning bet font-family-title ng-star-inserted"
                                        onclick="cash_out_now(this, 1);">
                                        <label class="font-family-title label">CASH OUT</label>
                                        <div class="font-family-title label" id="cash_out_amount"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="second-row">
                                <!-- <div class="auto-bet-wrapper">
                                <div class="auto-bet">
                                    <button class="btn btn-sm btn-secondary auto-play-btn secondary-font"> Auto play </button>
                                </div>
                            </div> -->
                                <div class="cashout-block m-0">
                                    <div class="cash-out-switcher">
                                        <div class="form-check form-switch lg-switch d-flex align-items-center pe-5">
                                            <label class="form-check-label f-12 me-1" for="bet">Auto Bet</label>
                                            <input class="form-check-input m-0" type="checkbox" role="bet"
                                                id="extra_auto_bet">
                                        </div>
                                        <div class="form-check form-switch lg-switch d-flex align-items-center">
                                            <label class="form-check-label f-12 me-1" for="cashout">Auto Cash
                                                Out</label>
                                            <input class="form-check-input" type="checkbox" role="cashout"
                                                id="extra_checkout">
                                        </div>
                                    </div>
                                    <div class="cashout-spinner-wrapper">
                                        <div class="cashout-spinner disabled">
                                            <div class="spinner small">
                                                <div class="input full-width">
                                                    <input class="f-16 font-weight-bold" type="text" disabled
                                                        value="1.01" id="extra_incrementor"
                                                        onchange="extra_incrementor_change(this.value);">
                                                </div>
                                                <div class="text text-x">
                                                    <span class="material-symbols-outlined">
                                                        close
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Right Sidebar End ======-->
    </div>

    <!--====== Hinal (Start) ======-->

    <!--====== Game Limit Modal Start ======-->
    <div class="modal fade" id="game-limit" tabindex="-1" aria-labelledby="game-limit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">GAME LIMITS</h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled limit-rules">
                        <li class="list-group-item">
                            Minimum Bet:
                            <span class="badge badge-success px-2 font-family-number">10 ₹ </span>
                        </li>
                        <li class="list-group-item">
                            Maximum Bet:
                            <span class="badge badge-success px-2 font-family-number">8000 ₹ </span>
                        </li>
                        <li class="list-group-item">
                            Maximum win for one bet:
                            <span class="badge badge-success px-2 font-family-number">800000 ₹ </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--====== Game Limit Modal End ======-->

    <!--====== My Bet History Modal Start ======-->
    <div class="modal fade" id="bet-history" tabindex="-1" aria-labelledby="bet-history" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">MY BET HISTORY</h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-data-tbl mt-2">
                        <div class="list-header">
                            <div class="column-1">
                                Time
                            </div>
                            <div class="column-2">
                                Bet
                            </div>
                            <div class="column-3">
                                Mult.
                            </div>
                            <div class="column-4">
                                Cash out
                            </div>
                            <!-- <div class="ps-2 column-5"></div> -->
                        </div>
                        <div class="list-body scroll-div list-body1" id="member_bet">

                        </div>
                        <div>
                            <button class="btn btn-dark md-btn custm-btn-2 mx-auto mt-3 mb-1" id="load_btn"
                                onclick="loadData()">Load More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== My Bet History Modal End ======-->

    <!--====== Game Rules Modal Start ======-->
    <div class="modal fade" id="game-rule" tabindex="-1" aria-labelledby="game-rule" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title secondary-font" id="exampleModalLabel">GAME RULES</h5>
                    <button type="button" class="btn btn-transparent text-white p-0" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-grey">Aviator is a new generation of iGaming entertainment. You can win many times
                        more, in seconds! Aviator is built on a provably fair system, which is currently the only real
                        guarantee of honesty in the gambling industry.</p>
                    <h6 class="secondary-font">HOW TO PLAY</h6>
                    <iframe width="420" height="600"
                        src="https://www.youtube.com/embed/PZejs3XDCSY?playsinline=1">
                    </iframe>
                    <h6 class="secondary-font mt-2">Aviator is as easy to play as 1-2-3:</h6>
                    <div class="steps-container">
                        <div class="step step-1">
                            <h3>01</h3>
                            <img src="images/step-01.png" class="w-100" />
                            <div class="step-text pt-2">
                                <span>BET</span> before take-off
                            </div>
                        </div>
                        <div class="step step-1">
                            <h3>02</h3>
                            <img src="images/step-02.png" class="w-100" />
                            <div class="step-text pt-2">
                                <span>WATCH</span> as your Lucky Plane takes off and your winnings increase.
                            </div>
                        </div>
                        <div class="step step-1">
                            <h3>03</h3>
                            <img src="images/step-03.png" class="w-100" />
                            <div class="step-text pt-2">
                                <span>CASH OUT</span>before the plane disappears and wins X times more!
                            </div>
                        </div>
                    </div>
                    <p class="mt-2">But remember, if you did not have time to Cash Out before the Lucky Plane flies
                        away, your bet will be lost. Aviator is pure excitement! Risk and win. It’s all in your hands!
                    </p>
                    <h6 class="secondary-font mt-2">More Detail</h6>
                    <ul class="list-unstyled list-ul">
                        <li>The win multiplier starts at 1x and grows more and more as the Lucky Plane takes off.</li>
                        <li>Your winnings are calculated at the multiplier at which you made a Cash Out, multiplied by
                            your bet.</li>
                        <li>Before the start of each round, our provably fair random number generator generates the
                            multiplier at which the Lucky Plane will fly away. You can check the honesty of this
                            generation by clicking on </li>
                    </ul>
                    <h5 class="secondary-font mt-2">GAME FUNCTIONS</h5>
                    <h6 class="secondary-font mt-2">Bet & Cash Out</h6>
                    <ul class="list-unstyled list-ul">
                        <li>Select an amount and press the “Bet” button to make a bet.</li>
                        <li>You can make two bets simultaneously, by adding a second bet panel. To add a second bet
                            panel, press the plus icon, which is located on the top right corner of the first bet panel.
                        </li>
                        <li>Press the “Cash Out” button to cash out your winnings. Your win is your bet multiplied by
                            the Cash Out multiplier.</li>
                        <li>Your bet is lost, if you didn’t cash out before the plane flies away.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Auto Play & Auto Cash Out</h6>
                    <ul class="list-unstyled list-ul">
                        <li>Auto Play is activated from the “Auto” tab on the Bet Panel, by pressing the “Auto Play”
                            button.</li>
                        <li>In the Auto Play Panel, the “Stop if cash decreases by” option stops Auto Play, if the
                            balance is decreased by the selected amount.</li>
                        <li>In the Auto Play Panel, the “Stop if cash increases by” option stops Auto Play, if the
                            balance is increased by the selected amount.</li>
                        <li>In the Auto Play Panel, the “Stop if single win exceeds” option stops Auto Play, if a single
                            win exceeds the selected amount.</li>
                        <li>Auto Cash Out is available from the “Auto” tab on the Bet panel. After activation, your bet
                            will be automatically cashed out when it reaches the multiplier entered</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Live Bets & Statistics</h6>
                    <ul class="list-unstyled list-ul">
                        <li>On the left side of the game interface (or under the Bet Panel on mobile), is located the
                            Live Bets panel. Here you can see all bets that are being made in the current round.</li>
                        <li>In the “My Bets” panel you can see all of your bets and Cash Out information.</li>
                        <li>In the “Top” panel, game statistics are located. You can browse wins by amount, or Cash Out
                            multiplier, and see the biggest round multipliers.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Free Bets</h6>
                    <ul class="list-unstyled list-ul">
                        <li>You can check the status of Free Bets, from the Game Menu > Free Bets. Free Bets are awarded
                            by the operator, or by the Rain Feature.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Randomisation</h6>
                    <ul class="list-unstyled list-ul">
                        <li>The multiplier for each round is generated by a “Provably Fair” algorithm and is completely
                            transparent, and 100% fair.</li>
                        <li>You can check and modify the Provably Fair settings from the Game menu > Provably Fair
                            settings.</li>
                        <li>You can check the fairness of each round by pressing icon, opposite the results in the “My
                            Bets” or inside “Top” tabs.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Return to Player</h6>
                    <ul class="list-unstyled list-ul">
                        <li>The overall theoretical return to player is 97%. This means that on average, for every 100
                            rounds, every 3 rounds end with the Lucky Plane flying away at the very beginning of the
                            round.</li>
                    </ul>
                    <h6 class="secondary-font mt-2">Other</h6>
                    <ul class="list-unstyled list-ul">
                        <li>If the internet connection is interrupted when the bet is active, the game will auto cash
                            out with the current multiplier, and the winning amount will be added to your balance.</li>
                        <li>In the event of a malfunction of the gaming hardware/software, all affected game bets and
                            payouts are rendered void and all affected bets are refunded.</li>
                    </ul>
                </div>
                <audio id="sound_Audio">
                    <source src="plane-crash.mp3" type="audio/mpeg">
                </audio>
                <audio id="background_Audio">
                    <source src="background.mp3" type="audio/mpeg">
                </audio>
                <audio id="fly_plane_audio">
                    <source src="game-start.mp3" type="audio/mpeg">
                </audio>
                <audio id="cash_out_audio">
                    <source src="cashout.mp3" type="audio/mpeg">
                </audio>
                <audio id="cash_out_audio_2">
                    <source src="cashout_2.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>
    <!--====== Game Rules Modal End ======-->

    <!--====== Hinal (End) ======-->
    <script>
        var hash_id = '{{ csrf_token() }}';
        var currency_id = '{{ user('currency') }}';
        var currency_symbol = '{{ user('currency') }}';
        var wallet_balance = '{{ wallet(user('id')) }}';
        var profile_image = '1';
        var member_id = '{{ user('id') }}';
        var min_bet_amount = parseFloat('{{ setting('min_bet_amount') }}');
        var max_bet_amount = parseFloat('{{ setting('max_bet_amount') }}');
        var current_game_data = {{ currentid() }};
    </script>




    @include('include.footer')
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
    <script src="/js/jquery.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!--====== Slimscroll js ======-->
    <!--<script src="/js/jquery.mCustomScrollbar.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <!--====== Country Selection js ======-->
    <script src="/js/niceCountryInput.js"></script>
    <script src="/js/jquery.ccpicker.js" type="text/javascript"></script>

    <!--====== Animation Selection js ======-->
    <script src='/js/anime.min.js'></script>

    <!--====== Owl Carousel js ======-->
    <script src='/js/owl.carousel.min.js'></script>

    <!--====== Main js ======-->
    <script src="/js/main.js"></script>

    <!--====== Validate js ======-->
    <script src="/js/jquery.validate.min.js"></script>

    <!--====== Toastr js ======-->
    <script src="/js/toastr.min.js"></script>

    <!--====== Datatable js ======-->
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap5.min.js"></script>
    <script src="/js/dataTables.responsive.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var successMessage = '';
        var errorMessage = '';
        let game_id = 0;
        var bet_array = [];
        let currentbet;
        var main_cash_out = 0;
        var extra_cash_out = 0;
        var main_incrementor;
        var extra_incrementor;
        let stage_time_out = 0;
        var is_game_generated = 0;
    </script>
    <script src="/user/avatar.js"></script>
    <script src="/user/canvas.js"></script>
    <script src="/user/aviatorold.js?v={{env('APP_VERSION')}}"></script>
    <script src="/user/aviatorbyapp.js?v={{env('APP_VERSION')}}"></script>

        
        <script>
        $(document).ready(function(){
        
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
                                    'request_type': result.data.request_type
                                },
                            });
                        });
                    }
                }
            }
        });
        $.ajax({
            url: '/game/currentlybet',
            type: "POST",
            data: {
                _token: hash_id
            },
            dataType: "json",
            success: function(intialData) {
                info_data(intialData);
            }
        });
    });
    $(".load-txt").hide();
    gamegenerate();
    // setInterval(()=>{
    //     $.ajax({
    //     url: '/game/existence',
    //     type: "POST",
    //     data: {
    //         "_token": hash_id,
    //         "event": 'check'
    //     },
    //     dataType: "json",
    //     success: function (result) {
    //         if (result.data == true) {
    //             if(is_game_generated == 0){
    //                 $(".load-txt").hide();
    //             setTimeout(()=>{
    //                 gamegenerate();
    //             },1000);
    //             }
    //             return;
    //         } else {
    //             $(".load-txt").show();
    //             return
    //         }
    //     }
    // });
    // },1000);
    
    </script>
</body>

</html>
