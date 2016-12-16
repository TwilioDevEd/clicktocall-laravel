<!DOCTYPE html>
<html lang="en">
<head>
	<title>Click To Call Tutorial</title>
	<!-- We use Twitter Bootstrap as the default styling for our page-->
	<link rel="stylesheet"
		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet"
		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Include CSS for our third-party telephone input jQuery plugin-->
	<link rel="stylesheet" href="/vendor/intl-phone/css/intlTelInput.css">
</head>
<body>
	<div class="container">
		<h1>Click To Call</h1>
		<p>
			Click To Call converts your website's users into engaged customers by
			creating an easy way for your customers to contact your sales and
			support teams right on your website.
		</p>
		<p>Here's an example of how it's done!</p>
		<hr>

		<!-- C2C contact form-->
		<div class="row">
			<div class="col-md-12">
				<form id="contactForm" role="form">
					<div class="form-group">
						<h3>Call Sales</h3>
						<p class="help-block">
							Are you interested in impressing your friends and
							confounding your enemies? Enter your phone number
							below, and our team will contact you right away.
						</p>
					</div>
                    <label>Your number</label>
                    <div class="form-group">
                       <input class="form-control" type="text" name="userPhone" id="userPhone"
                              placeholder="(651) 555-7889">
                    </div>
                    <label>Sales team number</label>
                    <div class="form-group">
                       <input class="form-control" type="text" name="salesPhone" id="salesPhone"
                              placeholder="(651) 555-7889">
                     </div>
					<button type="submit" class="btn btn-default">
						Contact Sales
					</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Include page dependencies -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/vendor/intl-phone/js/intlTelInput.min.js"></script>
	<script src="/app.js"></script>
</body>
</html>
