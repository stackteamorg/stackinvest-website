<x-app-layout>
    <!--
   =============================================
    Contact Style Two
   ==============================================
   -->
    <div class="contact-style-two">
        <div class="container">
            <div class="form-style-classic mt-200 md-mt-80">
                <form id="contact-form" action={{ route('consultant.request') }} method="POST" data-toggle="validator">
                    @csrf
                    <div class="row controls">
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input type="text" placeholder="Michel" name="username" :value="old('username')"
                                    autofocus />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="startup" :value="__('Startup')" />
                                <x-text-input type="text" placeholder="Michel" name="startup" :value="old('startup')"
                                    autofocus />
                                <x-input-error :messages="$errors->get('startup')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-md-12" data-aos="fade-right" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="department" :value="__('Department')" />
                                <x-text-input type="text" placeholder="Michel" name="department" :value="old('department')"
                                    autofocus />
                                <x-input-error :messages="$errors->get('department')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input type="email" placeholder="Michel@yahoo.com" name="email"
                                    :value="old('email')" autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="mobile" :value="__('Mobile')" />
                                <x-text-input type="mobile" placeholder="Michel@yahoo.com"
                                    name="mobile":value="old('mobile')" autofocus />
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="subject" :value="__('Subject')" />
                                <x-text-input type="text" placeholder="subject" name="subject" :value="old('subject')"
                                    autofocus />
                                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="investor" :value="__('Investor')" />
                                <x-text-input type="text" placeholder="investor"
                                    name="investor":value="old('investor')" autofocus />
                                <x-input-error :messages="$errors->get('investor')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="city" :value="__('City')" />
                                <x-text-input type="text" placeholder="city" name="city" :value="old('city')"
                                    autofocus />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200">
                            <div class="input-group-meta form-group mb-60">
                                <x-input-label for="city" class="mb-40" :value="__('Type of consultant')" />
                                <select name="type" id="type">
                                    <option value="online">Online</option>
                                    <option value="Personal">Personal</option>
                                </select>
                                <x-input-error :messages="$errors->get('type')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-up" data-aos-duration="1200"><button type="submit"
                                class="theme-btn-two">Send Request</button></div>
                    </div>
                </form>
            </div> <!-- /.form-style-classic -->
        </div>
    </div> <!-- /.contact-style-two -->
</x-app-layout>
