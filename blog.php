<?php
require_once('include.php');
$active4 = 'current-menu-item';
$title =  'Blog | ModernWell Health';
$description = 'Meet Dr. Oyidie Igbokidi, board-certified cardiologist and founder of ModernWell Health. Discover how the Clarity Method helps high-achieving individuals overcome fatigue, stress, and brain fog to feel better, think clearer, and live fully.';
$keyword = 'Dr. Oyidie Igbokidi, about ModernWell Health, Clarity Method, board-certified cardiologist, wellness for professionals, brain fog treatment, natural energy recovery, stress relief method, holistic health approach, whole-person wellness';


if (isset($_GET['page'])) {
 $page = $_GET['page'];
} else {
 $page = 1;
}

$no_of_records_per_page = 21;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<?php require_once('head.php'); ?>
<style>
 .card {
  width: 100%;
  height: 200px;
  border: 1px solid #ccc;
  border-radius: 10px;
  overflow: hidden;
 }

 .card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
 }
</style>

<body>
 <!-- wrapper -->
 <div id="wrapper">

  <?php require_once('loader.php'); ?>

  <?php require_once('header.php'); ?>

  <!-- page-title -->
  <div class="page-title">
   <div class="tf-container">
    <div class="row">
     <div class="col-12">
      <h3 class="title">Blog Post</h3>
      <ul class="breadcrumbs">
       <li><a href="./">Home</a></li>
       <li>Blogs</li>
      </ul>
     </div>
    </div>
   </div>

  </div>
  <!-- /page-title -->

  <!-- main-content -->
  <div class="main-content page-blog">
   <section class="section-blog-grid">
    <div class="tf-container">
     <div class="row">
      <div class="col-12">
       <div class="grid-layout-3" style="margin-right: 20px;">

        <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
        if (mysqli_num_rows($sql) > 0) {
         $c = 0;
         while ($row = mysqli_fetch_assoc($sql)) { ?>

          <div class="article-blog-item  hover-img ">
           <div class="image-wrap card">
            <a href="blog-detail?id=<?php print $row['id']; ?>">

             <img class="lazyload" data-src="<?php print 'photo/' . $row['post_image']; ?>"
              src="<?php print 'photo/' . $row['post_image']; ?>" alt="">
            </a>
            <div class="date-time">
             <div class="content">
              <p class="entry-day "><?php print $row['date_post']; ?></p>
             </div>
            </div>
           </div>
           <div class="content">
            <p class="sub"> Health Tips</p>
            <h5 class="title"><a href="blog-detail?id=<?php print $row['id']; ?>"> <?php print $bassic->reduceTextLength($row['title'], 25); ?>
             </a>
            </h5>
            <p><?php print $bassic->reduceTextLength($row['news'], 80); ?></p>
           </div>
          </div>

         <?php $c++;
         }
        } else { ?>
         <h4 style="padding: 20px;">No updates found!</h4>
        <?php } ?>


       </div>


       <ul class="wg-pagination">
        <li><a href="?page=1">1</a></li>
        <li class="<?php if ($page <= 1) {
                    echo 'disabled';
                   } ?>">
         <a href="<?php if ($page <= 1) {
                   echo '#';
                  } else {
                   echo "?page=" . ($page - 1);
                  } ?>"><i class="icon-CaretLeft"></i> </a>
        </li>
        <li class="<?php if ($page >= $total_pages) {
                    echo 'disabled';
                   } ?>">
         <a href="<?php if ($page >= $total_pages) {
                   echo '#';
                  } else {
                   echo "?page=" . ($page + 1);
                  } ?>"><i class="icon-CaretRight"></i></a></a>
        </li>
        <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
       </ul>

      </div>
     </div>
    </div>
   </section>

  </div>
  <!-- /main-content -->

  <?php require_once('footer.php'); ?>

</body>

</html>