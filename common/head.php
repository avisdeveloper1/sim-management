<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="POS - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>SIM Card Master</title>
		
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
	<!-- Animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
		
	</head>
	<body>
		<?php
		require 'common/config.php';
		$dbConnection = new Dbconfig();
		if(!$dbConnection->dbConnection()){
			echo "DB Error";
			exit();
		} else {
			$db = $dbConnection->dbConnection();
		}
		?>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>