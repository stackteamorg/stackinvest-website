
<x-app-layout>
		<div class="main-page-wrapper p0">
			<div class="user-data-page clearfix d-lg-flex">
				<div class="illustration-wrapper d-flex align-items-center justify-content-center flex-column">
					<div class="illustration-holder">
						<img src={{ asset("images/assets/ils_08.svg") }} alt="" class="illustration">
						<img src={{ asset("images/assets/ils_08.1.svg") }} alt="" class="shapes shape-one">
						<img src={{ asset("images/assets/ils_08.2.svg") }} alt="" class="shapes shape-two">
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<form action={{ route('register') }} class="user-data-form mt-30" method="POST">
                        @csrf
						<h3>لطفا اطلاعات زیر را وارد نمایید</h3>
						<p class="header-info pt-30 pb-50">قبلا ثبت نام کرده اید؟<a href={{ route('login') }}>ورود</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-50">
									<x-input-label for="startup_name" :value="__('auth.startUp_name')" />
									<x-text-input type="text" placeholder="Stackteam Invest" name="startup_name" />
									<x-input-error :messages="$errors->get('startup_name')" class="mt-2" />
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<x-input-label for="name" :value="__('auth.name')" />
									<x-text-input type="text" placeholder="Zahra" name="name" />
									<x-input-error :messages="$errors->get('name')" class="mt-2" />
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<x-input-label for="lastname" :value="__('auth.lastname')" />
									<x-text-input type="text" placeholder="Rezaei" name="lastname" />
									<x-input-error :messages="$errors->get('lastname')" class="mt-2" />
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<x-input-label for="mobile" :value="__('auth.mobile')" />
									<x-text-input type="text" placeholder="09121111111" name="mobile" />
									<x-input-error :messages="$errors->get('mobile')" class="mt-2" />
								</div>
							</div>

							<div class="col-12">
								<div class="input-group-meta mb-50">
									<x-input-label for="email" :value="__('auth.email')" />
									<x-text-input type="email" placeholder="stackinvest@gmail.com" name="email" />
									<x-input-error :messages="$errors->get('email')" class="mt-2" />
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<select name="level" id="level">
                                        <option value="mvp">mvp</option>
                                        <option value="prototype">prototype</option>
                                        <option value="idea">idea </option>
                                    </select>
								</div>
							</div>

							<div class="col-12">
								<div class="input-group-meta mb-50">
									<x-input-label for="password" :value="__('auth.password')" />
									<x-text-input type="password" placeholder="رمز عبور خود را وارد کنید" name="password" />
									<x-input-error :messages="$errors->get('password')" class="mt-2" />
									<span class="placeholder_icon"><span class="passVicon"><img src={{ asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<div class="input-group-meta mb-15">
									<x-input-label for="re_type_password" :value="__('auth.re_type_password')" />
									<x-text-input type="password" placeholder="رمز عبور خود را وارد کنید" name="password_confirmation" />
									<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
									<span class="placeholder_icon"><span class="passVicon"><img src={{ asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<div class="agreement-checkbox d-flex justify-content-between align-items-center sm-mt-10">
									{{-- <div>
										<input type="checkbox" id="agree_to_policy">
										<label for="agree_to_policy">By clicking "SIGN UP" I agree to the Terms and Conditions and Privacy Policy.</label>
									</div> --}}
								</div> <!-- /.agreement-checkbox -->
							</div>
							<div class="col-12">
								<button type="submit" class="theme-btn-one mt-30 mb-50 text-center">ثبت نام</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
        </x-app-layout>