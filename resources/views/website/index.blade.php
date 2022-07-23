@extends("layouts.master")

@section("content")

	@include("website.navbar")
	@if(isset($sliders))
	    @include("website.main_slider")
	@endif
	@if(isset($about))
		@include("website.about_company")
	@endif
	@include("website.home_job_category")
		  <!---
			============================================== 
			-->
			<div class="feature-banner">
				<div class="opacity">
					<div class="container">
						<h2>practice Ethical Recruitment and comply to various Business Code of Conducts.</h2>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.Slogan banner -->

	@include("website.latest_job")
	@include("website.company_success")
	@include("website.company_partner")

@endsection