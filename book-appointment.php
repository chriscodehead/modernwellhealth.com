<?php
require_once('include.php');
$active2 = 'current-menu-item';
$title =  'Book an Appointment | ModernWell Health';
$description = 'Meet Dr. Oyidie Igbokidi, board-certified cardiologist and founder of ModernWell Health. Discover how the Clarity Method helps high-achieving individuals overcome fatigue, stress, and brain fog to feel better, think clearer, and live fully.';
$keyword = 'Dr. Oyidie Igbokidi, about ModernWell Health, Clarity Method, board-certified cardiologist, wellness for professionals, brain fog treatment, natural energy recovery, stress relief method, holistic health approach, whole-person wellness'; ?>

<?php
function contactUsMail($name, $phone, $email, $service, $date, $time, $subject, $message)
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
  $subject = $_POST['date'];
  $subject = $_POST['time'];
  $subject = 'Appointment Booking From ModernWell Health';
  $service = $_POST['service'];
  $message = $_POST['message'];
  if (!empty($_POST['email']) && !empty($_POST['message'])) {
    $msg = contactUsMail($name, $phone, $email, $service, $date, $time, $subject, $message);
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

    <?php require_once('loader.php'); ?>

    <?php require_once('header.php'); ?>

    <!-- main-content -->
    <div class="main-content-2 page-appointment bg-1 ">

      <section class="section-book-appointment">
        <div class="tf-container">
          <div class="row">
            <div class="col-12">
              <div class="wrap-content">
                <?php if (!empty($msg)) { ?>
                  <div style="color: goldenrod;" class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php if (!empty($msg)) {
                      print @$msg;
                    }; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php } ?>
                <form class="form-appointment" method="post" enctype="multipart/form-data">
                  <div class="heading-section  text-start">
                    <h3>Make an Appointment
                    </h3>
                    <p class="description text-1">Connect with a dedicated specialist today and take
                      the first step towards a healthier, more fulfilling life.
                    </p>
                  </div>
                  <div class="cols mb-20">
                    <fieldset class="name">
                      <input type="text" name="name" class="tf-input style-2" placeholder="Your Name"
                        tabindex="2" aria-required="true" required>
                    </fieldset>
                    <fieldset class="phone">
                      <input type="number" name="phone" class="tf-input style-2" placeholder="Phone Number"
                        tabindex="2" aria-required="true" required>
                    </fieldset>
                  </div>
                  <div class="cols mb-20">
                    <fieldset class="date">
                      <input type="email" name="email" class="tf-input style-2" aria-required="true"
                        value="joe@example.com" required>
                    </fieldset>
                    <div class="select-custom ">
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

                  </div>
                  <div class="cols mb-20">
                    <fieldset class="date">
                      <input type="date" name="date" class="tf-input style-2" aria-required="true"
                        value="2024-10-08" required>
                    </fieldset>
                    <fieldset class="time">
                      <input type="time" name="time" class="tf-input style-2" aria-required="true"
                        value="14:30" required>
                    </fieldset>
                  </div>
                  <fieldset>
                    <textarea id="message" class="tf-input" name="message" rows="4"
                      placeholder="Your mesage" tabindex="4" aria-required="true"
                      required></textarea>
                  </fieldset>
                  <button name="sub" class="tf-btn style-default btn-color-secondary pd-40 boder-8"
                    type="submit">
                    <span>
                      Book an Appointment
                    </span>
                  </button>
                </form>
                <div class="image-wrap">
                  <img class="lazyload" data-src="images/section/section-book-appointment.jpg"
                    src="images/section/section-book-appointment.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /main-content -->

    <?php require_once('footer.php'); ?>

</body>

</html>