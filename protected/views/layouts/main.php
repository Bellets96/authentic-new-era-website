<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no">
	
    <!-- Web app mobile -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

	<!-- Meta tags -->
	<meta name="description" content="Server FIVEM di GTA FULL RP ambientato a Roma. Crea la tua storia.">
	<meta property="og:title" content="Authentic New Era Website">
	<meta property="og:description" content="Server FIVEM di GTA FULL RP ambientato a Roma. Crea la tua storia.">
	<meta property="og:image" content="<?php echo Yii::app()->request->baseUrl; ?>/ar/img/logo_ar_full.png"/>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/ar/core/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/ar/core/css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/ar/css/main.css">

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/ar/img/logo_ar.png" >

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<main style="<?php if (Yii::app()->controller->action->id == 'portale' || Yii::app()->controller->action->id == 'page') echo 'background:var(--ar-white)' ?>" >

		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?>
		<?php endif?>

		<?php echo $content; ?>

	</main>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/core/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/core/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/jquery.longpress.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/main.js"></script>


</body>
</html>
