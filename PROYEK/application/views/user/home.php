   <!--/start-banner-->
  <div class="banner">
     <div class="container">
	       <div class="banner-inner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 1000ms ease-in-out;">
								<div class="banner-info">
								<h3>I'm proud to play for Real Madrid because I have fun; when you no longer have fun it's a sign that it's time to leave. For now though, I'm happy here at the greatest club in the world.</h3>
								<p>Christiano Ronaldo</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>Real Madrid is the most important thing that happened to me, both as a footballer and as a person.</h3>
								 <p>Zinedine Zidane</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								 <h3>To play for Barcelona, means to have an opportunity for a brilliant career. But to reach the top of it, you have to play for Real Madrid.</h3>
								<p>Luis Figo</p>
								</div>	
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
				</div>
        </div>
	</div>
	<!--//end-banner-->

 <!--/start-main-->
 <div class="main-content">
	   <div class="container">
	        <div class="mag-inner">
			    <div class="col-md-25 mag-innert-left">
		
 <!--/TOP PLAYER -->
 <div class="technology">
	 <h2 class="tittle"><i class="glyphicon glyphicon-certificate"> </i>Top Player</h2>
 <div class="banner-bottom-left-grids">
											<div class="single-left-grid">
												<center><img src="<?php echo base_url();?>assets/images/RM12.jpg" class="img-responsive" alt="" /></center>
												<h4>Cristiano Ronaldo Menerima  Ballon d'Or</h4>
												<p class="text"> Cristiano Ronaldo, dinobatkan sebagai peraih Ballon d'Or 2017 dalam acara yang berlangsung di Menara Eiffel, Paris, Prancis, Jumat (8/12/2017) dini hari WIB. Ronaldo kini sejajar dengan bintang Barcelona, Lionel Messi, yang sama-sama mengoleksi lima gelar Ballon d'Or.</p>
												<p class="text">Dengan ditemani Ronaldo Nazario da Lima dan David Ginola memimpin seremoni yang digelar di Menara Eiffel, Paris. Dalam detik-detik penerimaan penghargaan, Ronaldo muncul dengan sudah menggenggam trofi Ballon d'Or di tangan kanan dan memperlihatkan gestur tangan kiri yang mempertunjukkan kelima jari, yang artinya sudah lima kali pemain asal Portugal itu meraih gelar Ballon d'Or.</p>
											</div>
									</div>

<!--/PHOTO GALLERY-->
<div class="gallery">
	<div class="main-title-head">
		<h3 class="tittle"><i class="glyphicon glyphicon-picture"></i>Photo Gallery</h3>
	</div>
	<div class="gallery-images">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
				<li>
					<a href="<?php echo base_url();?>assets/images/RM1.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/images/RM1.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
				</li>
				<li>
					<a href="<?php echo base_url();?>assets/images/RM2.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/images/RM2.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
				</li>
				<li>
					<a href="<?php echo base_url();?>assets/images/RM3.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/images/RM3.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
				</li>	
			</ul>
		</div>
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
						 </div>
						  <div class="course_demo1">
								  <ul id="flexiselDemo">	
									 <li>
										 <a href="<?php echo base_url();?>assets/images/RM5.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/images/RM5.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
										</li>
									 <li>
										 <a href="<?php echo base_url();?>assets/images/RM6.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/images/RM6.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
										</li>
									 <li>
										 <a href="<?php echo base_url();?>assets/images/RM7.jpg" class="swipebox"  title="Image Title"> <img src="<?php echo base_url();?>assets/images/RM7.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
										</li>			
								 </ul>
							 </div>
							 <a class="more" href="<?php echo base_url();?>Madrid/photo_gallery">More  +</a>
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
							</div>

<!--/ABOUT-->
<br>
<div class="latest-articles">
	<h3 class="tittle"><i class="glyphicon glyphicon-file"></i>About</h3>
	<div class="banner-bottom-left-grids">
		<div class="single-left-grid">
			<h4>Real Madrid C.F.</h4>
			<p class="text">Real Madrid Club de Fútbol (pengucapan bahasa Spanyol: [reˈal maˈðɾið ˈkluβ ðe ˈfutβol]; Royal Madrid Football Club), umumnya dikenal sebagai Real Madrid, adalah klub sepak bola profesional yang berbasis di Madrid, Spanyol.</p>
			<p class="text">Didirikan pada tahun 1902 sebagai Madrid Football Club, secara tradisional mengenakan kostum kandang putih. Kata Real ("dari kerajaan") Spanyol dan dianugerahkan ke klub oleh Raja Alfonso XIII pada tahun 1920 bersama-sama dengan mahkota kerajaan di lambang klub. Klub ini telah memainkan pertandingan kandang di Stadion Santiago Bernabéu dengan kapasitas 85.454 di pusat kota Madrid sejak tahun 1947.</p>
			<a class="more" href="<?php echo base_url();?>Madrid/about">More  +</a>
			</div>
</div>

	       </div>
      </div>
 <!--//end-main-->