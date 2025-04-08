<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova9 = '';
$actova10 = ''; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php if (isset($_GET['id-ter']) && !empty($_GET['id-ter'])) {
    $user_id = $_GET['id-ter'];
} else {
    header("location:all-users");
} ?>
<?php
$msg = '';
//update wallet address
if (isset($_POST['subW'])) {
    $wallet_address = mysqli_real_escape_string($link, htmlentities($_POST['wallet']));
    $E_address = mysqli_real_escape_string($link, htmlentities($_POST['walletE']));
    $pm = mysqli_real_escape_string($link, htmlentities($_POST['pm']));
    if (!empty($wallet_address)) {
        $fieldW = array('wallet_address', 'ethereum_wallet_address', 'perfectmoney');
        $valueW = array($wallet_address, $E_address, $pm);
        $msg = $cal->update($user_tb, $fieldW, $valueW, 'email', $user_id);
    }
}
?>
<?php
if (isset($_POST['subP'])) {
    $pic_name  = $_FILES['pic']['name'];
    $pic_tmp = $_FILES['pic']['tmp_name'];
    $pic_size = $_FILES['pic']['size'];
    $passportIn = $cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
    if (!empty($pic_name)) {
        $gen_Num = $bassic->randGenerator();
        $extension_Name = $bassic->extentionName($pic_name);
        $new_name = $gen_Num . $extension_Name;
        $path = '../../photo/' . $new_name;
        $picvalidation = $bassic->picVlidator($pic_name, $pic_size);
        if (empty($picvalidation)) {
            $bassic->unlinkFile($passportIn, '../photo/');
            $upl = $bassic->uploadImage($pic_tmp, $path);
            if (empty($upl)) {
                $fieldP = array('passport');
                $valueP = array($new_name);
                $msg = $cal->update($user_tb, $fieldP, $valueP, 'email', $user_id);
            } else {
                $msg = $upl;
            }
        } else {
            $msg = $picvalidation;
        }
    } else {
        $msg = 'Please fill all fields!';
    }
}


if (isset($_POST['subB'])) {
    $pic_name  = $_FILES['banner']['name'];
    $pic_tmp = $_FILES['banner']['tmp_name'];
    $pic_size = $_FILES['banner']['size'];
    $passportIn = $cal->selectFrmDB($user_tb, 'school_banner', 'email', $user_id);
    if (!empty($pic_name)) {
        $gen_Num = $bassic->randGenerator();
        $extension_Name = $bassic->extentionName($pic_name);
        $new_name = $gen_Num . $extension_Name;
        $path = '../../photo/' . $new_name;
        $picvalidation = $bassic->picVlidator($pic_name, $pic_size);
        if (empty($picvalidation)) {
            $bassic->unlinkFile($passportIn, '../photo/');
            $upl = $bassic->uploadImage($pic_tmp, $path);
            if (empty($upl)) {
                $fieldP = array('school_banner');
                $valueP = array($new_name);
                $msg = $cal->update($user_tb, $fieldP, $valueP, 'email', $user_id);
            } else {
                $msg = $upl;
            }
        } else {
            $msg = $picvalidation;
        }
    } else {
        $msg = 'Please fill all fields!';
    }
}
?>
<?php
if (isset($_POST['sub'])) {

    $fname = ucfirst(mysqli_real_escape_string($link, strtolower($_POST['fname'])));
    $mname = ucfirst(strtolower(mysqli_real_escape_string($link, $_POST['mname'])));
    $lname = ucfirst(strtolower(mysqli_real_escape_string($link, $_POST['lname'])));
    $fullname = $fname . ' ' . $mname . ' ' . $lname;
    $phone  = mysqli_real_escape_string($link, $_POST['phone']);
    $dob  = mysqli_real_escape_string($link, $_POST['dob']);
    //$email = strtolower(mysqli_real_escape_string($link, $_POST['email']));
    $address = mysqli_real_escape_string($link, $_POST['address']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $state = mysqli_real_escape_string($link, $_POST['state']);
    $country = mysqli_real_escape_string($link, $_POST['country']);
    $postalcode = mysqli_real_escape_string($link, $_POST['postalcode']);
    $message = mysqli_real_escape_string($link, $_POST['message']);
    $ein = mysqli_real_escape_string($link, $_POST['ein']);

    $pic_name  = $_FILES['ssn']['name'];
    $pic_tmp = $_FILES['ssn']['tmp_name'];
    $pic_size = $_FILES['ssn']['size'];

    $pic_name1  = $_FILES['id']['name'];
    $pic_tmp1 = $_FILES['id']['tmp_name'];
    $pic_size1 = $_FILES['id']['size'];

    $pic_name2  = $_FILES['W2Form']['name'];
    $pic_tmp2 = $_FILES['W2Form']['tmp_name'];
    $pic_size2 = $_FILES['W2Form']['size'];

    $passportIn = $cal->selectFrmDB($user_tb, 'ssn', 'email', $user_id);
    $passportIn2 = $cal->selectFrmDB($user_tb, 'id_means', 'email', $user_id);
    $passportIn3 = $cal->selectFrmDB($user_tb, 'w2_form', 'email', $user_id);

    if (!empty($fname)) {

        $gen_Num = $bassic->randGenerator();
        $extension_Name = $bassic->extentionName($pic_name);
        $new_name = $gen_Num . uniqid() . $extension_Name;
        $path = '../../photo/' . $new_name;
        $picvalidation = $bassic->picVlidator($pic_name, $pic_size);
        if (empty($pic_name)) {
            $new_name = $passportIn;
        }

        $gen_Num1 = $bassic->randGenerator();
        $extension_Name1 = $bassic->extentionName($pic_name1);
        $new_name1 = $gen_Num . uniqid() . $extension_Name1;
        $path1 = '../../photo/' . $new_name1;
        $picvalidation1 = $bassic->picVlidator($pic_name1, $pic_size1);
        if (empty($pic_name1)) {
            $new_name1 = $passportIn2;
        }

        $gen_Num2 = $bassic->randGenerator();
        $extension_Name2 = $bassic->extentionName($pic_name2);
        $new_name2 = $gen_Num . uniqid() . $extension_Name2;
        $path2 = '../../photo/' . $new_name2;
        $picvalidation2 = $bassic->picVlidator($pic_name2, $pic_size2);
        if (empty($pic_name2)) {
            $new_name2 = $passportIn3;
        }

        if (!empty($pic_name)) {
            $bassic->unlinkFile($passportIn, '../../photo/');
            $upl = $bassic->uploadImage($pic_tmp, $path);
            $fieldA = array('ssn');
            $valueA = array($new_name);
            $cal->update($user_tb, $fieldA, $valueA, 'email', $user_id);
        }
        if (!empty($pic_name1)) {
            $bassic->unlinkFile($passportIn2, '../../photo/');
            $upl2 = $bassic->uploadImage($pic_tmp1, $path1);
            $fieldA = array('id_means');
            $valueA = array($new_name1);
            $cal->update($user_tb, $fieldA, $valueA, 'email', $user_id);
        }
        if (!empty($pic_name2)) {
            $bassic->unlinkFile($passportIn3, '../../photo/');
            $upl3 = $bassic->uploadImage($pic_tmp2, $path2);
            $fieldA = array('w2_form');
            $valueA = array($new_name2);
            $cal->update($user_tb, $fieldA, $valueA, 'email', $user_id);
        }

        $fieldA = array('first_name', 'last_name', 'middle_name', 'country',  'phone', 'address', 'city', 'state', 'zip_code', 'message', 'dob', 'ein');
        $valueA = array($fname, $lname, $mname, $country, $phone, $address, $city, $state, $postalcode, $message, $dob, $ein);
        $msg = $cal->update($user_tb, $fieldA, $valueA, 'email', $user_id);
    } else {
        $msg = 'Please fill all fields';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Users Profile | The Best Bitcoin Mining Company';
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
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Profile</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                            <li><i class="fa fa-laptop"></i> My Profile</li>
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
                    <!-- profile-widget -->
                    <div class="col-lg-12">
                        <div class="profile-widget profile-widget-info">
                            <div class="panel-body">
                                <div class="col-lg-2 col-sm-2">
                                    <h4><?php print @'Hi ' . $cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?></h4>
                                    <div class="follow-ava">
                                        <img src="../../photo/<?php if ($cal->selectFrmDB($user_tb, 'passport', 'email', $user_id) == 'passport') {
                                                                    print 'avata.png';
                                                                } else {
                                                                    print @$cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
                                                                } ?>" alt="profile picture">
                                    </div>

                                </div>
                                <div class="col-lg-10 col-sm-10 follow-info">
                                    <p>Hello I’m <?php print $cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?>, a proud member of <?php print @$siteName; ?>.</p>
                                    <p><i class="fa fa-envelope"></i> Email: <?php print @$cal->selectFrmDB($user_tb, 'email', 'email', $user_id); ?></p>
                                    <p><i class="fa fa-twitter"></i> Phone: <?php print @$cal->selectFrmDB($user_tb, 'phone', 'email', $user_id); ?></p>
                                    <h6>
                                        <p><i class="icon_clock_alt"></i> Date Reg.: <?php print @$cal->selectFrmDB($user_tb, 'date_reg', 'email', $user_id); ?></p>
                                        <p><i class="icon_calendar"></i> City: <?php print @$cal->selectFrmDB($user_tb, 'city', 'email', $user_id); ?></p>

                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- page start-->
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="clearfix">

                            <div class="container">
                                <div class="row clearfix">

                                    <!-- edit-profile -->
                                    <div id="edit-profile" class="tab-pane active">
                                        <section class="panel">
                                            <div class="panel-body bio-graph-info">


                                                <h1> Application Info</h1>
                                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">

                                                    <div class="row clearfix">
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">First Name *</label>
                                                            <input class="form-control" type="text" name="fname" value="<?php print @$cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?>" placeholder="First Name *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Last Name *</label>
                                                            <input class="form-control" type="text" name="lname" value="<?php print @$cal->selectFrmDB($user_tb, 'last_name', 'email', $user_id); ?>" placeholder="Last Name *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Middle Name *</label>
                                                            <input class="form-control" type="text" name="mname" value="<?php print @$cal->selectFrmDB($user_tb, 'middle_name', 'email', $user_id); ?>" placeholder="Middle Name *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Date Of Birth *</label>
                                                            <input class="form-control" type="text" name="dob" value="<?php print @$cal->selectFrmDB($user_tb, 'dob', 'email', $user_id); ?>" placeholder="Date Of Birth *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Phone Number *</label>
                                                            <input class="form-control" type="text" name="phone" value="<?php print @$cal->selectFrmDB($user_tb, 'phone', 'email', $user_id); ?>" placeholder="Phone Number *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Email Address *</label>
                                                            <input class="form-control" type="email" name="email" value="<?php print @$cal->selectFrmDB($user_tb, 'email', 'email', $user_id); ?>" placeholder="Email Address *" />
                                                        </div>


                                                        <div style="overflow: hidden; position: none; z-index: 10;" class="col-lg-12 clearfix">
                                                            <label style="font-size: 12px;">Address *</label>
                                                            <input class="form-control" type="text" name="address" value="<?php print @$cal->selectFrmDB($user_tb, 'address', 'email', $user_id); ?>" placeholder="Address *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">City *</label>
                                                            <input class="form-control" type="text" name="city" value="<?php print @$cal->selectFrmDB($user_tb, 'city', 'email', $user_id); ?>" placeholder="City *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">State *</label>
                                                            <input class="form-control" type="text" name="state" value="<?php print @$cal->selectFrmDB($user_tb, 'state', 'email', $user_id); ?>" placeholder="State *" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Country *</label>
                                                            <input class="form-control" type="text" name="country" value="<?php print @$cal->selectFrmDB($user_tb, 'country', 'email', $user_id); ?>" placeholder="Country *" />
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label style="font-size: 12px;">Postal code *</label>
                                                            <input class="form-control" type="text" name="postalcode" value="<?php print @$cal->selectFrmDB($user_tb, 'zip_code', 'email', $user_id); ?>" placeholder="Postal code *" />
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <label style="font-size: 12px;">EIN (Employers Identification Number) *</label>
                                                            <input class="form-control" type="text" name="ein" value="<?php print @$cal->selectFrmDB($user_tb, 'ein', 'email', $user_id); ?>" placeholder="EIN (Employers Identification Number) *" />
                                                        </div><br /><br />

                                                        <div class="col-lg-12">
                                                            <label style="font-size: 12px;">Means of Identification *</label>
                                                            <a href="../../photo/<?php echo @$cal->selectFrmDB($user_tb, 'id_means', 'email', $user_id) ?>"><img src="../../photo/<?php echo @$cal->selectFrmDB($user_tb, 'id_means', 'email', $user_id) ?>" width="100" height="100"></a>
                                                            <input type="file" name="id" id="formid"
                                                                placeholder="Means of Identification">
                                                        </div><br /><br />

                                                        <div class="col-lg-12">
                                                            <label style="font-size: 12px;">SSN (Social Security Number) *</label>
                                                            <a href="../../photo/<?php echo @$cal->selectFrmDB($user_tb, 'ssn', 'email', $user_id) ?>"><img src="../../photo/<?php echo @$cal->selectFrmDB($user_tb, 'ssn', 'email', $user_id) ?>" width="100" height="100"></a>
                                                            <input type="file" name="ssn" id="formSSN"
                                                                placeholder="SSN (Social Security Number)">
                                                        </div><br /><br />

                                                        <div class="col-lg-12">
                                                            <label style="font-size: 12px;">W2 Form of the last employer worked for *</label>
                                                            <a href="../../photo/<?php echo @$cal->selectFrmDB($user_tb, 'w2_form', 'email', $user_id) ?>"><img src="../../photo/<?php echo @$cal->selectFrmDB($user_tb, 'w2_form', 'email', $user_id) ?>" width="100" height="100"></a>
                                                            <input type="file" name="W2Form" id="formSSN"
                                                                placeholder="W2 Form of the last employer worked for">
                                                        </div><br /><br />

                                                        <div class="col-lg-12">
                                                            <label style="font-size: 12px;">Tell Us More About Your Application *</label>
                                                            <textarea class="form-control" name="message" id="" cols="30" rows="5"
                                                                placeholder="Tell Us More About Your  Application *"><?php print @$cal->selectFrmDB($user_tb, 'message', 'email', $user_id); ?></textarea>
                                                        </div>
                                                        <div style="margin-top: 30px;" class="col-lg-12">

                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" name="sub" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>

                                                </form>


                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
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