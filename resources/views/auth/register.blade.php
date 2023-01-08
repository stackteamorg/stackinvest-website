
<x-app-layout>
		<div class="main-page-wrapper p0">
			<div class="user-data-page clearfix d-lg-flex">
				<div class="illustration-wrapper d-flex align-items-center justify-content-center flex-column">
					<h3 class="font-rubik">We have a “strategic” plan its <br> called doing things.</h3>
					<div class="illustration-holder">
						<img src={{ asset("images/assets/ils_08.svg") }} alt="" class="illustration">
						<img src={{ asset("images/assets/ils_08.1.svg") }} alt="" class="shapes shape-one">
						<img src={{ asset("images/assets/ils_08.2.svg") }} alt="" class="shapes shape-two">
					</div>
				</div> <!-- /.illustration-wrapper -->

				<div class="form-wrapper">
					<form action={{ route('register') }} class="user-data-form mt-30" method="POST">
                        @csrf
						<h2>Join with thousands of startup!</h2>
						<p class="header-info pt-30 pb-50">Already have an account?  <a href="login.html">Login</a></p>

						<div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-50">
									<label>StartUp Name</label>
									<input type="text" placeholder="Foobey" name="startup_name">
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<label>Name</label>
									<input type="text" placeholder="Zahra" name="name">
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<label>LastName</label>
									<input type="text" placeholder="Rezaei" name="lastname">
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<label>Mobile</label>
									<input type="text" placeholder="09121111111" name="mobile">
								</div>
							</div>

							<div class="col-12">
								<div class="input-group-meta mb-50">
									<label>Email</label>
									<input type="email" placeholder="bolcovfed@ce.edu" name="email">
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
									<label>Password</label>
									<input type="password" placeholder="Enter Password" class="pass_log_id" name="password">
									<span class="placeholder_icon"><span class="passVicon"><img src={{ asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<div class="input-group-meta mb-15">
									<label>Re-type Password</label>
									<input type="password" placeholder="Enter Password" class="pass_log_id" name="password_confirmation">
									<span class="placeholder_icon"><span class="passVicon"><img src={{ asset("images/icon/view.svg") }} alt=""></span></span>
								</div>
							</div>
							<div class="col-12">
								<div class="agreement-checkbox d-flex justify-content-between align-items-center sm-mt-10">
									<div>
										<input type="checkbox" id="agree_to_policy">
										<label for="agree_to_policy">By clicking "SIGN UP" I agree to the Terms and Conditions and Privacy Policy.</label>
									</div>
								</div> <!-- /.agreement-checkbox -->
							</div>
							<div class="col-12">
								<button type="submit" class="theme-btn-one mt-30 mb-50">Sign Up</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
        </x-app-layout>