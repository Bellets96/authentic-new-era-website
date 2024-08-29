<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<nav class="ar-header navbar navbar-expand-md">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="ar-header-wrapper d-md-flex">
					<a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/ar/img/logo_ar_full.png" alt="Logo" class="img-fluid" />
					</a>
					<button class="ar-navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="bi bi-list"></i>
						</span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<?php $this->widget(
								'zii.widgets.CMenu',
								array(
									'encodeLabel' => false,
									'items' => array(
										array('label' => 'Home', 'url' => Yii::app()->homeUrl, 'itemOptions' => array('class' => 'nav-item')),
										array('label' => 'Crea Post', 'url' => array('/post/create'), 'itemOptions' => array('class' => 'nav-item')),
										array('label' => 'Posts', 'url' => array('/post/admin'), 'itemOptions' => array('class' => 'nav-item')),
										array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'itemOptions' => array('class' => 'nav-item')),
									),
									'htmlOptions' => array('class' => 'navbar-nav ms-auto')
								)
							); 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<?php echo $content; ?>

<?php $this->endContent(); ?>