<x-app-layout>

	<body>
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
					<form action={{ route('login') }} class="user-data-form mt-80 md-mt-40" method="POST">
						@csrf
						<h2> خوش آمدید (:</h2>
						<p class="header-info pt-30 pb-50 ml-4"> حساب کاربری ندارید؟ <a href={{ route('register') }}>
								ثبت نام</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<x-input-label for="email" :value="__('auth.email')" />
									<x-text-input type="email" name="email" :value="old('email')" />
									<x-input-error :messages="$errors->get('email')" class="mt-2" />
								</div>
							</div>
							<div class="col-12">
								<div class="input-group-meta mb-15">
									<x-input-label for="password" :value="__('auth.password')" />
									<x-text-input type="password" name="password" />
									<x-input-error :messages="$errors->get('password')" class="mt-2" />
									<span class="placeholder_icon"><span class="passVicon"><img src={{
												asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<div class="agreement-checkbox d-flex justify-content-between align-items-center">
									<div>
										<input type="checkbox" id="remember" name="remember">
										<label for="remember">مرا به خاطر بسپار</label>
									</div>
									<a href={{ route('password.request') }}>فراموشی رمز عبور</a>
								</div> <!-- /.agreement-checkbox -->
							</div>
							<div class="col-12">
								<button class="theme-btn-one mt-50 mb-50 text-center" type="submit">ورود</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
</x-app-layout>