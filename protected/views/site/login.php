<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>

<section class="ar-form">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<div class="ar-form-wrapper">

					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'login-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
						),
					)); ?>

						<div class="ar-input-group">
							<?php echo $form->textField($model,'username', array('placeholder'=>' ')); ?>
							<?php echo $form->label($model,'username') ?>
							<?php echo $form->error($model,'username', array('class'=>'ar-error-message')); ?>
						</div>

						<div class="ar-input-group">
							<?php echo $form->passwordField($model,'password', array('placeholder'=>' ')); ?>
							<?php echo $form->label($model,'password'); ?>
							<?php echo $form->error($model,'password', array('class'=>'ar-error-message')); ?>
						</div>

						<div class="ar-btn-group d-none">
							<?php echo CHtml::submitButton('Login', array('class'=>'ar-btn')); ?>
						</div>

					<?php $this->endWidget(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
