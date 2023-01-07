<x-app-layout>
    <!--
   =============================================
    Fancy Hero Four
   ==============================================
   -->
    <div class="fancy-hero-four space-fix">
        <div class="shapes shape-one"></div>
        <div class="shapes shape-two"></div>
        <div class="shapes shape-three"></div>
        <div class="shapes shape-four"></div>
        <div class="shapes shape-five"></div>
        <div class="shapes shape-six"></div>
        <div class="bg-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-11 col-md-10 m-auto">
                        <h6>Contact us</h6>
                        <h2>Feel free to contact us or just say hi!</h2>
                    </div>
                </div>
            </div>
        </div> <!-- /.bg-wrapper -->
    </div> <!-- /.fancy-hero-four -->

    <!--
   =============================================
    Contact Style Two
   ==============================================
   -->
    <div class="contact-style-two">
        <div class="container">
            <div class="contact-info-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 d-lg-flex">
                        <div class="address-info">
                            <div class="icon d-flex align-items-end"><img src={{ asset('images/icon/44.svg"') }} alt="">
                            </div>
                            <div class="title">Location</div>
                            <p class="font-rubik">Dhaka, Kawran Bazar <br> 1201 Metro</p>
                        </div> <!-- /.address-info -->
                    </div>
                    <div class="col-lg-4 col-sm-6 d-lg-flex">
                        <div class="address-info">
                            <div class="icon d-flex align-items-end"><img src={{ asset("images/icon/45.svg")}} alt="">
                            </div>
                            <div class="title">Contact</div>
                            <p class="font-rubik">bawejkor@duwvude.gov <br>(779) 564-1593</p>
                        </div> <!-- /.address-info -->
                    </div>
                    <div class="col-lg-4 col-sm-6 d-lg-flex">
                        <div class="address-info">
                            <div class="icon d-flex align-items-end"><img src={{ asset("images/icon/46.svg")}} alt="">
                            </div>
                            <div class="title">Social Media</div>
                            <p class="font-rubik">Find on social media</p>
                            <ul class="d-flex justify-content-center">
                                <li><a href="contact-us(cs).html#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="contact-us(cs).html#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="contact-us(cs).html#"><i class="fa fa-pinterest"
                                            aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div> <!-- /.address-info -->
                    </div>
                </div>
                <img src={{ asset('images/shape/64.svg') }} alt="" class="shapes shape-one">
                <img src={{ asset('images/shape/64.svg') }} alt="" class="shapes shape-two">
            </div> <!-- /.contact-info-wrapper -->

            <div class="form-style-classic mt-200 md-mt-80">
                <form action="contact-us(cs).html#" id="contact-form" action="inc/contact.php" data-toggle="validator">
                    <div class="messages"></div>
                    <div class="row controls">
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <label>First Name</label>
                                <input type="text" placeholder="Michel" name="Fname" required="required"
                                    data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <label>Last Name</label>
                                <input type="text" placeholder="Hawkins" name="Lname" required="required"
                                    data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <label>Email Address</label>
                                <input type="email" placeholder="saeslal@zouj.co.uk" name="email"
                                    required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group lg mb-40">
                                <label>Your Message</label>
                                <textarea placeholder="your message here.." name="message" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200"><button
                                class="theme-btn-two">Send Message</button></div>
                    </div>
                </form>
            </div> <!-- /.form-style-classic -->
        </div>
    </div> <!-- /.contact-style-two -->

    <!--
   =====================================================
    Fancy Short Banner Three
   =====================================================
   -->
    <div class="fancy-short-banner-three mt-200 md-mt-130">
        <div class="container">
            <div class="bg-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="title-style-one">
                            <h6 class="font-rubik" style="color:#F96F60">Start your free trial.</h6>
                            <h2>New here? Start your free trial now.</h2>
                        </div> <!-- /.title-style-one -->
                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrapper">
                            <form action="contact-us(cs).html#">
                                <input type="email" placeholder="Email address">
                                <button>Start trial</button>
                            </form>
                            <p class="font-rubik">Already a member? <a href="login.html">Sign in.</a></p>
                        </div> <!-- /.form-wrapper -->
                    </div>
                </div>
            </div> <!-- /.bg-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.fancy-short-banner-three -->
</x-app-layout>
