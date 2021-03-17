<?php $page = "Home"; ?>
<?php include('header.php'); ?>

<div class="content p-0">
	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="col-12 p-0 h-100">
				<div class="jumbotron h-100 p-0 m-0 d-flex flex-column">
					<div class="overlay"></div>
					<div class="container">
						<h1 class="display-2">Hi, I'm Braden.</h1>
						<p class="lead">I help design meet code.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="container text-center">
		<div class="row align-items-center">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<h3 class="text-uppercase"><b>I'm a</b></h3>
				<h2 class="display-4">front end web developer</h2>
				<p>With a unique, blended skillset between creative and technical, my passion is fusing the gap between design and code, bringing mockups to life as responsive user experiences.</p>
				<a href="#about" class="btn btn-outline-primary">About Me</a>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>

<div class="content bg-light about">
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-lg-7">
						<h2 id="about" class="display-4">About</h2>
        		<p>My name is Braden Frazer, and I'm a Texas A&M Aggie currently residing in the Dallas, TX area. I have a passion for all kinds of tech, and a particular focus in media and design that spans anywhere from designing websites and logos to running sound for a football stadium. I've maintained a unique balance between creative and tech throughout my life, studying programming as a Computer Science major in college while dabbling in photography, video editing, audio engineering, graphic design and more. Currently, I work as a web developer with <a href="https://www.designiq.com/">designIQ</a>, a full-service digital marketing and design agency in Plano, TX, building client websites and supporting over 3,000 launched websites for businesses around the world. If you have any questions or interest in my work, don't hesitate to contact me through the form on my contact page!</p>
    		</div>
			<div class="col-lg-5 headshot">
        		<img src="../uploads/content/paloduro.jpg" />
    		</div>
    	</div>
    </div>
</div>

<div class="content resume">
    <div class="container">
        <h2 id="resume" class="display-4">Resume</h2>
			</div>
    <div class="container text-center">
        <a href="../resume/index.html" target="_blank" class="btn btn-outline-primary">Online / HTML</a>
        <a href="../uploads/content/resume.pdf" target="_blank" class="btn btn-outline-primary">PDF</a>
				<p></p>
				<div class="timeline">
					<div class="timeline-dot-wrapper">
						<input type="radio" name="timeline-dot" data-description="S2017">
						<div class="dot-info" data-description="S2017">
							<span class="year">Spring 2017</span>
							<span class="label">Graduated college</span>
						</div>
						<input type="radio" name="timeline-dot" data-description="F2017">
						<div class="dot-info" data-description="F2017">
							<span class="year">Fall 2017</span>
							<span class="label">ESPN Internship</span>
						</div>
										<input type="radio" name="timeline-dot" data-description="S2018">
										<div class="dot-info" data-description="S2018">
											<span class="year">Spring 2018</span>
											<span class="label">Website Services Consultant</span>
										</div>
										<input type="radio" name="timeline-dot" data-description="M2019">
										<div class="dot-info" data-description="M2019">
											<span class="year">Summer 2019</span>
											<span class="label">Web Developer</span>
										</div>
						<div id="timeline-descriptions-wrapper">
							<p data-description="S2017">Graduated from Texas A&M University with a Bachelor's in Computer Science.</p>
							<p data-description="F2017">Interned at ESPN's headquarters in Bristol, CT as a Production Operations Audio Assistant.</p>
							<p data-description="S2018">Started Website Services Consultant position at Gannett, supporting over 3,000+ launched client websites.</p>
							<p data-description="M2019">Promoted to Web Developer at Gannett - building, styling, editing, and launching Wordpress sites in a fast-paced environment.</p>
						</div>
					</div>
				</div>
			</div>
</div>

<div class="content bg-light web-projects">
	<div class="container">
		<h2 id="work" class="display-4">Work</h2>
	</div>
	<div class="container text-center">
		<h3 id="webprojects">Personal Web Projects</h3>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Weathrr</h3>
						<h4 class="card-text">ReactJS Weather App</h4>
					</div>
					<img class="card-img-top" src="../uploads/content/thumbs/weathrr-thumb.png" alt="Weathrr" style="width:100%;">
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
					<img class="card-img-top" src="../uploads/content/thumbs/tictactoe-thumb.png" alt="Tic Tac Toe" style="width:100%;">
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
						<h3 class="card-title">Jokes App</h3>
						<h4 class="card-text">JavaScript API Demo</h4>
					</div>
					<img class="card-img-top" src="../uploads/content/thumbs/joke-app-thumb.jpg" alt="Jokes App" style="width:100%;">
					<div class="card-footer">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#jokesModal">
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
					<img class="card-img-top" src="../uploads/content/thumbs/lp1-thumb.png" alt="Landing Page" style="width:100%;">
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
						<h3 class="card-title">Spokes Bike Shop</h3>
						<h4 class="card-text">Wordpress Demo Site</h4>
					</div>
					<img class="card-img-top" src="../uploads/content/thumbs/spokes-thumb.png" alt="Spokes Bike Shop" style="width:100%;">
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
						<h3 class="card-title">Old Main Brewery</h3>
						<h4 class="card-text">Website Freelance Project</h4>
					</div>
					<img class="card-img-top" src="../uploads/content/thumbs/omb-home-thumb.png" alt="Old Main Brewery" style="width:100%;">
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
					<img class="card-img-top" src="../uploads/content/thumbs/HTML-bookmarklets-thumb.png" alt="HTML Bookmarklets" style="width:100%;">
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
		<h3>Websites I Maintain</h3>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100 text-center">
					<div class="card-header">
						<h3 class="card-title">Work Boot Warehouse</h3>
					</div>
					<img class="card-img-top" src="../uploads/content/thumbs/workboot-thumb.jpg" alt="Work Boot Warehouse" style="width:100%;">
					<div class="card-footer">
						<a href="https://www.workbootwarehouse.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card h-100 text-center">
						<div class="card-header">
							<h3 class="card-title">Shrimp Shop</h3>
						</div>
						<img class="card-img-top" src="../uploads/content/thumbs/shrimpshop-thumb.jpg" alt="Shrimp Shop" style="width:100%;">
						<div class="card-footer">
							<a href="https://www.shrimpshopmn.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
						</div>
					</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card h-100 text-center">
						<div class="card-header">
							<h3 class="card-title">Mazi</h3>
						</div>
						<img class="card-img-top" src="../uploads/content/thumbs/mazi-thumb.jpg" alt="Mazi" style="width:100%;">
						<div class="card-footer">
							<a href="https://www.mazidc.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
						</div>
					</div>
			</div>
			</div>
			<h4>and 3,000+ others!</h4>
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
							<img src="../uploads/content/thumbs/spokes-thumb.png" alt="Spokes Bike Shop" style="width:100%;">
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
							<p><a href="https://github.com/bradenfrazer/spokesdemo" target="_blank">Github</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="https://spokes.000webhostapp.com/" target="_blank" class="btn btn-outline-primary">Visit Site</a>
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
							<img src="../uploads/content/thumbs/lp1-thumb.png" alt="Landing Page" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Mock landing page design for a fictional start-up.</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>Bootstrap 4</li>
							</ul>
							<p><a href="https://github.com/bradenfrazer/lp1" target="_blank">Github</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="/projects/lp1/" target="_blank" class="btn btn-outline-primary">View</a>
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
							<img src="../uploads/content/thumbs/omb-home-thumb.png" alt="Old Main Brewery" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Freelance project for a College Station, TX based brewery. I designed 5 different webpage templates as mockups and then implemented the designs in HTML5, CSS3, and Javascript. Working with one of the co-owners as a client, I went
								through an iterative process, including first producing different mockups in Photoshop, and then writing HTML/CSS/JavaScript for the concepts that the client liked best. The templates include animations and responsive elements already
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
					<a href="/projects/omb/index.html" target="_blank" class="btn btn-outline-primary">Home Template</a>
					<a href="/projects/omb/about-the-brewery/our-brewery/" target="_blank" class="btn btn-outline-primary">About Template</a>
					<a href="/projects/omb/our-brews/" target="_blank" class="btn btn-outline-primary">Navigation Template</a>
					<a href="/projects/omb/our-brews/rudders-red-belgian-red-ale/" target="_blank" class="btn btn-outline-primary">Product Template</a>
					<a href="/projects/omb/contact-us/" target="_blank" class="btn btn-outline-primary">Contact Template</a>
				</div>
				<div class="justify-content-center d-flex flex-wrap p-1">
					<a href="../uploads/content/omb-wireframe1.png" target="_blank" class="btn btn-outline-primary">Wireframe 1</a>
					<a href="../uploads/content/omb-wireframe1alt.png" target="_blank" class="btn btn-outline-primary">Wireframe 1 Alternate</a>
					<a href="../uploads/content/omb-wireframe1-mobile.png" target="_blank" class="btn btn-outline-primary">Wireframe 1 Mobile</a>
					<a href="../uploads/content/omb-wireframe2.png" target="_blank" class="btn btn-outline-primary">Wireframe 2</a>
					<a href="../uploads/content/omb-wireframe2-mobile.png" target="_blank" class="btn btn-outline-primary">Wireframe 2 Mobile</a>
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
							<img src="../uploads/content/thumbs/weathrr-thumb.png" alt="Weathrr" style="width:100%;">
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
				<a href="/projects/weathrr/index.html" target="_blank" class="btn btn-outline-primary">View</a>
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
							<img src="../uploads/content/thumbs/tictactoe-thumb.png" alt="Tic Tac Toe" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Simple Tic Tac Toe game built in ReactJS based on the <a href="https://reactjs.org/tutorial/tutorial.html" target="_blank">ReactJS.org intro tutorial</a>, with a built-in move history and my own personal responsive design.</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>React.JS</li>
							</ul>
							<p><a href="https://github.com/bradenfrazer/tic-tac-toe" target="_blank">Github</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="/projects/tic-tac-toe/index.html" target="_blank" class="btn btn-outline-primary">Play</a>
			</div>
		</div>
	</div>
</div>

<!-- Jokes App Modal -->
<div class="modal fade" id="jokesModal" tabindex="-1" role="dialog" aria-labelledby="jokesModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="jokesModalLabel">Jokes App</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<img src="../uploads/content/thumbs/joke-app-thumb.jpg" alt="Jokes App" style="width:100%;">
						</div>
						<div class="col-lg-6">
							<p>Simple app that pulls jokes and their punchlines using the <a href="https://github.com/15Dkatz/official_joke_api" target="_blank">Official Joke API</a>, built in both vanilla JS and ReactJS.</p>

							<p><strong>Stack includes:</strong></p>
							<ul>
								<li>HTML</li>
								<li>CSS</li>
								<li>Vanilla Javascript / React.JS</li>
								<li><a href="https://github.com/15Dkatz/official_joke_api" target="_blank">Official Joke API</li>
							</ul>
							<p><a href="https://github.com/bradenfrazer/joke-app" target="_blank">Github (React version)</a><br />
							<a href="https://github.com/bradenfrazer/joke-app-vanilla" target="_blank">Github (Vanilla JS version)</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer flex-column">
				<a href="/projects/joke-app/index.html" target="_blank" class="btn btn-outline-primary">View (React version)</a>
				<a href="/projects/joke-app-vanilla/index.html" target="_blank" class="btn btn-outline-primary">View (Vanilla JS version)</a>
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
							<img src="../uploads/content/thumbs/HTML-bookmarklets-thumb.png" alt="HTML Bookmarklets" style="width:100%;">
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
				<a href="../uploads/content/HTML-bookmarklets.html" target="_blank" class="btn btn-outline-primary">Chrome Import File</a>
			</div>
		</div>
	</div>
</div>

<div class="content contact-form">
	<div class="container">
		<h2 id="contact" class="display-4">Contact</h2>
		<p style="text-align: center;">Have any questions? Like my work? You can contact me using the form below and I'll get back to you as soon as I can!</p>

		<div class="row justify-content-center">
			<div class="media-container-column col-lg-8" data-form-type="formoid">
				<div data-form-alert="" hidden="">
					Thanks for filling out the form!
				</div>

				<form name="contactform" method="POST" data-netlify="true">
					<div class="row row-sm-offset">
						<div class="col-md-6 multi-horizontal" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-7" for="name-form1-2w">Name</label>
								<input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-2w">
							</div>
						</div>
						<div class="col-md-6 multi-horizontal" data-for="email">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-7" for="email-form1-2w">Email</label>
								<input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-2w">
							</div>
						</div>
					</div>
					<div class="form-group" data-for="message">
						<label class="form-control-label mbr-fonts-style display-7" for="message-form1-2w">Message</label>
						<textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-2w"></textarea>
					</div>
					<div data-netlify-recaptcha="true"></div>
					<span class="input-group-btn">
						<div class="text-center">
							<button href="" type="submit" class="btn btn-outline-primary btn-form display-4">Send</button>
						</div>
					</span>
				</form>
			</div>
		</div>

	</div>
</div>

<div class="content bg-light">
	<div class="container contact-info">
		<div class="row">
			<div class="col-sm text-center">
				<svg version="1.1" id="Location-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
					<g>
						<g>
							<path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035
			c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719
			c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" />
						</g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
				</svg>

				<p>Dallas, TX</p>
			</div>
			<div class="col-sm text-center">
				<svg version="1.1" id="Email-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="550.795px" height="550.795px" viewBox="0 0 550.795 550.795" style="enable-background:new 0 0 550.795 550.795;"
				  xml:space="preserve">
					<g>
						<g>
							<path d="M501.613,491.782c12.381,0,23.109-4.088,32.229-12.16L377.793,323.567c-3.744,2.681-7.373,5.288-10.801,7.767
			c-11.678,8.604-21.156,15.318-28.434,20.129c-7.277,4.822-16.959,9.737-29.045,14.755c-12.094,5.024-23.361,7.528-33.813,7.528
			h-0.306h-0.306c-10.453,0-21.72-2.503-33.813-7.528c-12.093-5.018-21.775-9.933-29.045-14.755
			c-7.277-4.811-16.75-11.524-28.434-20.129c-3.256-2.387-6.867-5.006-10.771-7.809L16.946,479.622
			c9.119,8.072,19.854,12.16,32.234,12.16H501.613z" />
							<path d="M31.047,225.299C19.37,217.514,9.015,208.598,0,198.555V435.98l137.541-137.541
			C110.025,279.229,74.572,254.877,31.047,225.299z" />
							<path d="M520.059,225.299c-41.865,28.336-77.447,52.73-106.75,73.195l137.486,137.492V198.555
			C541.98,208.396,531.736,217.306,520.059,225.299z" />
							<path d="M501.613,59.013H49.181c-15.784,0-27.919,5.33-36.42,15.979C4.253,85.646,0.006,98.97,0.006,114.949
			c0,12.907,5.636,26.892,16.903,41.959c11.267,15.061,23.256,26.891,35.961,35.496c6.965,4.921,27.969,19.523,63.012,43.801
			c18.917,13.109,35.368,24.535,49.505,34.395c12.05,8.396,22.442,15.667,31.022,21.701c0.985,0.691,2.534,1.799,4.59,3.269
			c2.215,1.591,5.018,3.61,8.476,6.107c6.659,4.816,12.191,8.709,16.597,11.683c4.4,2.975,9.731,6.298,15.985,9.988
			c6.249,3.685,12.143,6.456,17.675,8.299c5.533,1.842,10.655,2.766,15.367,2.766h0.306h0.306c4.711,0,9.834-0.924,15.368-2.766
			c5.531-1.843,11.42-4.608,17.674-8.299c6.248-3.69,11.572-7.02,15.986-9.988c4.406-2.974,9.938-6.866,16.598-11.683
			c3.451-2.497,6.254-4.517,8.469-6.102c2.057-1.476,3.605-2.577,4.596-3.274c6.684-4.651,17.1-11.892,31.104-21.616
			c25.482-17.705,63.01-43.764,112.742-78.281c14.957-10.447,27.453-23.054,37.496-37.803c10.025-14.749,15.051-30.22,15.051-46.408
			c0-13.525-4.873-25.098-14.598-34.737C526.461,63.829,514.932,59.013,501.613,59.013z" />
						</g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
				</svg>

				<p style="white-space: nowrap;"><a href="mailto:bradenfrazer@gmail.com">bradenfrazer@gmail.com</a></p>
			</div>
			<div class="col-sm text-center">
				<svg version="1.1" id="Phone-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="348.077px" height="348.077px" viewBox="0 0 348.077 348.077" style="enable-background:new 0 0 348.077 348.077;"
				  xml:space="preserve">
					<g>
						<g>
							<g>
								<path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076
				c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257
				c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194
				C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02
				C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876
				c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029
				C350.631,303.527,350.95,285.795,340.273,275.083z" />
							</g>
						</g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
				</svg>

				<p style="white-space: nowrap;"><a href="tel:2819097514">281-909-7514</a></p>
			</div>
		</div>
	</div>
</div>

</div>

<?php
include('footer.php');
?>
