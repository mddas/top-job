	<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="index.html"><img src="{{$global_setting->banner_image}}" alt=""></a></div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									<h6>Basundhara-03</h6>
									<p>Kathmandu Nepal</p>
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6><a href="tel:{{$global_setting->phone}}">{{$global_setting->phone}}</a>	/	<a href="tel:{{$global_setting->phone_ne}}">{{$global_setting->phone_ne}}</a></h6>
									<p><a href="mailto:{{$global_setting->site_email}}">{{$global_setting->site_email}}</a></p>
								</li>
								<li class="quotes"><a href="#" target="_blank">Apply Now</a></li>
							</ul>
						</div> <!-- /.address-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
                                       <!-------menu------>
                                       <li class="active"><a href="/">HOME</a></li>
                                       @foreach($menus as $menu)
									   		@php $submenus = $menu->childs; @endphp
									    <li class="active"><a href="{{route('category',$menu->nav_name)}}">{{$menu->caption}}</a>
                                            <ul class="dropdown">
                                                @foreach($submenus as $sub)
									    		    <li><a href="{{route('subcategory',[$menu->nav_name,$sub->nav_name])}}">{{$sub->caption}}</a></li>
                                                @endforeach
									        </ul>
                                        </li>
                                        @endforeach
                                      
                                       <!-------menu closed--->
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<div class="right-widget float-right">
					   			<ul>
					   				<li class="social-icon">
					   					<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>
					   				</li>
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-one -->
