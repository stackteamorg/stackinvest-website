        <!--
   =====================================================
    Footer Style Eight
   =====================================================
   -->
        <footer class="theme-footer-eight mt-100">
            <div class="top-footer">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-4 col-lg-3 col-12 footer-about-widget">
                            <div class="logo order-lg-1"><a href="index.html"><img src={{ asset('images/logo/logo.png') }}
                                        alt=""></a></div>
                        </div>
                        <div class="col-lg-4 col-md-4 footer-list">
                            <h5 class="footer-title">{{ __('header.index') }}</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('register') }}">{{ __('header.sign up') }}</a>
                                </li>
                                <li>
                                    <a href="index-doc.html">{{ __('header.protfo') }}</a>
                                </li>
                                <li>
                                    <a href={{ route('contact.us') }}>{{ __('header.contact us') }}</a>
                                </li>
                            </ul>
                        </div> <!-- /.footer-list -->

                        <div class="col-lg-4 col-md-4 footer-list">
                            <h5 class="footer-title">{{ __('header.about us') }}</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('register') }}">info@stackteam.org</a>
                                </li>
                                <li>
                                    <a href="index-doc.html">0912 018 6223</a>
                                </li>
                                <li>
                                    <a href={{ route('contact.us') }}>0910 859 5566</a>
                                </li>
                            </ul>
                        </div> <!-- /.footer-list -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>

            <div class="container">
                <div class="bottom-footer mt-50 md-mt-30">
                    <div class="row">
                        <div class="col-lg-6 order-lg-last mb-20">
                            <ul class="d-flex justify-content-center justify-content-lg-end social-icon">
                                <li><a href="index(appointment-scheduling).html#"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="index(appointment-scheduling).html#"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="index(appointment-scheduling).html#"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-lg-first mb-20">
                            <p class="copyright text-center text-lg-right">Copyright @2021 deski inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> <!-- /.theme-footer-eight -->
