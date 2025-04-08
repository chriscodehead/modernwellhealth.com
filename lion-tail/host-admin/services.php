<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova9q = 'active';
$actova10 = ''; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php require_once('../../emails_lib.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php
$msg = '';
$img_error2 = '';
$img_error = '';

if (isset($_POST['post'])) {
  $msg = $_POST['msg'];
  $title = $_POST['title'];
  $date_post = $_POST['date_post'];


  if (!empty($msg) && !empty($title) && !empty($date_post)) {

    $pic_name  = $_FILES['file']['name'];
    $pic_tmp = $_FILES['file']['tmp_name'];
    $pic_size = $_FILES['file']['size'];

    $pic_name1  = $_FILES['bfile']['name'];
    $pic_tmp1 = $_FILES['bfile']['tmp_name'];
    $pic_size1 = $_FILES['bfile']['size'];

    if (!empty($pic_name) && !empty($pic_name1)) {
      $gen_Num = $bassic->randGenerator();
      $extension_Name = $bassic->extentionName($pic_name);
      $new_name = $gen_Num . uniqid() . $extension_Name;
      $path = '../../photo/' . $new_name;
      $file = $site . '/photo/' . $new_name;

      $gen_Num1 = $bassic->randGenerator();
      $extension_Name1 = $bassic->extentionName($pic_name1);
      $new_name1 = $gen_Num1 . uniqid() . $extension_Name1;
      $path1 = '../../photo/' . $new_name1;
      $file1 = $site . '/photo/' . $new_name1;

      //$picvalidation = $bassic->picVlidator($pic_name,$pic_size);
      //if(empty($picvalidation)){
      $upl = $bassic->uploadImage($pic_tmp, $path);
      $upl1 = $bassic->uploadImage($pic_tmp1, $path1);
      //}else{$img_error = $picvalidation;}
    } else {
      $img_error2 =  'Please browse a file!';
    }

    $fieldup = array("id", "title", "description", "image", 'date', 'big_image');
    $valueup = array(null, $title, $msg, $new_name, $date_post, $new_name1);
    $update = $cal->insertDataB($services_tb, $fieldup, $valueup);
    if (!empty($update)) {

      //$msg = $update;
      if ($update == 'Registration was successful. Proceed to login!') {
        $msg = 'Message was post successfully! ' . $img_error . ' ' . $img_error2;
      } else {
        $msg = $update;
      }
    } else {/*do nothing*/
    }
  } else {
    $msg = 'Please fill all fields';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Services | ';
require_once('head.php') ?>

<body>
  <!-- container section start -->
  <section id="container" class="" style="margin-bottom:100px;">
    <?php require_once('header.php') ?>
    <?php require_once('sidebar.php') ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Services</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
              <li><i class="fa fa-laptop"></i> Post Services</li>
              <li><i class="fa fa-laptop"></i><a href="services-view"> View Services</a></li>
            </ol>
          </div>
        </div>

        <?php if (!empty($msg)) { ?>
          <div class="row">
            <div id="go" class=" col-lg-12">
              <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
            </div>
          </div>
        <?php } else { ?>

        <?php } ?>
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="" method="post" enctype="multipart/form-data">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tbody>
                  <tr>
                    <td>Services Title</td>
                    <td><input class="form-control" value="" name="title">
                    </td>
                  </tr>
                  <tr>
                    <td>Services Description</td>
                    <td>

                      <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                      <script>
                        tinymce.init({
                          selector: 'textarea'
                        });
                      </script> -->

                      <textarea rows="8" class="form-control" value="" name="msg"></textarea>

                    </td>
                  </tr>
                  <tr>
                    <td> Program/News Date (eg: April 16, 2023)</td>
                    <td> <input name="date_post" type="date" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td> Icon File</td>
                    <td> <input name="file" type="file" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td> Big image File</td>
                    <td> <input name="bfile" type="file" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="post" value="Post" /></td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div><!--/.row-->

      </section>
      <!--main content end-->
    </section>
    <!-- container section start -->
  </section>

  <!-- javascripts -->
  <?php require_once('jsfiles.php') ?>
  <!-- charts scripts -->
</body>

</html>