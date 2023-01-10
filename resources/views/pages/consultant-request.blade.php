<x-app-layout>
    <!--
   =============================================
    Contact Style Two
   ==============================================
   -->
    <div class="contact-style-two">
        <div class=" partner-slider-two mt-130 md-mt-100">
            <img src="images/shape/190.svg" alt="" class="shapes bg-shape">
            <div class="form-style-classic mt-200 md-mt-80 container">
                <form id="contact-form" action={{ route('consultant.request') }} method="POST" data-toggle="validator">
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
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="startup" :value="__('auth.startup')" />
                                <x-text-input type="text" name="startup" :value="old('startup')" autofocus />
                                <x-input-error :messages="$errors->get('startup')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12" data-aos="fade-right" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="department" :value="__('auth.department')" />
                                <x-text-input type="text" name="department" :value="old('department')" autofocus />
                                <x-input-error :messages="$errors->get('department')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="email" :value="__('auth.email')" />
                                <x-text-input type="email" name="email" :value="old('email')" autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="mobile" :value="__('auth.mobile')" />
                                <x-text-input type="mobile" name="mobile" :value="old('mobile')" autofocus />
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="subject" :value="__('auth.subject')" />
                                <x-text-input type="text" name="subject" :value="old('subject')" autofocus />
                                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="investor" :value="__('auth.investor')" />
                                <x-text-input type="text" name="investor" :value="old('investor')" autofocus />
                                <x-input-error :messages="$errors->get('investor')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="city" :value="__('auth.city')" />
                                <x-text-input type="text" name="city" :value="old('city')" autofocus />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="type" class="mb-40" :value="__('auth.type of consultant')" />
                                <select name="type" id="type">
                                    <option value="online">{{ __('auth.online') }}</option>
                                    <option value="personal">{{ __('auth.personal') }}</option>
                                </select>
                                <x-input-error :messages="$errors->get('type')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <button type="submit" class="theme-btn-two">{{ __('auth.send request') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- /.form-style-classic -->
    </div>
    </div> <!-- /.contact-style-two -->
</x-app-layout>
