
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
					<form action={{ route('login') }} class="user-data-form mt-80 md-mt-40" method="POST">
                        @csrf
						<h2>Hi buddy, welcome <br> Back!</h2>
						<p class="header-info pt-30 pb-50">Still don't have an account? <a href="sign-up.html">Sign up</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<label>Email</label>
									<input type="email" placeholder="bolcovfed@ce.edu" name="email">
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
								<div class="agreement-checkbox d-flex justify-content-between align-items-center">
									<div>
										<input type="checkbox" id="remember">
										<label for="remember">Keep me logged in</label>
									</div>
									<a href={{ route('password.request') }}>Forget Password?</a>
								</div> <!-- /.agreement-checkbox -->
							</div>
							<div class="col-12">
								<button class="theme-btn-one mt-50 mb-50" type="submit">Login</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
        </x-app-layout>

			



