<!--
   =============================================
    Theme Hero Banner
   ==============================================
   -->
<div class="hero-banner-nine lg-container">
    <img src="images/shape/190.svg" alt="" class="shapes bg-shape">
    <div class="container">
        <div class="illustration-container col-lg-6">
            <img src="{{ asset('images/gallery/10.JPG') }}" alt="">
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="hero-heading"> استک اینوست <span> <img src="images/shape/189.svg" alt=""></span></h1>
                <p class="hero-sub-heading">
                    استک اینوست , تحقق هر ایده
                    <br />

                    استک‌ اینوست اینجاست که استارتاپ و ایده ناب شما رو تبدیل به واقعیتی به رنگ یک اپلیکیشن و وبسایت حرفه
                    ای
                    .کنه

                </p>
                <div class='my-1'><small class="text-success" id='text-success'></small></div>
                <form method="POST" id="form-consultation">
                    @csrf
                    <input type="text" id="phone" name="phone">
                    <button type="submit" class="d-flex justify-content-center align-items-center" id="btn-submit"
                        type="submit"><img src="{{ asset('images/icon/119.svg') }}" alt=""></button>
                </form>
                <p class="term-text mb-10"> برای مشاوره رایگان شماره تماس خود را وارد نمایید</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="partnerSliderTwo mt-80">
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo2.jpg') }}"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo6.jpg') }}"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo7.jpg') }}"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo9.jpg') }}"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo5.jpg') }}"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo10.jpg') }}"
                        alt=""></div>
            </div>
            <div class="item">
                <div class="img-meta d-flex align-items-center"><img src="{{ asset('images/gallery/logo14.jpg') }}"
                        alt=""></div>
            </div>

        </div>
    </div>
</div> <!-- /.partner-slider-two -->