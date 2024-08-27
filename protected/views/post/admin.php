<?php
/* @var $this PostController */
/* @var $model Post */

?>

<section class="ar-admin">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					
					'columns'=>array(
						'title',
						'content',
						'tag',
						'status',
						array(
							'class'=>'CButtonColumn',
						),
					),
					'template'=>'{items}',
					'htmlOptions'=>array('class'=>'ar-admin-wrapper')
				)); ?>
			</div>
		</div>
	</div>
</section>