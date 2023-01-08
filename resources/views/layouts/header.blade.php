        <!--
   =============================================
    Theme Main Menu
   ==============================================
   -->
   <div class="theme-main-menu sticky-menu theme-menu-six bg-none">
    <div class="d-flex align-items-center">
        <div class="logo order-lg-1"><a href="index.html"><img src="images/logo/deski_06.svg"
                    alt=""></a></div>

        <div class="right-widget order-lg-3">
            <ul class="d-flex align-items-center">
                <li>
                    <a href="login.html" class="signIn-action d-flex align-items-center">
                        <img src="images/icon/120.svg" alt="">
                        <span>login</span>
                    </a>
                </li>
                <li>
                    <a href="sign-up.html" class="signup-btn">Sign up</a>
                </li>
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
                                <a class="nav-link dropdown-toggle" href="index(appointment-scheduling).html#"
                                    data-toggle="dropdown">{{__('header.menu1')}}</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-flex">
                                        <li>
                                            <a href="index-event.html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home01.png') }} alt="">
                                                <span class="font-rubik">Event Organiser</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-doc.html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home02.png') }} alt="">
                                                <span class="font-rubik">Doc landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home03.png') }} alt="">
                                                <span class="font-rubik">Project Management</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-customer-support.html"
                                                class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home04.png') }} alt="">
                                                <span class="font-rubik">Customer Support</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(product-landing).html"
                                                class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home05.png') }} alt="">
                                                <span class="font-rubik">Product landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(product-landing-dark).html"
                                                class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home06.png') }} alt="">
                                                <span class="font-rubik">Product landing Dark</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(note-taking).html" class="dropdown-item img-box">
                                                <img src={{ asset('imagesimages/menu/home07.png') }}
                                                    alt="">
                                                <span class="font-rubik">Note Taking App landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(video-editor).html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home08.png') }} alt="">
                                                <span class="font-rubik">Video Editor Landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(appointment-scheduling).html"
                                                class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home10.png') }} alt="">
                                                <span class="font-rubik">Appointment Scheduling</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(mobile-appV1).html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home11.png') }} alt="">
                                                <span class="font-rubik">Mobile App Landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(doc-signature).html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home12.png') }} alt="">
                                                <span class="font-rubik">Doc Signature Landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(webiste-builder).html"
                                                class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home13.png') }} alt="">
                                                <span class="font-rubik">Website Builder</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(form-survey).html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home14.png') }} alt="">
                                                <span class="font-rubik">Form & Survey</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index(vr).html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home16.png') }} alt="">
                                                <span class="font-rubik">VR Landing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="coming-soon-v1.html" class="dropdown-item img-box">
                                                <img src={{ asset('images/menu/home09.png') }} alt="">
                                                <span class="font-rubik">Coming Soon</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="img-box">
                                                <img src="images/menu/home15.png" alt="">
                                                <div
                                                    class="hover d-flex align-items-center justify-content-center">
                                                    <div class="font-rubik">Coming Soon</div>
                                                </div>
                                            </div>
                                            <span class="font-rubik">E-commerce</span>
                                        </li>
                                    </ul>
                                </div> <!-- /.dropdown-menu -->
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about.us')}}"
                                    class="nav-link">درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a href="index(appointment-scheduling).html#service"
                                    class="nav-link">فرآیندها و رویه ها</a>
                            </li>
                            <li class="nav-item">
                                <a href="index(appointment-scheduling).html#feedback"
                                    class="nav-link">سرمایه گذاران</a>
                            </li>
                            <li class="nav-item">
                                <a href="index(appointment-scheduling).html#feedback"
                                    class="nav-link">تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div> <!-- /.theme-main-menu -->