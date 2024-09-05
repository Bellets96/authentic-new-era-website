<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="ar-input-group">
		<?php echo $form->textField($model,'title',array('placeholder'=>' ')); ?>
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->error($model,'title', array('class'=>'ar-error-message')); ?>
	</div>

	<div class="ar-input-group">
		<div class="ar-textarea">
			<?php echo $form->textArea($model,'content',array('placeholder'=>' ', 'rows' => 6)); ?>
			<?php echo $form->label($model,'content', array('class'=>'editor-label')); ?>
			<?php echo $form->error($model,'content', array('class'=>'ar-error-message')); ?>
		</div>
	</div>

	<div class="ar-input-group">
		<?php echo $form->dropdownList($model,'category', Lookup::items('PostCategory'), array('placeholder'=>' ')); ?>
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->error($model,'category', array('class'=>'ar-error-message')); ?>
	</div>

	<div class="ar-input-group">
		<?php echo $form->dropdownList($model,'status', Lookup::items('PostStatus'), array('placeholder'=>' ')); ?>
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->error($model,'status', array('class'=>'ar-error-message')); ?>
	</div>

	<div class="ar-btn-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crea' : 'Salva', array('class'=>'ar-btn')); ?>
	</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
		.create(document.querySelector('#Post_content'), {
			toolbar:  [
				'undo',
				'redo',
				'|',
				'heading',
				'|',
				'bold',
				'italic',
				'|',
				'link',
				'bulletedList',
				'numberedList',
				'blockQuote'
            ],
		})
        .catch(error => {
            console.error(error);
        });
</script>


<?php $this->endWidget(); ?>
