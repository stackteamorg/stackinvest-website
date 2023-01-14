<div class="theme-main-menu sticky-menu theme-menu-six bg-none">
    <div class="d-flex align-items-center">
        <!-- <div class="logo order-lg-1"><a href="index.html"><img src={{ asset('images/logo/logo.png') }} alt=""></a>
        </div> -->
        <div>
        <a href="{{route('home')}}" class="btn">{{ __('header.home') }}</a>
        </div>
        <div class="right-widget order-lg-3">
            <ul class="d-flex align-items-center">
                @if (Auth::check())
                <li>
                    <a href="{{ route('dashboard') }}" class="signup-btn">{{ __('auth.dashboard') }}</a>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}" class="signIn-action d-flex align-items-center">
                        <img src="images/icon/120.svg" alt="">
                        <span>{{ __('header.login') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="signup-btn">{{ __('header.sign up') }}</a>
                </li>
                @endif
            </ul>
        </div>

        <nav id="mega-menu-holder" class="navbar navbar-expand-lg mr-lg-auto order-lg-2">
            <div class="container nav-container">
                <button class="navbar-toggler">
                    <span></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <ul class="navbar-nav main-side-nav font-gordita" id="one-page-nav">
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link dropdown-toggle">{{ __('header.about us') }}</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-flex">
                                        <li>
                                            <a href="{{route('team-members')}}" class="dropdown-item img-box">
                                                <span class="font-rubik">{{ __('header.executive committe') }}</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('portfolio')}}" class="dropdown-item img-box">
                                                <span class="font-rubik">{{ __('header.protfo') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('mission')}}" class="dropdown-item img-box">
                                                <span class="font-rubik">{{ __('header.entrepreneurship and investment')
                                                    }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('angel')}}" class="dropdown-item img-box">
                                                <span class="font-rubik">{{ __('header.angel investor') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            </li>
                            <!-- <li class="nav-item dropdown position-static">
                                 <a class="nav-link dropdown-toggle" href="index(appointment-scheduling).html#"
                                     data-toggle="dropdown">{{ __('header.investors') }}</a>
                                 <div class="dropdown-menu">
                                     <ul class="mega-menu d-flex">
                                         <li>
                                             <a href="index-event.html" class="dropdown-item img-box">
                                                 <span class="font-rubik"> {{ __('header.investment request') }}</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="index-event.html" class="dropdown-item img-box">
                                                 <span class="font-rubik"> {{ __('header.investment process') }}</span>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="index-event.html" class="dropdown-item img-box">
                                                 <span class="font-rubik">{{ __('header.investment request') }}</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </li> -->
                            <li class="nav-item">
                                <a href="index(appointment-scheduling).html#feedback" class="nav-link">{{
                                    __('header.proccess and procedures') }}</a>
                            </li>
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link" href={{ route('contact.us') }}>{{ __('header.contact us') }}</a>
                            </li>
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link" href={{ route('investor.request') }}>{{ __('header.investor') }}</a>
                            </li>
                    </div>
                </div>
        </nav>
    </div>
</div>
<!-- /.theme-main-menu -->