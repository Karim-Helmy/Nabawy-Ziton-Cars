@extends('front.index')

@section('content')


	{{-- Pages Banner Icluding Starts --}}

	@include('front.layouts.pages-banner')
    <div class="page-content">
        <!-- inner page banner -->

        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<div class="col-md-3 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">العنوان</h5>
								<p>107 شارع الملك فيصل – الهرم - الجيزة</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">البريد الاليكترونى</h5>
								<p>info@Elnabweyziton-cars.com</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">موبايل</h5>
								<p>01001883300  <br/> 01025388822 <br/> 01001883300 </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a30 center">
							<div class="icon-xl text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-fax"></i></a> </div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">تليفون</h5>
								<p>0237447074 <br/> 0233854440 <br/> 0237337074 </p>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<!-- Left part start -->
                    <div class="col-md-6">
                        <div class="p-a30 bg-gray clearfix m-b30  text-right">
							<h2>تواصل معنا</h2>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
					<!-- right part start -->
                    <div class="col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.463960445537!2d31.152187684445057!3d29.994831581900378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845c046ab83f9%3A0xeeaa54b43c315205!2z2LTYsdmD2Kkg2KfZhNmG2KjZiNmJINmE2YTYs9mK2KfYsdin2Ko!5e0!3m2!1sar!2seg!4v1547046636218"  frameborder="0" style="border:0; width:100%; height:450px;" allowfullscreen></iframe>
                    </div>
                    <!-- right part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection