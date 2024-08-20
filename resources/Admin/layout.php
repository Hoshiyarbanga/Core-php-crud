<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo getTitle(); ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="../assets/css/all.css">
	<link rel="stylesheet" href="../assets/css/adminlte.min.css">
	<link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php include './common/navbar.php' ?>
		<?php include './common/sidebar.php' ?>

		<div class="content-wrapper">
            <?php echo getContent(); ?>
		</div>

		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
		</footer>
	</div>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/js/demo.js"></script>
	<script src="../assets/js/adminlte.min.js"></script>
</body>

</html>