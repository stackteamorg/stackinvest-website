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
                        <h2 class="text-center">{{ __('contact-us.feel free to contact us or just say hi!') }}</h2>
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
                                <iframe width="100%" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Iran%20tehran%20city%20theatr&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                            <div class="title">{{ __('contact-us.location') }}</div>
                        </div> <!-- /.address-info -->
                    </div>
                    <div class="col-lg-4 col-sm-6 d-lg-flex">
                        <div class="address-info">
                            <div class="icon d-flex align-items-end"><img src={{ asset('images/icon/45.svg') }}
                                    alt="">
                            </div>
                            <a href={{ route('consultant') }} class="title">
                                {{ __('contact-us.consultation request') }}</a>

                        </div> <!-- /.address-info -->
                    </div>
                    <div class="col-lg-4 col-sm-6 d-lg-flex">
                        <div class="address-info">
                            <div class="icon d-flex align-items-end"><img src={{ asset('images/icon/46.svg') }}
                                    alt="">
                            </div>
                            <div class="title">{{ __('contact-us.social media') }}</div>
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
                <form id="contact-form" action={{ route('contact.us.request') }} method="POST"
                    data-toggle="validator">
                    @csrf
                    @if (Session::has('message'))
                        <div class="alert alert-success mb-4">
                            {{ Session::get('message') }}
                            @php
                                Session::forget('message');
                            @endphp
                        </div>
                    @endif

                    <div class="row controls">
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="username" :value="__('auth.username')" />
                                <x-text-input type="text" name="username" :value="old('username')" autofocus />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />

                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="mobile" :value="__('auth.mobile')" />
                                <x-text-input type="text" name="mobile" :value="old('mobile')" autofocus />
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="mobile" :value="__('auth.subject')" />
                                <x-text-input type="subject" name="subject" :value="old('subject')" autofocus />
                                <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group lg mb-40">
                                <x-input-label for="body" :value="__('auth.message')" />
                                <textarea name="body"></textarea>
                                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200"><button type="submit"
                                class="theme-btn-two">{{ __('auth.send message') }}</button></div>
                    </div>
                </form>
            </div> <!-- /.form-style-classic -->
        </div>
    </div> <!-- /.contact-style-two -->
</x-app-layout>
