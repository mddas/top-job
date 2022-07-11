	<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="index.html"><img src="/website/images/logo/logo.png" alt=""></a></div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									<h6>Basundhara-03</h6>
									<p>Kathmandu Nepal</p>
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6><a href="tel:015903103">01-5903103</a>	/	<a href="tel:015903102">5903102</a></h6>
									<p><a href="mailto:roshan@topjobsnepal.com">roshan@topjobsnepal.com</a></p>
								</li>
								<li class="quotes"><a href="apply-form.html" target="_blank">Apply Now</a></li>
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
									    <li class="active"><a href="#">{{$menu->caption}}</a>
                                            <ul class="dropdown">
                                                @foreach($menu->childs as $men)
									    		    <li><a href="#">{{$men->caption}}</a></li>
                                                @endforeach
									        </ul>
                                        </li>
                                        @endforeach
                                        <li><a href="#">About</a>
									    	<ul class="dropdown">
									    		<li><a href="#">About Us</a></li>
									       </ul>
									    </li>
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
