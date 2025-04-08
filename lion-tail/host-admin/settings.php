<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova6w = '';
$actova10 = '';
$actova44aD = 'active'; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php require_once('../../emails_lib.php'); ?>
<?php require_once('../../lib/sqli-functions.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php
$msg = '';

if (isset($_POST['settings'])) {

    $site_name = $_POST['site_name'];
    $site_whatsapp_num = $_POST['site_whatsapp_num'];
    $site_phone = $_POST['site_phone'];
    $site_address = $_POST['site_address'];
    $custom_email = $_POST['custom_email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $site_linkedin = $_POST['site_linkedin'];
    $site_twitter = $_POST['site_twitter'];
    $application_link = $_POST['application_link'];

    if (!empty($site_name)) {
        $feilds = array('site_name', 'site_whatsapp_num', 'site_phone', 'site_address', 'site_email', 'site_facebook', 'site_instagram', 'site_linkedin', 'site_twitter', 'application_link');
        $value = array($site_name, $site_whatsapp_num, $site_phone, $site_address, $custom_email, $facebook, $instagram, $site_linkedin, $site_twitter, $application_link);
        $msg = $cal->update($settings, $feilds, $value, 'id', 1);
    } else {
        $msg = "Fill all empty fields!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Settings | ';
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
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Update Settings</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                            <li><i class="fa fa-laptop"></i> Settings</li>
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
                    <div class="row">
                        <div id="go" class=" col-lg-12">
                            <div id="go" class="alert alert-warning" style="text-align: center; color:#000;">Update Account Settings <i id="remove" class="fa fa-remove pull-right"></i></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr>
                                        <td>Site Name:</td>
                                        <td><input name="site_name" value="<?php print $sqli->getSettings('site_name'); ?>" type="text" class="form-control" placeholder="Site Name" /></td>
                                    </tr>
                                    <tr>
                                        <td>Site WhatsApp Number:</td>
                                        <td><input name="site_whatsapp_num" value="<?php print $sqli->getSettings('site_whatsapp_num'); ?>" type="text" class="form-control" placeholder="Site WhatsApp Number" /></td>
                                    </tr>
                                    <tr>
                                        <td>Site Phone Number:</td>
                                        <td><input name="site_phone" value="<?php print $sqli->getSettings('site_phone'); ?>" type="text" class="form-control" placeholder="Site Phone Number" /></td>
                                    </tr>
                                    <tr>
                                        <td>Site Address:</td>
                                        <td><input name="site_address" value="<?php print $sqli->getSettings('site_address'); ?>" type="text" class="form-control" placeholder="Site Address" /></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><input name="custom_email" value="<?php print $sqli->getSettings('site_email'); ?>" type="text" class="form-control" placeholder="custom_email" /></td>
                                    </tr>
                                    <tr>
                                        <td>Application Link:</td>
                                        <td><input name="application_link" value="<?php print $sqli->getSettings('application_link'); ?>" type="text" class="form-control" placeholder="Application Link" /></td>
                                    </tr>
                                    <tr>
                                        <td>Facebook:</td>
                                        <td><input name="facebook" value="<?php print $sqli->getSettings('site_facebook'); ?>" type="text" class="form-control" placeholder="Facebook" /></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram:</td>
                                        <td><input name="instagram" value="<?php print $sqli->getSettings('site_instagram'); ?>" type="text" class="form-control" placeholder="Instagram" /></td>
                                    </tr>
                                    <tr>
                                        <td>Linkedin:</td>
                                        <td><input name="site_linkedin" value="<?php print $sqli->getSettings('site_linkedin'); ?>" type="text" class="form-control" placeholder="Linkedin" /></td>
                                    </tr>
                                    <tr>
                                        <td>Twitter:</td>
                                        <td><input name="site_twitter" value="<?php print $sqli->getSettings('site_twitter'); ?>" type="text" class="form-control" placeholder="Twitter" /></td>
                                    </tr>

                                </tbody>
                            </table>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td colspan="6"><input class="btn btn-primary btn-block" type="submit" name="settings" value="Update" /></td>
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