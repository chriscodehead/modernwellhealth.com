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
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php
$msg = '';
if (isset($_GET['id']) && !empty($_GET['id'])) {
} else {
  header("location:message-activater");
}
if (isset($_POST['post'])) {
  $msg_post = $_POST['msg'];
  $title = $_POST['title'];
  $postdate = $_POST['datepost'];
  $passportIn = $cal->selectFrmDB($services_tb, 'image', 'id', $_GET['id']);
  $passportIn1 = $cal->selectFrmDB($services_tb, 'big_image', 'id', $_GET['id']);
  if (!empty($msg_post) && !empty($title)) {

    $pic_name  = $_FILES['file']['name'];
    $pic_tmp = $_FILES['file']['tmp_name'];
    $pic_size = $_FILES['file']['size'];

    $pic_name1  = $_FILES['bfile']['name'];
    $pic_tmp1 = $_FILES['bfile']['tmp_name'];
    $pic_size1 = $_FILES['bfile']['size'];

    if (!empty($pic_name)) {
      $gen_Num = $bassic->randGenerator();
      $extension_Name = $bassic->extentionName($pic_name);
      $new_name = $gen_Num . uniqid() . $extension_Name;
      $path = '../../photo/' . $new_name;

      if ($passportIn == 'avatar.png') {
      } else {
        $bassic->unlinkFile($passportIn, '../../photo/');
      }

      $upl = $bassic->uploadImage($pic_tmp, $path);

      $fieldup = array("title", "description", "image", "date");
      $valueup = array($title, $msg_post, $new_name, $postdate);
      $update = $cal->update($services_tb, $fieldup, $valueup, 'id', $_GET['id']);
      if (!empty($update)) {
        $msg = $update;
      } else {/*do nothing*/
      }
    } else {

      $fieldup = array("title", "description", "date");
      $valueup = array($title, $msg_post, $postdate);
      $update = $cal->update($services_tb, $fieldup, $valueup, 'id', $_GET['id']);
      if (!empty($update)) {
        $msg = $update;
      } else {/*do nothing*/
      }
    }


    if (!empty($pic_name1)) {

      $gen_Num1 = $bassic->randGenerator();
      $extension_Name1 = $bassic->extentionName($pic_name1);
      $new_name1 = $gen_Num1 . uniqid() . $extension_Name1;
      $path1 = '../../photo/' . $new_name1;
      $file1 = $site . '/photo/' . $new_name1;

      if ($passportIn1 == 'avatar.png') {
      } else {
        $bassic->unlinkFile($passportIn1, '../../photo/');
      }

      $upl1 = $bassic->uploadImage($pic_tmp1, $path1);

      $fieldup = array("title", "description", "date", "big_image");
      $valueup = array($title, $msg_post, $postdate, $new_name1);
      $update = $cal->update($services_tb, $fieldup, $valueup, 'id', $_GET['id']);
      if (!empty($update)) {
        $msg = $update;
      } else {/*do nothing*/
      }
    } else {

      $fieldup = array("title", "description", "date");
      $valueup = array($title, $msg_post, $postdate);
      $update = $cal->update($services_tb, $fieldup, $valueup, 'id', $_GET['id']);
      if (!empty($update)) {
        $msg = $update;
      } else {/*do nothing*/
      }
    }
  } else {
    $msg = 'Please fill all fields';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Services View |';
require_once('head.php') ?>

<script src="https://cdn.tiny.cloud/1/7ljbm2ufwi1n205hbzs85v78wanvfyw0kw2txudxi1r4ul1c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tinymce@5.10.0/themes/silver/theme.min.css">


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
              <li><i class="fa fa-laptop"></i><a href="services-view"> Services View</a> </li>
            </ol>
          </div>
        </div>

        <?php if (!empty($msg)) { ?>
          <div class="row">
            <div id="go" class=" col-lg-12">
              <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
            </div>
          </div>
        <?php } ?>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="" method="post" enctype="multipart/form-data">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tbody>
                  <tr>
                    <td>News Message Title</td>
                    <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($services_tb, 'title', 'id', $_GET['id']) ?>" name="title">
                    </td>
                  </tr>

                  <tr>
                    <td>News Message</td>
                    <td>

                      <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                      <script>
                        tinymce.init({
                          selector: 'textarea'
                        });
                      </script> -->


                      <textarea rows="6" class="form-control" name="msg" id="mytextarea"><?php echo @$cal->selectFrmDB($services_tb, 'description', 'id', $_GET['id']) ?></textarea>
                    </td>
                  </tr>

                  <tr>
                    <td>Date Post</td>
                    <td> <input name="datepost" value="<?php echo @$cal->selectFrmDB($services_tb, 'date', 'id', $_GET['id']) ?>" type="text" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td> Attach Icon File <img src="../../photo/<?php echo @$cal->selectFrmDB($services_tb, 'image', 'id', $_GET['id']); ?>" width="40px"></td>
                    <td> <input name="file" type="file" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td> Big image File <img src="../../photo/<?php echo @$cal->selectFrmDB($services_tb, 'big_image', 'id', $_GET['id']); ?>" width="40px"></td>
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

  <script>
    tinymce.init({
      selector: '#mytextarea',
      plugins: 'advlist autolink lists link image charmap print preview anchor',
      toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
    });
  </script>

</body>

</html>