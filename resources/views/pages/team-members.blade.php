 <!-- team section starts
================================================== -->
<x-app-layout>

		<div class="main-page-wrapper">								
			<!-- 
			=============================================
				Fancy Hero One
			============================================== 
			-->
			<div class="fancy-hero-one">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-11 m-auto">
							<h2 class="font-rubik">{{ __('team.title') }}</h2>
						</div>
						<div class="col-xl-9 col-lg-11 m-auto">
							<p class="font-rubik">{{ __('team.sub-title') }}</p>
							<!-- <a href="https://html.creativegigstf.com/deski/rtl/deski/contact-us(light).html" class="theme-btn-one btn-lg mt-50 md-mt-30">Contact US</a> -->
						</div>
					</div>
				</div>
				<div class="bubble-one"></div>
				<div class="bubble-two"></div>
				<div class="bubble-three"></div>
				<div class="bubble-four"></div>
				<div class="bubble-five"></div>
				<div class="bubble-six"></div>
			</div> <!-- /.fancy-hero-one -->
			

			<!--
			=====================================================
				Team Section Five
			=====================================================
			-->
			<div class="team-section-five">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
							<div class="team-member team-block-one mb-50" onclick="location.href='team-single.html';">
								<div class="info">
									<div class="desig">{{ __('team.member1-position') }}</div>
									<div class="name">{{ __('team.member1') }}</div>
								</div>
								<div class="img-meta"><img src="{{ asset('images/gallery/team-member1.JPG') }}" alt=""></div>
							</div> <!-- /.team-member -->
						</div>
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
							<div class="team-member team-block-one mb-50" onclick="location.href='team-single.html';">
								<div class="info">
									<div class="desig">{{ __('team.member2-position') }}</div>
									<div class="name">{{ __('team.member2') }}</div>
								</div>
								<div class="img-meta"><img src="{{ asset('images/gallery/team-member2.JPG') }}" alt=""></div>
							</div> <!-- /.team-member -->
						</div>
						<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
							<div class="team-member team-block-one mb-50" onclick="location.href='team-single.html';">
								<div class="info">
									<div class="desig">{{ __('team.member3-position') }}</div>
									<div class="name">{{ __('team.member3') }}</div>
								</div>
								<div class="img-meta"><img src="{{ asset('images/gallery/team-member3.JPG') }}" alt=""></div>
							</div> <!-- /.team-member -->
						</div>
					
						</div>
					</div>
				</div>
			</div> <!-- /.team-section-five -->

			


			<!--
			=====================================================
				Fancy Short Banner Eleven
			=====================================================
			-->
			<div class="fancy-short-banner-eleven">
				<div class="container">
					<div class="border-bottom pt-130 pb-150 md-pt-80 md-pb-80">
						<div class="row">
							<div class="col-lg-8 col-md-9 m-auto">
								<h2 class="font-rubik" data-aos="fade-up" data-aos-duration="1200">{{ __('team.head-resume') }}</h2>
								<a href="https://html.creativegigstf.com/deski/rtl/deski/contact-us(light).html" class="theme-btn-one btn-lg mt-50 md-mt-30" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">ارسال رزومه</a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.fancy-short-banner-eleven -->
</x-app-layout>
           
        <!-- team section ends
================================================== --> 
                    
