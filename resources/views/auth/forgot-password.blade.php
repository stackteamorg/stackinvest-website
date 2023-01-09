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
					<form action={{ route('password.email') }} class="user-data-form mt-80 md-mt-40" method="POST">
                        @csrf
						<h5 class="mb-30">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h5>

                        <br/>
						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-80 sm-mb-70">
									<label>Email</label>
									<input type="email" placeholder="bolcovfed@ce.edu" name="email">
								</div>
							</div>
							<div class="col-12">
								<button class="theme-btn-one mt-10 mb-50" type="submit">Email Password Reset Link</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
        </x-app-layout>

			



