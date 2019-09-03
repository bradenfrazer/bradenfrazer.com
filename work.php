<?php $page = "Work"; ?>
<?php include('header.php'); ?>

<div class="content bg-color page-title">
	<div class="container">
		<h1 class="display-4">Work</h1>
	</div>
</div>

<!--<div class="content work">
	<div class="container text-center">
		<p></p>
	</div>
</div>-->

<div class="content bg-light web-projects">
	<div class="container text-center">
		<h2 id="webprojects">Personal Web Projects</h2>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Spokes Bike Shop</h3>
						<h4 class="card-text">Wordpress Demo Site</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/spokes-thumb.png" alt="Spokes Bike Shop" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#spokesModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Landing Page</h3>
						<h4 class="card-text">Mock Webpage Design</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/lp1-thumb.png" alt="Landing Page" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#lpModal">
							Learn More
						</button>
				  </div>
			  </div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Weathrr</h3>
						<h4 class="card-text">ReactJS Weather App</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/weathrr-thumb.png" alt="Weathrr" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#weathrrModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Tic Tac Toe</h3>
						<h4 class="card-text">ReactJS Game</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/tictactoe-thumb.png" alt="Tic Tac Toe" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#tttModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Old Main Brewery</h3>
						<h4 class="card-text">Website Freelance Project</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/omb-home-thumb.png" alt="Old Main Brewery" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ombModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">HTML Bookmarklets</h3>
						<h4 class="card-text">Web Development Tool</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/HTML-bookmarklets-thumb.png" alt="HTML Bookmarklets" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#bookmarkletsModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<h2>Websites I Maintain</h2>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Best Home Services</h3>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/besthome-thumb.png" alt="Best Home Services" style="width:100%;">
					<div class="card-footer">
						<a href="https://www.getbest.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card h-100 text-center">
						<div class="card-header">
							<h3 class="card-title">Principal Charity Classic</h3>
						</div>
						<img class="card-img-top" src="../images/content/thumbs/pcc-thumb.png" alt="Principal Charity Classic" style="width:100%;">
						<div class="card-footer">
							<a href="https://www.principalcharityclassic.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
						</div>
					</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card h-100 text-center">
						<div class="card-header">
							<h3 class="card-title">Weil Tennis Academy</h3>
						</div>
						<img class="card-img-top" src="../images/content/thumbs/weiltennis-thumb.png" alt="Weil Tennis Academy" style="width:100%;">
						<div class="card-footer">
							<a href="https://www.weiltennis.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
						</div>
					</div>
			</div>
			</div>
			<h4>and 3,500+ others!</h4>
		</div>
	</div>
</div>

<!-- Spokes Bike Shop Modal -->
<div class="modal fade" id="spokesModal" tabindex="-1" role="dialog" aria-labelledby="spokesModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="spokesModalLabel">Spokes Bike Shop</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../images/content/thumbs/spokes-thumb.png" alt="Spokes Bike Shop" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Demo site made to practice WordPress theme design and development. WordPress theme created on a heavily modified free version of the <a href="https://bootstrap-wp.com/">Bootstrap 4 WordPress Theme</a>. Built in a local environment but currently hosting on 000webhost for showcase purposes.</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>Bootstrap 4</li>
								<li>WordPress</li>
								<ul>
									<li><a href="https://bootstrap-wp.com/">Bootstrap 4 WordPress Theme</a></li>
									<li>Contact Form 7</li>
								</ul>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="https://spokes-bike-shop.000webhostapp.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
			</div>
		</div>
	</div>
</div>

<!-- Landing Page Modal -->
<div class="modal fade" id="lpModal" tabindex="-1" role="dialog" aria-labelledby="lpModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lpModalLabel">Landing Page</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../images/content/thumbs/lp1-thumb.png" alt="Landing Page" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Mock landing page design for a fictional start-up.</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>Bootstrap 4</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="/lp1/" target="_blank" class="btn btn-outline-primary">View</a>
			</div>
		</div>
	</div>
</div>

<!-- OMB Modal -->
<div class="modal fade" id="ombModal" tabindex="-1" role="dialog" aria-labelledby="ombModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ombModalLabel">Old Main Brewery</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../images/content/thumbs/omb-home-thumb.png" alt="Old Main Brewery" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Freelance project for an up-and-coming College Station, TX brewery. I designed 5 different webpage templates as mockups and then implemented the designs in HTML5, CSS3, and Javascript. Working with one of the co-owners as a client, I went
								through an iterative process including first producing different mockups in Photoshop and then writing HTML/CSS/JavaScript for the concepts that the client liked best. The templates include animations and responsive elements already
								optimized for desktop, tablet, and mobile phone viewing of the website. You can find each of the templates hosted here on my site, while the site itself lives at <a href="http://oldmainbrewing.com">oldmainbrewing.com</a></p>

								<p><strong>Stack includes:</strong></p>
								<ul>
									<li>HTML</li>
									<li>CSS</li>
									<li>Javascript</li>
								</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<div class="justify-content-center d-flex flex-wrap p-1">
					<a href="http://oldmainbrewing.com" target="_blank" class="btn btn-primary">oldmainbrewing.com</a>
				</div>
				<div class="justify-content-center d-flex flex-wrap p-1">
					<a href="/omb/index.html" target="_blank" class="btn btn-outline-primary">Home Template</a>
					<a href="/omb/about-the-brewery/our-brewery/" target="_blank" class="btn btn-outline-primary">About Template</a>
					<a href="/omb/our-brews/" target="_blank" class="btn btn-outline-primary">Navigation Template</a>
					<a href="/omb/our-brews/rudders-red-belgian-red-ale/" target="_blank" class="btn btn-outline-primary">Product Template</a>
					<a href="/omb/contact-us/" target="_blank" class="btn btn-outline-primary">Contact Template</a>
				</div>
				<div class="justify-content-center d-flex flex-wrap p-1">
					<a href="../images/content/omb-wireframe1.png" target="_blank" class="btn btn-outline-primary">Wireframe 1</a>
					<a href="../images/content/omb-wireframe1alt.png" target="_blank" class="btn btn-outline-primary">Wireframe 1 Alternate</a>
					<a href="../images/content/omb-wireframe1-mobile.png" target="_blank" class="btn btn-outline-primary">Wireframe 1 Mobile</a>
					<a href="../images/content/omb-wireframe2.png" target="_blank" class="btn btn-outline-primary">Wireframe 2</a>
					<a href="../images/content/omb-wireframe2-mobile.png" target="_blank" class="btn btn-outline-primary">Wireframe 2 Mobile</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Weathrr Modal -->
<div class="modal fade" id="weathrrModal" tabindex="-1" role="dialog" aria-labelledby="weathrrModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="weathrrModalLabel">Weathrr</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../images/content/thumbs/weathrr-thumb.png" alt="Weathrr" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Weather conditions app built in ReactJS. A city name and country name are needed for input, and then the location name, current temperature, humidity, and conditions are pulled from OpenWeatherMap. More features to come soon!</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>Bootstrap 4</li>
								<li>React.JS</li>
								<li><a href="https://openweathermap.org/api" target="_blank">OpenWeatherMap API</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="/weathrr/index.html" target="_blank" class="btn btn-outline-primary">View</a>
			</div>
		</div>
	</div>
</div>

<!-- Tic Tac Toe Modal -->
<div class="modal fade" id="tttModal" tabindex="-1" role="dialog" aria-labelledby="tttModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tttModalLabel">Tic Tac Toe</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../images/content/thumbs/tictactoe-thumb.png" alt="Tic Tac Toe" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Simple Tic Tac Toe game built in ReactJS based on the <a href="https://reactjs.org/tutorial/tutorial.html" target="_blank">ReactJS.org intro tutorial</a>, with a built-in move history and my own personal responsive design.</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>React.JS</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="/tic-tac-toe/index.html" target="_blank" class="btn btn-outline-primary">Play</a>
			</div>
		</div>
	</div>
</div>

<!-- HTML Bookmarklets Modal -->
<div class="modal fade" id="bookmarkletsModal" tabindex="-1" role="dialog" aria-labelledby="bookmarkletsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="bookmarkletsModalLabel">Landing Page</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../images/content/thumbs/HTML-bookmarklets-thumb.png" alt="HTML Bookmarklets" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Javascript Bookmarklets created to assist when writing HTML in the web browser.</p>

							<p>Usage: highlight text in a text field and then choose the bookmarklet with the corresponding function you would like to use. Supports creation of Bootstrap 4 grid components, e.g. <em>col-md-6</em>, etc.</p>

							<p><strong>Features include:</strong></p>
							<ul>
								<li>Heading tags - h1, h2, h3, etc.</li>
								<li>Formatting tags - strong, em</li>
								<li>List maker - formats selected list of text broken up by line breaks into ul or ol with li elements</li>
								<li>Image tag with prompt for URL and alt text</li>
								<li>Anchor tags with prompt for URL and options for new window / tab</li>
								<li>Responsive YouTube / Vimeo videos with prompt for video ID</li>
								<li>Bootstrap 4 grid components</li>
									<ul>
										<li>Layout Maker - inserts indented divs with <em>container</em> and <em>row</em> classes around selection</li>
										<li>New Row Break - inserts div with class <em>w-100</em> to force new row</li>
										<li>col-sm-#, col-mg-#, col-lg-#</li>
									</ul>
								<li><em>...and more!</em></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="../images/content/HTML-bookmarklets.html" target="_blank" class="btn btn-outline-primary">Chrome Import File</a>
			</div>
		</div>
	</div>
</div>

<div class="content photography">
	<div class="container text-center">
		<h2 id="photography">Photography</h2>
		<div class="container gallery-container p-0">
			<div class="photography-gallery d-flex">
				<a class="lightbox" href="../images/photography/ring.jpg">
					<img src="../images/photography/thumbs/ring-t.jpg" alt="Ring" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/ringwide.jpg">
					<img src="../images/photography/thumbs/ringwide-t.jpg" alt="Ring wide" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/jordanlake.jpg">
					<img src="../images/photography/thumbs/jordanlake-t.jpg" alt="Jordan lake" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/beach.jpg">
					<img src="../images/photography/thumbs/beach-t.jpg" alt="Beach" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/rocks.jpg">
					<img src="../images/photography/thumbs/rocks-t.jpg" alt="Rocks" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/rockpath.jpg">
					<img src="../images/photography/thumbs/rockpath-t.jpg" alt="Rock path" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/lighthouse.jpg">
					<img src="../images/photography/thumbs/lighthouse-t.jpg" alt="Lighthouse" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/bridgewaterfall.jpg">
					<img src="../images/photography/thumbs/bridgewaterfall-t.jpg" alt="Bridge waterfall" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/road.jpg">
					<img src="../images/photography/thumbs/road-t.jpg" alt="Road" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/redleaf.jpg">
					<img src="../images/photography/thumbs/redleaf-t.jpg" alt="Red leaf" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/yellowleaf.jpg">
					<img src="../images/photography/thumbs/yellowleaf-t.jpg" alt="Yellow leaf" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/park.jpg">
					<img src="../images/photography/thumbs/park-t.jpg" alt="Park" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/autumntrail.jpg">
					<img src="../images/photography/thumbs/autumntrail-t.jpg" alt="Autumn trail" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/deck.jpg">
					<img src="../images/photography/thumbs/deck-t.jpg" alt="Deck" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/whitetrees.jpg">
					<img src="../images/photography/thumbs/whitetrees-t.jpg" alt="White trees" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/guitar.jpg">
					<img src="../images/photography/thumbs/guitar-t.jpg" alt="Guitar" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/guitarsurface.jpg">
					<img src="../images/photography/thumbs/guitarsurface-t.jpg" alt="Guitar surface" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/street.jpg">
					<img src="../images/photography/thumbs/street-t.jpg" alt="Street" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/camera.jpg">
					<img src="../images/photography/thumbs/camera-t.jpg" alt="Camera" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/cameraop.jpg">
					<img src="../images/photography/thumbs/cameraop-t.jpg" alt="Camera operator" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/videoboard.jpg">
					<img src="../images/photography/thumbs/videoboard-t.jpg" alt="Videoboard" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/switcher.jpg">
					<img src="../images/photography/thumbs/switcher-t.jpg" alt="Switcher" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/mixer.jpg">
					<img src="../images/photography/thumbs/mixer-t.jpg" alt="Mixer" class="card-img-top">
				</a>

				<a class="lightbox" href="../images/photography/studio.jpg">
					<img src="../images/photography/thumbs/studio-t.jpg" alt="Studio" class="card-img-top">
				</a>

			</div>
		</div>
	</div>
</div>

<script>
	baguetteBox.run('.photography-gallery');
</script>

<div class="content bg-light graphic-design">
	<div class="container text-center">
		<h2 id="graphicdesign">Graphic Design</h2>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Risky Ribbit</h3>
						<h4 class="card-text">Senior Capstone Project</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/risky-ribbit-thumb.png" alt="Risky Ribbit" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Risky Ribbit is an Android game developed in Unity with a team for my Senior capstone project at Texas A&M. For the project, I designed all of the UI, graphical assets, and menus used in the game.</p>
					</div>
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#rrModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Night Owls</h3>
						<h4 class="card-text">Branding Project</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/no-thumb.png" alt="Night Owls" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Night Owls is a fictional card game that I designed in a Graphic Design class that I took. As part of the project, I designed the vectorized logo, business cards and letter head for the company, and packaging.</p>
					</div>
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#owlsModal">
							Learn More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Archer Brochure</h3>
						<h4 class="card-text">Font Info Pamphlet</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/archer-thumb.png" alt="Archer brochure" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Typographic brochure for the font Archer created as a graphic design project.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/archer.pdf" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Breakaway Hoodies</h3>
						<h4 class="card-text">Mock Clothing Design</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/breakaway-designs-thumb.png" alt="Breakaway Volunteer Hoodies" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Proposed design of hoodies for volunteers of Breakaway Ministries, a College Station, TX ministry.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/breakawaydesigns.pdf" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Cartoon Monster</h3>
						<h4 class="card-text">Character Design</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/monster-thumb.png" alt="Cartoon Monster" style="width:100%;">
					<div class="card-body">
						<p class="card-text">A halloween-themed cartoon monster created for fun in a graphic design class.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/monster.pdf" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Scruggly Logos</h3>
						<h4 class="card-text">Logo Design</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/scruggly-thumb.png" alt="Scruggly logos" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Designs proposed for the logo of Scruggly, a note-taking application created by developers that were interns with me at ESPN.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/scrugglylogoproposals.pdf" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Typcycle Font Face</h3>
						<h4 class="card-text">Typeface Creation</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/typcycle-thumb.png" alt="Typcycle font face" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Font face designed by me using basic geometry and a grid.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/typcycle.pdf" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Ben Rector Poster</h3>
						<h4 class="card-text">Poster Design</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/ben-rector-poster-thumb.png" alt="Ben Rector poster" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Poster designed for a Ben Rector concert using my font face, Typcycle.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/benrectorposter.pdf" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Senior Recital Poster</h3>
						<h4 class="card-text">Poster Design</h4>
					</div>
					<img class="card-img-top" src="../images/content/thumbs/jenna-poster-thumb.png" alt="Senior recital poster" style="width:100%;">
					<div class="card-body">
						<p class="card-text">Poster advertisement created for a senior voice recital for a student in Louisiana State University's music school.</p>
					</div>
					<div class="card-footer">
						<a href="../images/content/jennaposter.png" target="_blank" class="btn btn-outline-primary">View</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- RiskyRibbit Modal -->
<div class="modal fade" id="rrModal" tabindex="-1" role="dialog" aria-labelledby="rrModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="rrModalLabel">Risky Ribbit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container text-center">
					<p>Risky Ribbit is an Android game developed in Unity with a team for my Senior capstone project at Texas A&M. The application was being developed for two professors in the Economics department as a means of studying the economic principles of
						risk aversion and time-based consumption in children ages 5-16. For the project, I designed most of the UI, graphical assets, and menus used in the game. The game was finished in May of 2017 and will later be used in studies across the country
						by our clients.</p>
				</div>
				<div class="container gallery-container">
					<div class="photography-gallery d-flex">
						<a class="lightbox" href="../images/content/riskyribbit/mainmenu.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/mainmenu.png" alt="Risky Ribbit Main Menu" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/options.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/options.png" alt="Risky Ribbit Options" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/admin.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/admin.png" alt="Risky Ribbit Admin" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/pregame1.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/pregame1.png" alt="Risky Ribbit Pregame" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/pregame2.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/pregame2.png" alt="Risky Ribbit Pregame 2" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/practice.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/practice.png" alt="Risky Ribbit Practice" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/gameplay.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/gameplay.png" alt="Risky Ribbit Gameplay" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/success.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/success.png" alt="Risky Ribbit Success" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/miss.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/miss.png" alt="Risky Ribbit Miss" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/score.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/score.png" alt="Risky Ribbit Score" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/survey.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/survey.png" alt="Risky Ribbit Survey" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/riskyribbit/end.png" target="_blank">
							<img src="../images/content/riskyribbit/thumbs/end.png" alt="Risky Ribbit End" class="card-img-top">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Night Owls Modal -->
<div class="modal fade" id="owlsModal" tabindex="-1" role="dialog" aria-labelledby="owlsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="owlsModalLabel">Night Owls</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container gallery-container">
					<div class="photography-gallery d-flex">
						<a class="lightbox" href="../images/content/nightowls/no.jpg" target="_blank">
							<img src="../images/content/nightowls/thumbs/no.jpg" alt="Night Owls Box Top" class="card-img-top">
						</a>

						<a class="lightbox" href="../images/content/nightowls/no-2.jpg" target="_blank">
							<img src="../images/content/nightowls/thumbs/no-2.jpg" alt="Night Owls Box Bottoms" class="card-img-top">
						</a>
					</div>
				</div>
				<div class="container text-center">
					<p>Night Owls is a fictional card game that I designed in a Graphic Design class that I took. As part of the project, I designed the vectorized logo, business cards and letter head for the company, and packaging. All of this work was done in
						Illustator and then printed out in hard copy formats for the final production to be assessed as if it were a real card game.</p>
				</div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="card h-100 text-center">
								<div class="card-header">
									<h3 class="card-title">Logo</h3>
								</div>
								<img class="card-img-top" src="../images/content/nightowls/thumbs/logo.png" alt="Night Owls logo" style="width:100%;">
								<div class="card-body p-0">
								</div>
								<div class="card-footer">
									<a href="../images/content/nightowls/logo.pdf" target="_blank" class="btn btn-outline-primary">View</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="card h-100 text-center">
								<div class="card-header">
									<h3 class="card-title">Business Cards</h3>
								</div>
								<img class="card-img-top" src="../images/content/nightowls/thumbs/businesscards.png" alt="Night Owls business cards" style="width:100%;">
								<div class="card-body p-0">
								</div>
								<div class="card-footer">
									<a href="../images/content/nightowls/businesscards.pdf" target="_blank" class="btn btn-outline-primary">View</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="card h-100 text-center">
								<div class="card-header">
									<h3 class="card-title">Letterhead</h3>
								</div>
								<img class="card-img-top" src="../images/content/nightowls/thumbs/letterhead.png" alt="Night Owls letterhead" style="width:100%;">
								<div class="card-body p-0">
								</div>
								<div class="card-footer">
									<a href="../images/content/nightowls/letterhead.pdf" target="_blank" class="btn btn-outline-primary">View</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content media-production">
	<div class="container text-center">
		<h2 id="mediaproduction">Media Production</h2>
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Demo Reel</h3>
						<h4 class="card-text"></h4>
					</div>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fbOoZcC7_FE?rel=0" allowfullscreen></iframe>
					</div>
					<div class="card-body">
						<p class="card-text">Summer 2017 version of my demo reel featuring some of my camera work for A&M Athletics and church events, and audio work for ESPN broadcasts.</p>
					</div>
					<div class="card-footer">
						<a href="http://youtu.be/fbOoZcC7_FE" target="_blank" class="btn btn-outline-primary">View on Youtube</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include('footer.php');
?>
