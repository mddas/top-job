@php
    $global_setting = app\Models\GlobalSetting::all()->first();
	$normal_gallary_notice = app\Models\Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
@endphp
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>{{$global_setting->page_title ?? 'Raki International | WelCome and Namaste'}}</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{$global_setting->favicon}}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="/website/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="/website/css/responsive.css">
		 <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- <div id="loader-wrapper">
				<div id="loader"></div>
			</div> -->
            
            @yield('content')

			
			<footer class="theme-footer-two">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12 logo-widget">
								<p>Our commitment is finding the right person for the right job as per the request of our valued clients around the world.</p>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.logo-widget -->
							<div class="col-lg-2 col-sm-6 col-12 footer-list">
								<h6 class="title">EXPLORE</h6>
								<ul>
									@foreach($normal_gallary_notice as $dat)
										<li><a href="{{route('category',$dat->nav_name)}}">{{$dat->caption}}</a></li>
									@endforeach
									
								</ul>
							</div> <!-- /.footer-list -->
							
							<div class="col-lg-3 col-sm-6 col-12 contact-widget">
								<h6 class="title">CONTACT</h6>
								<ul>
									<li>
										<i class="flaticon-direction-signs"></i>
										{{$global_setting->address_new}}
									</li>
									<li>
										<i class="flaticon-multimedia-1"></i>
										<a href="mailto:{{$global_setting->site_email}}">{{$global_setting->site_email}}</a>
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<a href="tel:{{$global_setting->phone}}">{{$global_setting->phone}}</a> / <a href="tel:{{$global_setting->phone_ne}}">{{$global_setting->phone_ne}}</a>
									</li>
								</ul>
							</div> <!-- /.contact-widget -->

							<div class="col-lg-3 col-sm-6 col-12 location">
								<iframe src="/website/https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.2935428013034!2d85.32834631438537!3d27.73909063070455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1939be1eac13%3A0x65c05fa92a8f20c!2sTop%20Jobs%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1655982801911!5m2!1sen!2snp" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="copy-right">
							<p>All Rights Reserved 2022 © Top Job Nepal Developed by <a href="http://www.radiantnepal.com/" target="_blank">Radiant Infotech Nepal</a></p>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer><!-- /.theme-footer -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="/website/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="/website/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/website/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='/website/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='/website/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='/website/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="/website/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="/website/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="/website/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="/website/vendor/jquery.appear.js"></script>
		<script src="/website/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="/website/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="/website/js/theme.js"></script>
		            	<!-- gllery js -->
	    <script src="/website/js/gallery/picturefill.min.js"></script>
	    <script src="/website/js/gallery/lightgallery.js"></script>
	    <script src="/website/js/gallery/lg-pager.js"></script>
	    <script src="/website/js/gallery/lg-autoplay.js"></script>
	    <script src="/website/js/gallery/lg-fullscreen.js"></script>
	    <script src="/website/js/gallery/lg-zoom.js"></script>
	    <script src="/website/js/gallery/lg-hash.js"></script>
	    <script src="/website/js/gallery/lg-share.js"></script>
        <script>
        lightGallery(document.getElementById('lightgallery'));

        $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#lightgallery").fadeTo(100, 0.1);
        $("#lightgallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('animation');
        $("#lightgallery").fadeTo(300, 1);
        }, 300);
        });
        });
    	</script>
	    <!--End gllery js -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            @if(Session::has('contact'))
            <script>
                Swal.fire(
                    'Thanks!',
                     "Form submitted sucessfully!!!",
                    'success'
                    )
            </script>
        @endif
	</div> <!-- /.main-page-wrapper -->
 </body>
</html>