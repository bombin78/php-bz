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
	<script type="text/javascript" src="/js/ie8-10blocker.js"></script>
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

		<!-- модальное окно подтверждения отправки заявки -->
		<?php include_once $path."tpl/modal/modal-confirmation.php" ?>
		<!-- /модальное окно подтверждения отправки заявки -->

		<!-- модальное окно ошибки -->
		<?php include_once $path."tpl/modal/modal-error.php" ?>
		<!-- /модальное окно ошибки -->
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
