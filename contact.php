

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Billionapps - Contact</title>
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
      <!-- styles -->   
      <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css">
   </head>
   <body class="loader">
      
<?php include 'nav.php'; 
      require 'PHPMailer-master/PHPMailerAutoload.php';
?>
      <!-- animsition-overlay start -->
      <main class="animsition-overlay" data-animsition-overlay="true">
      <!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-1">
				<!-- page-head-bg -->
				<div class="page-head-bg overlay-loading2" style="background-image: url(assets/images/Contact.jpg);"></div>

				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
				  			<div class="content-left-margin-40">
				  				<h2 class="large-title-bold">
									<span class="load-title-fill tr-delay03" data-text="The Best">The Best</span><br>
									<span class="load-title-fill tr-delay04" data-text="Agency For">Agency For</span><br>
									<span class="load-title-fill tr-delay05" data-text="Your Business">Your Business</span>
								</h2>
								
								<p class="d-flex-wrap top-margin-20 text-color-4">
									<span class="small-title-oswald text-height-20 fade-loading tr-delay07 top-margin-10">Creative team</span>
									<span class="small-title-oswald text-height-20 fade-loading tr-delay08 top-margin-10">Innovation ideas</span>
									<span class="small-title-oswald text-height-20 fade-loading tr-delay09 top-margin-10">Best services</span>
								</p>
				  			</div>
			  			</div><!-- column end -->
		  			</div><!-- flex-container end -->
	  			</div><!-- flex-min-height-inner end -->
	  			
	  			<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- page-head end -->
			
			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				
					<!-- container start -->
					<div class="container top-padding-120 bottom-padding-60">
						<div data-animation-container>
							<h2 class="large-title text-center">
								<span  class="title-fill" data-animation="title-fill-anim" data-text="Contact us">Contact us</span>
							</h2>
							<p data-animation-child class="p-style-small text-color-5 fade-anim-box tr-delay01 text-center" data-animation="fade-anim d-block">We’re always excited to start working on a new project. Do you have a burning idea or need a complete re-design? Get in touch with us, and let’s work together on your project.<br>
                           Use the below form to contact us. We usually respond within 24hrs.</p>
						</div>
						
                        
					</div><!-- container end -->
				
			</section><!-- flex-min-height-box end -->
			

                  
<?php 
$succ_msg = '';
 if (isset($_POST['contact_submit'])) 
 {

   extract($_POST);

$subject = 'Contact';
$message = '';
$message .='<html>
            <head>
               <body>
                   Name : '.$contact_name.'<br>
                   Email : '.$contact_email.'<br>
                   Message : '.$contact_message.'

               </body>
            </head>
             </html>';


$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ronaldmailme@gmail.com';                 // SMTP username
$mail->Password = 'hmldtwbegfrlbwjn';                           // SMTP password
$mail->Port = 587;                                    // TCP port to connect to

//$mail->From = 'ronaldmailme@gmail.com';
$mail->FromName = 'Billionapps';
$mail->addAddress('qa@billionapps.net');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = $message;



if(!$mail->send()) {
          $succ_msg = '<p class="contacterror_msg contactform_result"> Mail Not Sent! </p>';
} else {
          $succ_msg = '<p class="contactsucc_msg contactform_result"> Thank You for contacting us! </p>';

}

}

?>


         <!-- contact-form-box start -->
         <!--<section class="contact-form-box flex-min-height-box" style="background-image:url(assets/images/backgrounds/pexels-photo-1287145.jpeg)">
            <div class="bg-overlay"></div>
            <div class="flex-min-height-inner">
               <div class="container small top-bottom-padding-120">
                  <h4 class="small-title-oswald text-color-4 text-center">Lets Get In Touch!</h4>
                  <form class="flex-container top-padding-90" id="contactForm" method="post">
                     <div class="four-columns">
                        <div class="content-right-margin-10">
                           <input name="contact_fname" type="text" placeholder="Enter your name" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your first name">
                        </div>
                     </div>
                     <div class="four-columns">
                        <div class="content-left-right-margin-5">
                           <input  name="contact_lname" type="text" placeholder="Enter your last name" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your last name">
                        </div>
                     </div>
                     <div class="four-columns">
                        <div class="content-left-margin-10">
                           <input name="contact_email" type="email" placeholder="Enter your email address" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your valid email">
                        </div>
                     </div>
                     <div class="twelve-columns">
                        <textarea name="contact_message" placeholder="Enter your message" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your message"></textarea>
                     </div>
                     <div class="twelve-columns text-center top-padding-90">
                        <button class="border-btn-box pointer-large">
                        <span class="border-btn-inner">
                           <input class="border-btn" type="submit" value="Submit" name="contact_submit" >
                       <span class="border-btn" data-text="submit">submit</span>
                        </span>
                        </button>
                     </div>
                      <?php echo $succ_msg;  ?>
                  </form>
               </div>
            </div>
         </section>-->

         <section class="form">
            <div class="container">
               <h4 class="small-title-oswald form text-color-4 text-center ">Lets Get In Touch!</h4>
               <form class="flex-container" id="contactForm" method="post" >
                  <!-- column start -->
                  <div class="five-columns form">
                     <div class="content-right-margin-10 form">
                        <input type="text" name="contact_name" placeholder="Enter your name" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your name">
                     </div>
                  </div>
                  <!-- column end -->
                   <div class="two-columns form">
                     
                  </div>
                  <!-- column start -->
                  <div class="five-columns form right">
                     <div class="content-left-margin-10 form">
                        <input type="email" name="contact_email" placeholder="Enter your email address" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your email address">
                     </div>
                  </div>
                  <!-- column end -->
                  <!-- column start -->
                  <div class="twelve-columns">
                     <textarea name="contact_message" placeholder="Enter your message" class="contact-form-control pointer-small" data-rule-required="true" data-msg-required="Please enter your message"></textarea>
                  </div>
                  <!-- column end -->
                  <!-- column start -->
                  <div class="twelve-columns text-center">
                     <input class="form_submit" type="submit" value="Submit" name="contact_submit" >
                    <?php echo $succ_msg; ?>
                    <!-- <a href="#" class="form_submit">Submit</a>-->
                     <!--<button class="border-btn-box pointer-large">
                        <span class="border-btn-inner">
                        <span class="border-btn" data-text="submit">submit</span>
                        </span>
                        </button>-->
                  </div>
                  <!-- column end -->
               </form>
            </div>
         </section>
         <!-- End Section -->
      </main>
      <!-- animsition-overlay end -->
     

  <?php include 'footer.php'; ?>