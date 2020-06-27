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
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo $path; ?>favicon.ico">
	<link rel="stylesheet" href="/vendors/gallery-master/css/blueimp-gallery.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/<?php echo $cssFile; ?>">
	<script type="text/javascript" src="/vendors/jquery-1.11.2.min.js"></script>
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
<div class="wrapper">

	<div class="header-container">
		<!-- шапка сайта -->
		<?php include_once $path."tpl/blocks/header.php" ?>
		<!-- /шапка сайта -->
	</div>

	<div class="content-container">
		<div class="content-container__block">

			<aside class="sidebar-container">
				<!-- боковая панель -->
				<?php include_once $path."tpl/blocks/sidebar.php" ?>
				<!-- /боковая панель -->
			</aside>

			<main class="main-container">
				<!-- навигационная цепочка -->
				<?php include_once $path."tpl/blocks/breadcrumbs.php" ?>
				<!-- /навигационная цепочка -->
				<!-- основной контент -->
				<?php include_once $path.$phpFile; ?>
				<!-- /основной контент -->
			</main>

		</div>
	</div>

	<div class="footer-container">
		<!-- подвал сайта-->
		<?php include_once $path."tpl/blocks/footer.php" ?>
		<!-- /подвал сайта-->
	</div>

	<div class="modal-container">
		<!-- модальное окно галереи -->
		<?php include_once $path."tpl/modal/modal-gallery.php" ?>
		<!-- /модальное окно галереи-->
	</div>

</div>
<input id="abs_address" type="hidden" value="<?php echo $path; ?>"><!-- for gallery-master -->
<script src="/vendors/gallery-master/js/jquery.blueimp-gallery.min.js"></script>
<script src="/vendors/jquery-validation-1.19.2/jquery.validate.min.js"></script>
<script>
	$('.blueimp-links').on('click', function (event) {
		event = event || window.event;
		var target = event.target || event.srcElement,
			link = target.src ? target.parentNode : target,
			options = {index: link, event: event},
			links = this.getElementsByTagName('a');
		blueimp.Gallery(links, options);
	});
</script>
<script type="text/javascript" src="/js/modules-control.js"></script>
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
</body>
</html>
