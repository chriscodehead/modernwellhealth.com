<?php
require_once('include.php');
$active5 = 'current-menu-item';
$title =  'Contact Us | ModernWell Health';
$description = 'Meet Dr. Oyidie Igbokidi, board-certified cardiologist and founder of ModernWell Health. Discover how the Clarity Method helps high-achieving individuals overcome fatigue, stress, and brain fog to feel better, think clearer, and live fully.';
$keyword = 'Dr. Oyidie Igbokidi, about ModernWell Health, Clarity Method, board-certified cardiologist, wellness for professionals, brain fog treatment, natural energy recovery, stress relief method, holistic health approach, whole-person wellness';

function contactUsMail($name, $phone, $email, $service, $subject, $message)
{
 $to  = 'info@modernwellhealth.com';
 $subject = $subject;
 $info = $message . '<br /></br>
  <h3>Client Details:</h3>
  <strong>
    Name: ' . $name . ',<br />
    Email: ' . $email . ',<br />
    Phone: ' . $phone . ',<br />
    service: ' . $service . ' 
  </strong>';
 $content = $info;
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= 'From: ModernWell Health <support@modernwellhealth.com>' . "\r\n";
 $retval = @mail($to, $subject, $content, $headers);
 if ($retval) {
  return  'Mail sent successfully';
 } else {
  return 'Internal error. Mail fail to send';
 }
}

if (isset($_POST['sub'])) {
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $service = $_POST['service'];
 $message = $_POST['message'];
 if (!empty($_POST['email']) && !empty($_POST['message'])) {
  $msg = contactUsMail($name, $phone, $email, $service, $subject, $message);
 } else {
  $msg =  'Please fill all fields';
 }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<?php require_once('head.php'); ?>

<body>
 <!-- wrapper -->
 <div id="wrapper">

  <?php //require_once('loader.php');
  ?>

  <?php require_once('header.php'); ?>

  <!-- main-content -->
  <div class="main-content page-contact">

   <!-- section-contact -->
   <section class="section-contact page-contact" style="padding-top: 100px;">
    <div class="tf-container">
     <div class="row">
      <div class="col-12">
       <div class="wrap-content">
        <div class="box-contact">
         <div class="heading-section text-start">
          <p class="text-2 sub">Why Choose Us</p>
          <h3>Free Consultation - Begin Your Healing Journey</h3>
          <p class="description text-1 lh-30">Connect with a dedicated specialist today
           and
           take the first step towards a healthier, more fulfilling life.
          </p>
         </div>
         <ul class="list-info">
          <li><i class="icon-Envelope"></i> <a href="mailto:<?php print $siteEmail; ?>"><?php print $siteEmail; ?></a></li>
          <li><i class="icon-PhoneCall"></i><a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></li>
          <li><i class="icon-MapPin"></i><?php print $siteAddress; ?>
          </li>
         </ul>
        </div>

        <?php if (!empty($msg)) { ?>
         <div style="color: goldenrod;" class="alert alert-success alert-dismissible fade show" role="alert">
          <?php if (!empty($msg)) {
           print @$msg;
          }; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        <?php } ?>

        <form class="form-consultation" method="post" id="contactform"
         action="" enctype="multipart/form-data">
         <h4 class="mb-20 text-center">Get A Free Consultation</h4>

         <fieldset class="name">
          <input type="text" name="name" class="tf-input style-1" placeholder="Your Name*"
           tabindex="2" aria-required="true" required>
         </fieldset>

         <fieldset class="email">
          <input type="email" name="email" class="tf-input style-1"
           placeholder="Email Address*" tabindex="2" aria-required="true" required>
         </fieldset>

         <fieldset class="phone">
          <input type="number" name="phone" class="tf-input style-1"
           placeholder="Phone Number*" tabindex="2" aria-required="true" required>
         </fieldset>

         <div class="select-custom mb-20">
          <select class="tf-select" id="services" name="services" data-default="">
           <option value="---">Choose Services</option>
           <option value="Clarity Check-In">Clarity Check-In</option>
           <option value="Clarity Tracker Tool">Clarity Tracker Tool</option>
           <option value="Clarity Reset Program">Clarity Reset Program</option>
           <option value="Private Wellness Consultations">Private Wellness Consultations</option>
           <option value="Group Coaching & Workshops">Group Coaching & Workshops
           </option>
           <option value="Corporate Wellness Packages">Corporate Wellness Packages</option>
          </select>
         </div>
         <fieldset class="phone">
          <input type="text" name="subject" class="tf-input style-1"
           placeholder="Subject*" tabindex="2" aria-required="true" required>
         </fieldset>
         <fieldset class="message">
          <textarea id="message" class="tf-input" name="message" rows="4"
           placeholder="Your mesage*" tabindex="4" aria-required="true"
           required></textarea>
         </fieldset>
         <button name="sub" class="tf-btn style-default btn-color-secondary pd-40 boder-8 send-wrap"
          type="submit">
          <span>
           Submit
          </span>
         </button>
        </form>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- /section-contact -->

  </div>
  <!-- /main-content -->

  <?php require_once('footer.php'); ?>

</body>

</html>