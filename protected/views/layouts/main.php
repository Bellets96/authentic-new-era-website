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

	<header>
		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));  */?>		
	</header>

	<main>
	
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?>
		<?php endif?>

		<?php echo $content; ?>

	</main>

	<footer>
	</footer>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/core/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/core/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/jquery.longpress.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/js/main.js"></script>


</body>
</html>
