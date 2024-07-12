
	
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

    <!-- Main Content -->
  <div class="container mt-4" style="margin-top:150px;">
  
    <div class="row">
      <!-- Form Section -->
      <div class="col-md-6" >
        
         <div class="contact-wrap2 " style="margin-top: 0px;">
						<div class="contact-form-wrap">
							<h2 class="title h3 text-center mt-n1">Get In Touch</h2>
							<form action="send_contact.php"
								method="POST" class="contact-form">
								<div class="row">
								<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" required name="product-name" id="pname"
												 value="<?php echo $productname; ?>" readonly> 
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" required name="fname" id="name"
												placeholder="Your Name*"> <i class="fal fa-user"></i>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" name="Email"
												id="email" placeholder="Email Address*"> <i
												class="fal fa-envelope"></i>
										</div>
									</div>
							
									<div class="col-md-12">
										<div class="form-group">
											<input type="tel" class="form-control" name="phone" required
												id="number" placeholder="Phone Number*"> <i class="fal fa-phone"></i>
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
										<button class="th-btn w-100" type="submit" name="sendcontact">
											Submit<i class="fas fa-long-arrow-right ms-2"></i>
										</button>
									</div>
								</div>
							
							</form>
						</div>
					</div>
					
      
      </div>
      
      
      
      
      
      <!-- Contact Details -->
<!--       <div class="col-md-6 mt-4 mt-md-0"> -->
       <div class="col-md-6 "> 
          <div class="contact-area-2 " id="contact-sec">
           <div class="container">
			
			
				<div class="col-xl-12 col-lg-6">
					<div class="contact-feature">
						<div class="contact-feature-icon">
							<i class="fal fa-location-dot"></i>
						</div>
						<div class="media-body">
							<p class="contact-feature_label">Our Address</p>
							<a href="https://www.google.com/maps"
								class="contact-feature_link">Sr.No. 31/5/1, Besides Akemi Business School,Marunji, Wakad, Pune - 411057</a>
						</div>
					</div>
				</div>
				<br>
				<div class="col-xl-12 col-lg-6">
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
				
				
				
				<br>
				
				<div class="col-xl-12 col-lg-6">
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
      </div>
   </div>

   
	
	
