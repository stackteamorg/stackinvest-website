{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}




<x-app-layout>

	<body>
		<div class="main-page-wrapper p0">
			<div class="user-data-page clearfix d-lg-flex">
				<div class="illustration-wrapper d-flex align-items-center justify-content-between flex-column">
					<h3 class="font-rubik">Want your best managment <br>software? <a href="sign-up.html">sign up</a></h3>
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

						<h2>Hi buddy, welcome <br> Back!</h2>
						<p class="header-info pt-30 pb-50">Still don't have an account? <a href={{ route('register') }}>Sign up</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<label>Email</label>
									<input type="email" name="email" value="old('email', $request->email)">
								</div>
							</div>
							<div class="col-12">
								<div class="input-group-meta mb-15">
									<label>Password</label>
									<input type="password" placeholder="Enter Password" class="pass_log_id" name="password">
									<span class="placeholder_icon"><span class="passVicon"><img src={{ asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-15">
									<label>Password</label>
									<input type="password" placeholder="Enter Password" class="pass_log_id" name="password_confirmation">
									<span class="placeholder_icon"><span class="passVicon"><img src={{ asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<button class="theme-btn-one mt-50 mb-50" type="submit">Login</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
        </x-app-layout>

			



