<?php
header("Content-Type:text/html;charset utf-8");
include_once($path."config/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
	<link rel="stylesheet" href="/vendors/bootstrap-4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="/vendors/gallery-master/css/blueimp-gallery.css">
	<link rel="stylesheet" href="/vendors/swiper-bundle-6.0.4/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/<?php echo $cssFile; ?>">
	<script type="text/javascript" src="/vendors/jquery-3.5.1.min.js"></script>
	<!--[if lt IE 9]>
	<script>
		var e = ("article,aside,footer,header,nav,section").split(',');
		for (var i = 0; i < e.length; i++) {
			document.createElement(e[i]);
		}
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/src/IE8.css">
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript" src="<?php echo $path; ?>js/ie6-7blocker.js"></script>
	<![endif]-->
</head>
<body>
<div class="bz-wrapper">

	<div class="bz-header-container">
		<!-- шапка сайта -->
		<?php include_once $path."tpl/blocks/header.php" ?>
		<!-- /шапка сайта -->
	</div>

	<div class="bz-content-container">
		<div class="bz-content-container__block">

			<aside class="bz-sidebar-container">
				<!-- боковая панель -->
				<?php include_once $path."tpl/blocks/sidebar.php" ?>
				<!-- /боковая панель -->
			</aside>

			<main class="bz-main-container">
				<!-- навигационная цепочка -->
				<?php include_once $path."tpl/blocks/breadcrumbs.php" ?>
				<!-- /навигационная цепочка -->
				<!-- основной контент -->
				<?php include_once $path.$phpFile; ?>
				<!-- /основной контент -->
			</main>

		</div>
	</div>

	<div class="bz-footer-container">
		<!-- подвал сайта-->
		<?php include_once $path."tpl/blocks/footer.php" ?>
		<!-- /подвал сайта-->
	</div>

	<div class="bz-modal-container">
		<!-- модальное окно галереи -->
		<?php include_once $path."tpl/modal/modal-gallery.php" ?>
		<!-- /модальное окно галереи -->

		<!-- модальное окно заявки на обратный звонок -->
		<?php include_once $path."tpl/modal/modal-callback.php" ?>
		<!-- /модальное окно заявки на обратный звонок -->
	</div>

</div>
<input id="abs_address" type="hidden" value="<?php echo $path; ?>">
<script src="/vendors/bootstrap-4.5.2/js/bootstrap.min.js"></script>
<script src="/vendors/gallery-master/js/jquery.blueimp-gallery.min.js"></script>
<script src="/vendors/swiper-bundle-6.0.4/swiper-bundle.min.js"></script>
<script src="/vendors/jquery-validation-1.19.2/jquery.validate.min.js"></script>
<script type="text/javascript" src="/js/modules-control.js"></script>
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
</body>
</html>
