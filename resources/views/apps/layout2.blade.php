<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset ('appinclude/css/frontend/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('appinclude/js/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('appinclude/css/frontend/layout/wide.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('appinclude/css/frontend/switcher.css')}}">
    <script src=".{{asset('appinclude/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>
<body>
<div id="preloader">
	<div id="status"></div>
</div>

	<!--Start Header-->
	<header id="header">
		<!-- Container -->
		<div class="container">
			<div class="row">
			<!-- Logo / Mobile Menu -->
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div id="mobile-navigation">
						<a href="#menu" class="menu-trigger">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					
					<div id="logo">
						<h1><a href="#"><img src="../appinclude/images/frontend/logo.png"></a></h1>
					</div>
				</div>
				
				<!-- Navigation
				================================================== -->
				
								<div class="col-lg-10 col-md-10">
					<nav id="navigation" class="menu">
						<ul id="responsive">
							<li><a href="/home" id="">Home</a></li>
							<li><a href="/aboutus" id="">About Us</a></li>
							<li><a href="/mobil" id="">Pilih Mobil</a></li>
							<li><a href="https://drive.google.com/open?id=1iwz3ASz77-YFVBkga2vhucm0d4h4uzlK" id="">Download Aplikasinya</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- Container / End -->
	</header>
		<!--End Header--><!--start wrapper-->
        <section class="content">
            @yield('content')
        </section>
        <footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-4">
					<div class="dividerWidget">
						<h4>About Us</h4>
						<div class="gDot widget"></div>
					</div>
					<div class="widfoot_content">
						<p><p>
						Di Rental Mobil GUE, kami tidak hanya bangga menjadi perusahaan rental mobil terkemuka yang menawarkan mobil kualitas terbaik dan layanan yang sangat efisien, tetapi kami juga merupakan perusahaan yang memenuhi setiap kebutuhan Anda, membawa Anda ke mana pun yang ingin Anda tuju .. <a href="/aboutus">read more..</a></p>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-4">
					<div class="dividerWidget">
						<h4>Customer Care</h4>
						<div class="gDot widget"></div>
					</div>
					<div class="widfoot_content">
						<ul class="contact-details-alt">
							<li><i class="fa fa-envelope"></i> <p> &nbsp; customerservice@rental.co.id</p></li>
                            <li><i class="fa fa-envelope"></i> <p> &nbsp; mobil.gue@rental.co.id</p></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-4">
					<div class="dividerWidget">
						<h4>Contact Us</h4>
						<div class="gDot widget"></div>
					</div>
					<div class="widfoot_content">
						<ul class="contact-details-alt">
                        	<li><i class="fa fa-map-marker"></i> <p><strong>Jakarta</strong>&nbsp;&nbsp;&nbsp; : &nbsp; RENTAL MOBIL GUE<br />
							Jalan Inpres No.13 Kav.27A, RT.1/RW.1, Kedoya Utara, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520</p></li>
                        	<li><i class="fa fa-phone"></i> <p><strong>Phone</strong>&nbsp;&nbsp;&nbsp; : &nbsp; (+62 21) 1234567<br />
                              (+62) 7654321</p></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--end footer-->
	<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

	<script type="text/javascript" src="{{asset('js/format_uang.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('appinclude/js/vendor/jquery-1.10.2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery/test/jquery.js')}}"></script>
	<script src="{{asset('appinclude/js/vendor/bootstrap.js')}}"></script>
	<script src="{{asset('appinclude/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('appinclude/js/retina-1.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('appinclude/js/jquery.cookie.js')}}"></script> <!-- jQuery cookie -->
	<script src="{{asset('appinclude/js/jquery.superfish.js')}}"></script>
	<script src="{{asset('appinclude/js/jquery.jpanelmenu.js')}}"></script>
	<script src="{{asset('appinclude/js/jquery.blackandwhite.min.js')}}"></script>
	<script src="{{asset('appinclude/js/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
	<script src="{{asset('appinclude/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('appinclude/js/jquery.jcarousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('appinclude/js/jquery.magnific-popup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('appinclude/js/jquery.isotope.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('appinclude/js/swipe.js')}}"></script>
	<script type="text/javascript" src="{{asset('appinclude/js/jquery.timeago.js')}}"></script>
    <script src="{{asset('appinclude/js/main.js')}}"></script>

</body>
</html>