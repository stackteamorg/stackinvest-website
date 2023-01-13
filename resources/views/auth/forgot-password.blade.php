<x-app-layout>

	<body>
		<div class="main-page-wrapper p0">
			<div class="user-data-page clearfix d-lg-flex">
				<div class="illustration-wrapper d-flex align-items-center justify-content-between flex-column">
					<div class="illustration-holder">
						<img src={{ asset("images/assets/ils_08.svg") }} alt="" class="illustration">
						<img src={{ asset("images/assets/ils_08.1.svg") }} alt="" class="shapes shape-one">
						<img src={{ asset("images/assets/ils_08.2.svg") }} alt="" class="shapes shape-two">
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<!-- Session Status -->
					<x-auth-session-status class="mb-4" :status="session('status')" />
					<form action={{ route('password.email') }} class="user-data-form mt-80 md-mt-40" method="POST">
						@csrf
						<h5 class="mb-30">رمز عبور خود را فراموش کرده اید؟ مشکلی نیست فقط آدرس ایمیل خود را به ما اطلاع
							دهید و ما یک پیوند بازنشانی رمز عبور را برای شما ایمیل می کنیم که به شما امکان می دهد رمز
							جدیدی را انتخاب کنید.</h5>

						<br />
						<div class="row">
							<div class="col-12">
								<div class="input-group-meta input-group mb-50">
									<x-input-label for="email" :value="__('auth.email')" />
									<x-text-input type="email" name="email" />
									<x-input-error :messages="$errors->get('email')" class="mt-2" />
								</div>
							</div>
							<div class="col-12">
								<button class="theme-btn-one mt-10 mb-50 text-center" type="submit">پیوند بازنشانی رمز
									عبور ایمیل</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
</x-app-layout>