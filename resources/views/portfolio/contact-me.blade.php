<!--contact start -->
<section id="contact" class="contact">
	<div class="section-heading text-center">
		<h2>contact me</h2>
	</div>
	<div class="container">
		<div class="contact-content">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-form">
							<form action="{{route('portfolio')}}" method="psot">
                                @csrf
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="form-group">
										  <input type="text" class="form-control" id="name" placeholder="Name*" name="fullName">
										</div><!--/.form-group-->
									</div><!--/.col-->
									<div class="col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" placeholder="Email*" name="email">
										</div><!--/.form-group-->
									</div><!--/.col-->
								</div><!--/.row-->
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
										</div><!--/.form-group-->
									</div><!--/.col-->
								</div><!--/.row-->
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<textarea class="form-control" rows="8" id="comment" placeholder="Message" name="message"></textarea>
										</div><!--/.form-group-->
									</div><!--/.col-->
								</div><!--/.row-->
								<div class="row">
									<div class="col-sm-12">
										<div class="single-contact-btn">
											<button  type="submit" class="contact-btn" role="button">submit</button>
										</div><!--/.single-single-contact-btn-->
									</div><!--/.col-->
								</div><!--/.row-->
							</form><!--/form-->
						</div><!--/.contact-form-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-adress">
							<div class="contact-add-head">
								<h3>Youssad</h3>
								<p>FULL STACK DEVELOPER</p>
							</div>
							<div class="contact-add-info">
								<div class="single-contact-add-info">
									<h3>phone</h3>
									<p>+33745391147</p>
								</div>
								<div class="single-contact-add-info">
									<h3>email</h3>
									<p>udammou@gmail.com</p>
								</div>
								<div class="single-contact-add-info">
									<h3>website</h3>
									<p>www.lafac.net</p>
								</div>
							</div>
						</div><!--/.contact-adress-->
						<div class="hm-foot-icon">
							<ul>
								<li><a href="https://www.facebook.com/dammou.youssef.3"><i class="fa fa-facebook"></i></a></li><!--/li-->
								<li><a href="https://www.lafac.net/"><i class="fa fa-dribbble"></i></a></li><!--/li-->
								<li><a href="https://github.com/DAMMOU/"><i class="fa fa-github"></i></a></li><!--/li-->
								<li><a href="https://www.linkedin.com/in/youssef-dammou-760217241/"><i class="fa fa-linkedin"></i></a></li><!--/li-->
								<li><a href="https://www.instagram.com/youssad_dammou/"><i class="fa fa-instagram"></i></a></li><!--/li-->
							</ul><!--/ul-->
						</div><!--/.hm-foot-icon-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.contact-content-->
	</div><!--/.container-->

</section><!--/.contact-->
		<!--contact end -->