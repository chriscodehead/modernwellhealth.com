<?php header('location:settings');
require_once('../../library.php'); ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/sqli-functions2.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Dashboard';
require_once('head.php') ?>

<body>
	<!-- container section start -->
	<section id="container" class="" style="margin-bottom:100px;">

		<?php require_once('header.php') ?>
		<?php $actova1 = 'active';
		$actova2 = '';
		$actova3 = '';
		$actova4 = '';
		$actova5 = '';
		$actova6 = '';
		$actova7 = '';
		$actova8 = '';
		$actova9 = '';
		$actova10 = ''; ?>
		<?php require_once('sidebar.php') ?>

		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<!--overview start-->
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
							<li><i class="fa fa-laptop"></i>Dashboard</li>
						</ol>
					</div>
				</div>

				<div class="row">
					<a href="all-users">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="info-box blue-bg">
								<i class="fa fa-picture-o"></i>
								<div class="count" style="font-size:22px;"><?php print $sqli->countmembers(); ?></div>
								<div class="title">Members</div>
							</div> <!--/.info-box-->
						</div><!--/.col-->
					</a>



				</div>
				</div>
			</section>

		</section>
	</section>

	<?php require_once('jsfiles.php') ?>
</body>

</html>