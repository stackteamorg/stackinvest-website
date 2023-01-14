{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the
        link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}



<x-app-layout>

    <body>
        <div class="main-page-wrapper p0" >
            <div class="user-data-page clearfix d-lg-flex">
                <div class="illustration-wrapper d-flex align-items-center justify-content-center flex-column">
                    <div class="illustration-holder">
                        <img src={{ asset("images/assets/ils_08.svg") }} alt="" class="illustration">
                        <img src={{ asset("images/assets/ils_08.1.svg") }} alt="" class="shapes shape-one">
                        <img src={{ asset("images/assets/ils_08.2.svg") }} alt="" class="shapes shape-two">
                    </div>
                </div> <!-- /.illustration-wrapper -->

                <div class="form-wrapper mt-80 md-mt-40">
                    <h4>از ثبت نام شما سپاسگزاریم! قبل از شروع، آیا می توانید آدرس ایمیل خود را با کلیک کردن روی پیوندی
                        که به تازگی برای شما ایمیل کرده ایم تأیید کنید؟ اگر ایمیلی را دریافت نکردید، ما با کمال میل
                        ایمیل دیگری را برای شما ارسال خواهیم کرد.</h4>
                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('یک پیوند تأیید جدید به آدرس ایمیلی که هنگام ثبت نام ارائه کرده اید ارسال شده است.') }}
                    </div>
                    @endif

                    <form action={{ route('verification.send') }} class="user-data-form mt-80 md-mt-40" method="POST">
                        @csrf
                        <div class="col-12">
                            <button class="theme-btn-one mt-50 mb-50 text-center" type="submit">ایمیل تایید را
                                دوباره بفرست</button>
                        </div>
                    </form>

                    <form action={{ route('logout') }} class="user-data-form mt-10 md-mt-40" method="POST">
                        @csrf
                        <div class="col-12">
                            <button class="theme-btn-one mt-50 mb-50 text-center" type="submit">خروج</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>