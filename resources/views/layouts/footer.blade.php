<div class="container">
	<div class="row mb-3">
		<div class="col-md-4">	
				<article class="card card-body">
					<figure class="itemside">
						<div class="aside">
							<span class="icon-sm rounded-circle bg-primary">
								<i class="fa fa-money-bill-alt white"></i>
							</span>
						</div>
						<figcaption class="info">
							<h5 class="title">Reasonable prices</h5>
							<p>Our products are cheaper compared to other stores in the town </p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div><!-- col // -->
			<div class="col-md-4">
				<article class="card card-body">
					<figure class="itemside">
						<div class="aside">
							<span class="icon-sm rounded-circle bg-secondary">
								<i class="fa fa-comment-dots white"></i>
							</span>
						</div>
						<figcaption class="info">
							<h5 class="title">Customer support</h5>
							<p>We provide assistance for customers who are having trouble in using the website</p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div><!-- col // -->
			<div class="col-md-4">
				<article class="card card-body">
					<figure class="itemside">
						<div class="aside">
							<span class="icon-sm rounded-circle bg-success">
								<i class="fa fa-truck white"></i>
							</span>
						</div>
						<figcaption class="info">
							<h5 class="title">Quick delivery</h5>
							<p>Give us a try! Place your order and you will not regret</p>
						</figcaption>
					</figure> <!-- iconbox // -->
				</article> <!-- panel-lg.// -->
			</div><!-- col // -->
		</div>
</div>

<footer class="bg-white section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md-4">
					<article class="mr-3">
						<img src="{{ asset('images/logo.png') }}" class="logo-footer">
						<p class="mt-3 text-justify">The owner of the Allena Mindoro Store is Mrs. Emelina Almarez, they started their business on May, 2006. They started with a small store and only sold a few. Gradually it grew, developed and had several more branches due to the cooperation of the siblings of the owner of this store.</p>

					</article>
				</aside>
				<aside class="col-sm-3 col-md-2">
					<h6 class="title">About</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Shipping Policy</a></li>
						<li> <a href="#">Terms of Service</a></li>
					</ul>
				</aside>
				<aside class="col-sm-3  col-md-2">
					<h6 class="title">For users</h6>
					<ul class="list-unstyled">
						<li> <a href="{{ route('login') }}"> User Login </a></li>
						<li> <a href="{{ route('register') }}"> User Register </a></li>
						<li> <a href="{{ route('user.overview') }}"> Account Overview </a></li>
						<li> <a href="{{ route('user.orders') }}"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-sm-2  col-md-2">
					<h6 class="title">Contact Us</h6>
					<div>
						<a class="btn btn-icon btn-light" title="Email" href="mailto:mindoroallenastore@gmail.com"><i class="icon fa fa-envelope"></i></a> ems.almarez@gmail.com<br>
						<a class="btn btn-icon btn-light" title="Contact Number" href="#"><i class="icon fa fa-phone"></i> </a> (043) 318-2109 / <br> +(63) 995-609-3956 
					</div>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-copyright border-top">
				<p class="text-muted"> © 2021 Alena Mindoro • All rights reserved </p>
				
		</section>
	</div><!-- //container -->
</footer>