<?php
define('BASE_PATH', __DIR__ . '/../');
define('BASE_URL','http://localhost:8080');
define('BASE_ASSETS', BASE_URL . '/assets');
define('BASE_INCLUDES', BASE_PATH . '/includes');
define('BASE_LIB', BASE_PATH . '/lib');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<meta name="MobileOptimized" content="320">
		<title>Multidados TI</title>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="<?=BASE_ASSETS?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=BASE_ASSETS?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=BASE_ASSETS?>/css/themes/default.css" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN THEME STYLES -->
		<link href="<?=BASE_ASSETS?>/css/style-metronic.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_ASSETS?>/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_ASSETS?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_ASSETS?>/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="<?=BASE_ASSETS?>/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="<?=BASE_ASSETS?>/css/custom.css" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<link rel="shortcut icon" href="<?=BASE_URL?>/favicon.ico"/>
	</head>
	<!-- END HEAD -->
	
	<!-- BEGIN BODY -->
	<body class="page-header-fixed">
		
		<!-- BEGIN HEADER -->
        <?php include_once( BASE_INCLUDES . "/partials/header.php"); ?>
		<!-- END HEADER -->
		
		<div class="clearfix"></div>

		<!-- BEGIN CONTAINER -->
		<div class="page-container">

			<!-- BEGIN SIDEBAR -->
			<?php include_once( BASE_INCLUDES . "/partials/sidebar.php"); ?>
			<!-- END SIDEBAR -->

			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<?php include_once (BASE_INCLUDES . "/pages/home.php"); ?>
				</div>
			</div>
			<!-- END CONTENT -->

		</div>
		<!-- END CONTAINER -->

		<!-- BEGIN FOOTER -->
        <?php include_once (BASE_INCLUDES . "/partials/footer.php"); ?>
		<!-- END FOOTER -->

		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<script src="<?=BASE_ASSETS?>/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		<script src="<?=BASE_ASSETS?>/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/plugins/jquery.cockie.min.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="<?=BASE_ASSETS?>/scripts/app.js" type="text/javascript"></script>
		<script src="<?=BASE_ASSETS?>/scripts/index.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL SCRIPTS -->
		<script>
		jQuery(document).ready(function() {    
			App.init(); // initlayout and core plugins
			Index.init();
		});
		</script>
		<script src="<?=BASE_ASSETS?>/scripts/home.js" type="text/javascript"></script>
		<!-- END JAVASCRIPTS -->
	</body>
	<!-- END BODY -->
</html>