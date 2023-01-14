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
					<form action={{ route('password.store') }} class="user-data-form mt-80 md-mt-40" method="POST">
						@csrf
						<!-- Password Reset Token -->
						<input type="hidden" name="token" value="{{ $request->route('token') }}">
						<p class="header-info pt-30 pb-50">هنوز حسابی ندارید؟ <a href={{ route('register')
								}}>ثبت نام</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta input-group mb-50">
									<x-input-label for="email" :value="__('auth.email')" />
									<x-text-input type="email" name="email" :value="old('email', $request->email)"
										required autofocus />
									<x-input-error :messages="$errors->get('email')" class="mt-2" />
								</div>
							</div>

							<div class="col-12">
								<div class="input-group-meta input-group mb-50">
									<x-input-label for="password" :value="__('auth.password')" />
									<x-text-input type="password" name="password" />
									<x-input-error :messages="$errors->get('password')" class="mt-2" />
									<span class="placeholder_icon"><span class="passVicon"><img src={{
												asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>

							<div class="col-12">
								<div class="input-group-meta input-group mb-15">
									<x-input-label for="re_type_password" :value="__('auth.re_type_password')" />
									<x-text-input type="password" name="password_confirmation" />
									<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
									<span class="placeholder_icon"><span class="passVicon"><img src={{
												asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>

							<div class="col-12">
								<button class="theme-btn-one mt-50 mb-50 text-center" type="submit">بازنشانی رمز
									عبور</button>
							</div>
						</div>
					</form>
				</div>
			</div>
</x-app-layout>