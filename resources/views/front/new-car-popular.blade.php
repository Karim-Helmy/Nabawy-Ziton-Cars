@extends('front.index')
@section('content')

    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle used-car-banner latest-cars" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Know everything about the Popular cars in market</h1>
					<div class="used-car">
						<div class="dlab-tabs">
							<div class="tab-content">
								<div class="tab-pane clearfix active in" >
									<form action="new-car-popular.html" method="post">
										<div class="row">
											<div class="col-md-3 col-sm-3">
												<div class="input-group">
													<select class="form-control">
														<option>Select Brand</option>
														<option>Popular Brands</option>
														<option>Honda</option>
														<option>Toyota</option>
														<option>Mahindra</option>
														<option>Tata</option>
														<option>Ford</option>
														<option>Renault</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="input-group">
													<select class="form-control">
														<option>Select Style</option>
														<option>Hatchback</option>
														<option>MUV</option>
														<option>SUV</option>
														<option>Luxury</option>
														<option>Minivans</option>
														<option>Coupe</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="input-group">
													<select class="form-control">
														<option>Launch Month</option>
														<option>In Last 3 Months</option>
														<option>In Last 6 Months</option>
														<option>In Last 1 Year</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3">
												<div class="input-group">
													<button class="site-button btn-block" type="submit">SEARCH</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Popular Cars</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row">
                    
                    <!-- left part start -->
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <div class="row">
							<div class="p-lr15 clearfix m-b15">
								<h2 class="h2 m-t0">POPULAR CARS</h2>
							</div>
                            <!-- blog grid  -->
                            <div id="masonry" class="dlab-blog-grid-3">
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-1" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-1">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-2" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-2">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-3" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-3">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic4.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-4" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-4">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic5.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-5" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-5">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic6.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-6" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-6">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic7.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-7" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-7">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic8.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-8" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-8">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic4.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-9" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-9">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-10" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-10">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-11" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-11">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
								<div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30">
										<div class="dlab-media"> 
											<a href="car-details-overview.html"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
											<div class="dropdown pull-right">
												<a id="drop-12" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="drop-12">
													<li><a href="car-detail-price.html">Price</a></li>
													<li><a href="car-detail-pictures.html">Pictures</a></li>
													<li><a href="car-detail-specifications.html">Specifications</a></li>
												</ul>
											</div>
										</div>
										<div class="dlab-info">
											<h4 class="dlab-title"><a href="car-details-overview.html">Hyundai santa fe sport </a></h4>
											<div class="dlab-separator bg-black"></div>
											<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
										</div>
										<div class="icon-box-btn text-center">
											<ul class="clearfix">
												<li>2017</li>
												<li>Manual</li>
												<li>210 hp </li>
											</ul>
										</div>
									</div>
                                </div>
							</div>
                            <!-- blog grid END -->
                            <!-- Pagination  -->
                            <div class="pagination-bx col-lg-12 clearfix ">
                                <ul class="pagination">
                                    <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination END -->
                        </div>
					</div>
                    <!-- left part END -->
					<!-- Side bar start -->
                    <div class="col-sm-4 col-md-4 col-lg-3 sticky-top">
						<aside  class="side-bar">
							<div class="widget recent-posts-entry">
								<h4 class="widget-title">Latest Cars</h4>
								<div class="widget-post-bx">
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-header">
												<h5><a href="new-car-latest.html">Maruti Swift Dzire</a></h5>
											</div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author open-sans"><b>$7247 - $8139</b></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> <img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-header">
												<h5><a href="new-car-latest.html">Maruti Baleno</a></h5>
											</div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author open-sans"><b>$8043 - $9039</b></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> <img src="images/blog/recent-blog/pic3.jpg" alt="" width="200" height="160"> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-header">
												<h5><a href="new-car-latest.html">Renault KWID</a></h5>
											</div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author open-sans"><b>$2147 - $8137</b></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-header">
												<h5><a href="new-car-latest.html">Maruti Swift Dzire</a></h5>
											</div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author open-sans"><b>$7247 - $8139</b></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dlab-post-media"> <img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-header">
												<h5><a href="new-car-latest.html">Maruti Baleno</a></h5>
											</div>
											<div class="dlab-post-meta">
												<ul>
													<li class="post-author open-sans"><b>$8043 - $9039</b></li>
												</ul>
											</div>
										</div>
									</div>
									<a href="new-car-latest.html" class="site-button btn-block text-center">View All Popular Cars</a>
								</div>
							</div>
							<div class="widget ads">
								<img src="images/ads/img2.jpg" alt=""/>
							</div>
							<div class="widget client-logo-wg">
								<h4 class="widget-title">Latest Cars By Brand</h4>
								<ul>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo1.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo2.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo3.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo4.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo5.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo6.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo7.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo8.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo9.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo10.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo11.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo12.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo13.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo14.jpg" alt=""/></a>
									</li>
									<li class="brand-logo">
										<a href="new-car-latest.html"><img src="images/client-logo/logo15.jpg" alt=""/></a>
									</li>
								</ul>
							</div>							
					   </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
	</div>

@endsection