<?php $page = "About"; ?>
<?php include('header.php'); ?>

<div class="content bg-color page-title">
    <div class="container">
        <h1 class="display-4">About</h1>
    </div>
</div>

<div class="content about">
    <div class="container">
        <div class="row align-items-center">
        	<div class="col-lg-7">
        		<p>My name is Braden Frazer, and I'm a Texas A&M Aggie currently residing in the Dallas, TX area. I have a passion for all kinds of tech, and a particular focus in media and design that spans anywhere from designing websites and logos to running sound for a football stadium. I've maintained a unique balance between creative and tech throughout my life, studying programming as a Computer Science major in college while dabbling in photography, video editing, audio engineering, graphic design and more. Currently, I work as a web developer with <a href="https://www.designiq.com/">designIQ</a>, a full-service digital marketing and design agency in Plano, TX, building client websites and supporting over 3,000 launched websites for businesses around the world. If you have any questions or interest in my work, don't hesitate to contact me through the form on my contact page!</p>
    		</div>
			<div class="col-lg-5 headshot">
        		<img src="../images/content/paloduro.jpg" />
    		</div>
    	</div>
    </div>
</div>

<div class="content bg-light resume">
    <div class="container text-center">
        <h3>Resume</h3>
        <p></p>
        <a href="../resume/index.html" target="_blank" class="btn btn-outline-primary">Online</a>
        <a href="../images/content/resume.pdf" target="_blank" class="btn btn-outline-primary">PDF</a>
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

<?php
include('footer.php');
?>
