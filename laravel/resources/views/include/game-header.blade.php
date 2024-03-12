<!--====== Header Start ======-->
<header>
    <div class="header-top">
        <div class="header-left">
            <a href="dashboard">
                <img src="../../images/logo.png" class="logo1" />
            </a>
        </div>
        <div class="header-right d-flex align-items-center">
            <a href="/deposit">
                <button class="deposite-btn rounded-pill d-flex align-items-center me-2">
                    <span class="material-symbols-outlined me-2"> payments </span>
                    <!-- <span>$</span> -->
                    <span class="me-2" id="header_wallet_balance">₹{{ wallet(user('id')) }}</span>
                    DEPOSIT
                </button>
            </a>
            <div class="btn-group">
                <button type="button"
                    class="btn btn-transparent dropdown-toggle p-0 d-flex align-items-center justify-content-center caret-none"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-symbols-outlined f-24 menu-icon text-white">
                        menu
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark profile-dropdown p-0">
                        <li class="profile-head d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{user('image')}}" class="avtar-ico" id="avatar_img">
                                <div>
                                    <div class="profile-name mb-1">{{ user('email') }} </div>
                                    <div class="profile-name" id="username">{{ user('id') }}</div>
                                </div>

                            </div>
                        </li>
					
					<li>
                <a class="f-12 justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined ico">
                            volume_mute
                        </span>SOUND
                        
                    </div>
                    <div>
                        <div class="form-check form-switch lg-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="sound" checked="">
                            <label class="form-check-label" for="sound"></label>
                        </div>
                    </div>
                </a>
            </li>
					<li>
                <a class="f-12 justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined ico f-22">
                            music_note
                        </span>MUSIC
                    </div>
                    <div>
                        <div class="form-check form-switch lg-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="music" checked="">
                            <label class="form-check-label" for="music"></label>
                        </div>
                    </div>
                </a>
            </li>
					<li>
                <a class="f-12 justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="material-symbols-outlined ico f-20">
                            mode_fan
                        </span>ANIMATION
                    </div>
                    <div>
                        <div class="form-check form-switch lg-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="animation" checked="">
                            <label class="form-check-label" for="animation"></label>
                        </div>
                    </div>
                </a>
            </li>
					<li class="divider"> </li>
                        <li>
                            <a href="/crash" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        flight_takeoff
                                    </span>
                                    <img src="../../images/logo.svg" class="side_logo">
                                </div>
                            </a>
                        </li>


                        <li>
                            <a href="/deposit" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>DEPOSIT FUNDS
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/withdraw" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>WITHDRAW FUNDS FROM THE ACCOUNT
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/amount-transfer" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>AMOUNT TRANSFER
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/profile" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        account_circle
                                    </span>PERSONAL DETAILS
                                </div>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>TRANSFER FUNDS
                                </div>
                            </a>
                        </li> --}}
                        <li>
                            <a href="/deposit_withdrawals" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>TRANSACTION HISTORY
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/level-management" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>LEVEL MANAGEMENT
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/referal" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>REFERRAL
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/logout" class="f-12 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined ico f-20">
                                        payments
                                    </span>SIGN OUT
                                </div>
                            </a>
                        </li>
                    </ul>
            </div>




        </div>
    </div>
    <div class="header-bottom ">
        <div class="header-left">
            <img src="../../images/logo.svg" class="logo" />
        </div>
        <div class="header-right d-flex align-items-center">
            <!-- <button class="btn btn-warning m-font-0 rounded-pill py-1 px-2 f-14 d-flex align-items-center h-26" data-bs-toggle="modal" data-bs-target="#how-to-play">
            <span class="material-symbols-outlined f-18 me-1">
                help
            </span> How to Play
        </button> -->
            <div class="wallet-balance h-26">
                <span id="wallet_balance">{{ wallet(user('id')) }}</span>
            </div>
        </div>
    </div>
</header>
<!--====== Header End ======-->