	<div id="theme-main-banner" class="banner-one"> 
		@foreach($banners as $banner)
				<div data-src="{{$banner->banner_image}}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">{{$banner->short_content}}</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">{{$banner->caption}}</h1>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
		@endforeach
	 </div> <!-- /#theme-main-banner -->
