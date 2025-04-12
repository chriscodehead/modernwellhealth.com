<?php
require_once('include.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
 $user_id = $_GET['id'];
} else {
 header("location:blog-detail");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$active4 = 'current-menu-item';
$title =  $row['title'];
$description = 'Meet Dr. Oyidie Igbokidi, board-certified cardiologist and founder of ModernWell Health. Discover how the Clarity Method helps high-achieving individuals overcome fatigue, stress, and brain fog to feel better, think clearer, and live fully.';
$keyword = 'Dr. Oyidie Igbokidi, about ModernWell Health, Clarity Method, board-certified cardiologist, wellness for professionals, brain fog treatment, natural energy recovery, stress relief method, holistic health approach, whole-person wellness'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<?php require_once('head.php'); ?>

<body>
 <!-- wrapper -->
 <div id="wrapper">

  <?php require_once('loader.php'); ?>

  <?php require_once('header.php'); ?>

  <!-- page-title -->
  <div class="page-title page-details-2">
   <div class="tf-container">
    <div class="row">
     <div class="col-12">
      <ul class="breadcrumbs">
       <li><a href="./">Home</a></li>
       <li>Blogs</li>
       <li class="line-clamp-1"><?php print $bassic->reduceTextLength($row['title'], 25); ?></li>
      </ul>
     </div>
    </div>
   </div>
   <div class="image-wrap">
    <img class="lazyload" data-src="images/page-title/page-title-blog-details.jpg"
     src="images/page-title/page-title-blog-details.jpg" alt="">
   </div>
  </div>
  <!-- /page-title -->

  <!-- main-content -->
  <div class="main-content page-blog-details-2">

   <!-- section-blog-post -->
   <section class="section-blog-post blog-details-2">
    <div class="tf-container">
     <div class="row">
      <div class="col-12">
       <div class="content-inner">
        <div class="heading-blog">
         <span class="tag text-2">Post Details</span>
         <h3 class="title"><?php print $row['title']; ?></h3>
         <ul class="meta">
          <li class="meta-item">
           <i class="icon-CalendarBlank"></i>
           <p><?php print $row['date_post']; ?></p>
          </li>
          <li class="meta-item">
           <i class="icon-User"></i>
           <p> by <a href="blog-detail?id=<?php print $row['id']; ?>"> <?php print $row['admin_name']; ?></a></p>
          </li>
         </ul>
        </div>
        <div class="wrap-paragrahp">
         <p class="text-1 lh-30 fw-4 mb-13 text-justify" style="text-align: justify;">
          <?php print $row['news']; ?>
         </p>
         <p class="text-1 lh-30 fw-4">
         </p>
        </div>
        <div class="">
         <div class="image-wrap">
          <img class="lazyload" data-src="<?php print 'photo/' . $row['post_image']; ?>"
           src="<?php print 'photo/' . $row['post_image']; ?>" alt="">
         </div>

        </div>
       </div>
       <div class="wrap-tag">
        <div class="tags">
         <p>Tags:</p>
         <a href="#">Wellness</a>,
         <a href="#">Therapy</a>
         <a href="#">ModernWell Health</a>
        </div>
        <div class="wrap-social ">

        </div>
       </div>


      </div>
     </div>
    </div>

    <div class="wrap-share ">
     <p>Share:</p>
     <ul class="tf-social style-1">
      <li><a href="<?php print $siteFacebook; ?>">
        <img src="img/facebook-new.png" />
       </a></li>

      <li><a href="<?php print $siteTwitter; ?>">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
         <g clip-path="url(#clip0_11072_5632)">
          <path d="M3.75 3.125H7.5L16.25 16.875H12.5L3.75 3.125Z" stroke="#3C210E"
           stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M8.89687 11.2129L3.75 16.8746" stroke="#3C210E" stroke-width="1.5"
           stroke-linecap="round" stroke-linejoin="round" />
          <path d="M16.2484 3.125L11.1016 8.78672" stroke="#3C210E" stroke-width="1.5"
           stroke-linecap="round" stroke-linejoin="round" />
         </g>
         <defs>
          <clipPath id="clip0_11072_5632">
           <rect width="20" height="20" fill="white" />
          </clipPath>
         </defs>
        </svg>
       </a></li>
      <li><a href="<?php print $siteInstagram; ?>">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
         xmlns="http://www.w3.org/2000/svg">
         <g clip-path="url(#clip0_11072_5638)">
          <path
           d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
           stroke="#3C210E" stroke-width="1.5" stroke-linecap="round"
           stroke-linejoin="round" />
          <path
           d="M13.75 2.5H6.25C4.17893 2.5 2.5 4.17893 2.5 6.25V13.75C2.5 15.8211 4.17893 17.5 6.25 17.5H13.75C15.8211 17.5 17.5 15.8211 17.5 13.75V6.25C17.5 4.17893 15.8211 2.5 13.75 2.5Z"
           stroke="#3C210E" stroke-width="1.5" stroke-linecap="round"
           stroke-linejoin="round" />
          <path
           d="M14.0625 6.71875C14.494 6.71875 14.8438 6.36897 14.8438 5.9375C14.8438 5.50603 14.494 5.15625 14.0625 5.15625C13.631 5.15625 13.2812 5.50603 13.2812 5.9375C13.2812 6.36897 13.631 6.71875 14.0625 6.71875Z"
           fill="#3C210E" />
         </g>
         <defs>
          <clipPath id="clip0_11072_5638">
           <rect width="20" height="20" fill="white" />
          </clipPath>
         </defs>
        </svg>
       </a></li>
      /ul>
    </div>
   </section>
   <!-- /section-blog-post -->

  </div>
  <!-- /main-content -->


  <?php require_once('footer.php'); ?>

</body>

</html>