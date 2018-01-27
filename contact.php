<?php
	if(isset($_post['your-email'])){
		$email = $_post['your-email'];
		$name = $_post['your-name'];
		$phone = $_post['your-phone'];
		$msg = $_post['message'];

		$to = "a.bakar87@gmail.com";
		$subject = "HTML email";

		$message = "<html><head><title>Contact form query</title></head>
		<body><p>Name : '$name'</p><p>Email : '$email'</p><p>Phone : '$phone'</p><p>Message : '$msg'</p></body></html>";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <info@aanefashionbd.com>' . "\r\n";
		$headers .= 'Cc: shahadat2007@gmail.com' . "\r\n";

		if (mail($to,$subject,$message,$headers)) {
			$suc = "Your message send successfully, we will contact with you very soon..";
		} else{
			$er = "Something wrong, please try again";
		}
	}
?>

<?php include('header.php');?>
		<div class="banner-area">
			<div class="container">
				<div class="breadcumbs">
					<h2 class="page-title">Contact Us</h2>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-main">
			<section class="light-container">
				<div class="container">	
					<div class="page-content">
						<div class="row">
							<div class="col-md-6">
								<h3 class="cazy-title">Our office address:</h3>
								<p>Aane Fashion Limited/Aane Tex BD Ltd. <br>
								House # 19(Ground Floor), Road # 24, <br>
								Block # K, Banani, <br>
								Dhaka-1213. Bangladesh. <br>
								Phone: +88-02-9852505 & 9852506.</p>
							</div>
							<div class="col-md-6">
								<h3 class="cazy-title">Write us:</h3>

								<?
									if (isset($suc)) {
										echo '<p class="suc">'.$suc.'</p>';
									}elseif(isset($er)){
										echo '<p class="er">'.$er.'</p>';
									}
								?>
								<form action="">
									<div class="form-row">
										<input type="text" name="your-name" class="form-controll" placeholder="Your Name:">
									</div>
									<div class="form-row">
										<input type="email" name="your-email" class="form-controll" placeholder="Your Email:">
									</div>
									<div class="form-row">
										<input type="text" name="your-phone" class="form-controll" placeholder="Your Phone:">
									</div>
									<div class="form-row">
										<textarea name="message" id="" cols="30" rows="10" placeholder="Your Message:" class="form-controll"></textarea>
									</div>
									<div class="form-row">
										<input type="submit" class="submit" value="submit">	
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="gmaps"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3650.6386502397363!2d90.40632311423371!3d23.79587864295602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1516473450049" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
							</div>
						</div>
					</div>					
				</div>
			</section>
		</div>
		<?php include('footer.php');?>