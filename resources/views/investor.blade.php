
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
					<form action={{ route('investor.request')}} class="user-data-form mt-80 md-mt-40" method="POST">
                        @csrf
						<p class="header-info pt-30 pb-50">Investor form request</p>
                        <div class="row">
							<div class="col-12">
								<div class="input-group-meta mb-50 sm-mb-70">
									<x-input-label for="name" :value="__('name')" />
									<x-text-input type="text" placeholder="zahra" name="name" :value="old('name')" />
									<x-input-error :messages="$errors->get('name')" class="mt-2" />
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
									<x-input-label for="mobile" :value="__('auth.mobile')" />
									<x-text-input type="text" placeholder="09121111111" name="mobile" />
									<x-input-error :messages="$errors->get('mobile')" class="mt-2" />
								</div>
							</div>

                            <div class="col-12">
								<div class="input-group-meta mb-50">
									<select name="Investmentـtype" id="Investmentـtype">
                                        <option value="venture">venture</option>
                                        <option value="angel_investor">angel_investor</option>
                                    </select>
								</div>
							</div>

							<div class="col-12">
								<button class="theme-btn-one mt-0 mb-50" type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div> <!-- /.form-wrapper -->
			</div> <!-- /.user-data-page -->
        </x-app-layout>

			



