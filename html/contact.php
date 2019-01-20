<?php $page = "Contact"; ?>
<?php include('header.php'); ?>

<div class="content">

	<div class="content bg-color page-title">
		<div class="container">
			<h1 class="display-4">Contact</h1>
		</div>
	</div>

	<div class="content contact">
		<div class="container">

			<p style="text-align: center;">Have any questions? Like my work? You can contact me using the form below and I'll get back to you as soon as I can!</p>

				<div class="row justify-content-center">
					<div class="media-container-column col-lg-8" data-form-type="formoid">
						<div data-form-alert="" hidden="">
							Thanks for filling out the form!
						</div>

						<form action="https://formspree.io/bradenfrazer@gmail.com" method="POST">
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

							<span class="input-group-btn">
								<button href="" type="submit" class="btn btn-outline-primary btn-form display-4">SEND FORM</button>
							</span>
						</form>
					</div>
				</div>

		</div>
	</div>

	<div class="content bg-light resume">
		<div class="container text-center">
			<a href="#" class="btn btn-outline-primary">Resume</a>
		</div>
	</div>

</div>

<?php
include('footer.php');
?>
