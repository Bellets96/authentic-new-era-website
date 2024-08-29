<?php
/* @var $this PostController */
/* @var $model Post */

$this->pageTitle=Yii::app()->name . ' - Crea Post';
?>

<section class="ar-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="ar-form-wrapper">
					<h1>Crea Post</h1>
					
					<?php $this->renderPartial('_form', array('model'=>$model)); ?>
				</div>
			</div>
		</div>
	</div>
</section>
