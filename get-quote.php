<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title> Get a Quote</title>
	<meta name="author" content="Collin IT Solution">
	<meta name="description" content="Build Rich - Construction Equipments">
	<meta name="keywords" content="Build Rich">
	<meta name="robots" content="INDEX,FOLLOW">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/product/logo.jpg">

	<link rel="manifest" href="assets/img/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage"
	content="assets/img/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/product/logo.jpg">

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link
	href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800;900&amp;family=Public+Sans:wght@100;200;300;400;500;600;700&amp;display=swap"
	rel="stylesheet">
<link rel="stylesheet" href="assets/css/app.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<?php include 'header.php'; ?>

<body>
	<div class="breadcumb-wrapper"
		data-bg-src="assets/img/bg/connn.png">
		<div class="container">
			<div class="breadcumb-content">
				<h1 class="breadcumb-title">Get a Quote</h1>
				<ul class="breadcumb-menu">
					<li><a href="index.html">Home</a></li>
					<li>Get a Quote</li>
				</ul>
			</div>
		</div>
	</div>
	
	<?php if (isset($_GET['msg'])) : ?>
    <div class="alert alert-success">
        <h4 style="color:green; font-weight: 500;text-align: center;">Form Submitted Successfully!</h4>
    </div>
<?php endif; ?>

<?php if (isset($_GET['error'])) : ?>
    <div class="alert alert-danger">
        <h4 style="font-weight: 400; text-align: center;"><b style="color: red;">Submission Failed!</b> Please contact on <a href="tel:+919309990229">+91-93099 90229</a></h4>
    </div>
<?php endif; ?>
	
	<div class="contact-area-2 space-bottom" id="contact-sec">
		<div class="container">
	
				<div class="row gy-4 justify-content-center">
				<div class="col-lg-12">
					<div class="contact-wrap2" style="margin-bottom: 50px;">
						<div class="contact-form-wrap">
							<h2 class="title h3 text-center mt-n1">Get a Quote</h2>
							<form action="send_contact.php"
								method="POST" class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="fname" id="name"
												placeholder="Your Name*" required> <i class="fal fa-user"></i>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" name="Email"
												id="email" placeholder="Email Address*" required> <i
												class="fal fa-envelope"></i>
										</div>
									</div>
										<div class="col-md-6">
										<div class="form-group">
											<input type="tel" class="form-control" name="phone"
												id="number" placeholder="Phone Number*" required> <i class="fal fa-phone"></i>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="referance"
												id="email" placeholder="Quotation For Product*" required> <i
												class="fal fa-edit"></i>
										</div>
									</div>
								
									<div class="col-12">
										<div class="form-group">
											<textarea name="message" id="message" cols="30" rows="3"
												class="form-control" placeholder="Write Your Message"></textarea>
											<i class="fal fa-pen"></i>
										</div>
									</div>
									<div class="form-btn col-12">
										<button class="th-btn w-100" type="submit" name="sendquote">
											Submit<i class="fas fa-long-arrow-right ms-2"></i>
										</button>
									</div>
								</div>
								<p class="form-messages mb-0 mt-3"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
					<div class="title-area text-center">
				<h2 class="sec-title">Our Contact Information</h2>
			</div>
			<div class="row gy-4 justify-content-center">
				<div class="col-xl-4 col-lg-6">
					<div class="contact-feature">
						<div class="contact-feature-icon">
							<i class="fal fa-location-dot"></i>
						</div>
						<div class="media-body">
							<p class="contact-feature_label">Our Address</p>
							<a href="https://www.google.com/maps"
								class="contact-feature_link">Sr.No.31/5/1,Besides Akemi Business School,Marunji(Wakad),Tal.Mulshi,Dist.
								Pune,Pune-411057</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="contact-feature">
						<div class="contact-feature-icon">
							<i class="fal fa-phone"></i>
						</div>
						<div class="media-body">
							<p class="contact-feature_label">Sales Number</p>
							<a href="tel:256214203215" class="contact-feature_link">Mobile:
								+9309990229</a> <a href="mailto:sales@buildrich.in"
								class="contact-feature_link">Email: sales@buildrich.in </a>
								<br>
						</div>
					</div>
				</div>
				
				
				
				
				<div class="col-xl-4 col-lg-6">
					<div class="contact-feature">
						<div class="contact-feature-icon">
							<i class="fal fa-phone"></i>
						</div>
						<div class="media-body">
							<p class="contact-feature_label">Rental Number</p>
							<a href="tel:256214203215" class="contact-feature_link">Mobile:
								+7020950460</a> <a href="mailto:sales@buildrich.in"
								class="contact-feature_link">Email: rental@buildrich.in </a>
								<br>
						</div>
					</div>
				</div>
				
				
				
				
				
			
			</div>
		</div>
	</div>
	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121060.445381845!2d73.70602791576644!3d18.522623451234193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbd4e22da337%3A0xa31558f181427cf3!2sBuildrich%20Construction%20Equipment%20Private%20Limited!5e0!3m2!1sen!2sin!4v1702555907727!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
	<?php include 'footer.php'; ?>
<script>
    // Check if 'msg' or 'error' parameter is present in the URL
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('msg')) {
        alert("Form Submitted Successfully!");
    }

    if (urlParams.has('error')) {
        alert("Submission Failed! Please contact on +91-93099 90229");
    }
</script>
	<div class="scroll-top">
		<svg class="progress-circle svg-content" width="100%" height="100%"
			viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
				style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path></svg>
	</div>
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>