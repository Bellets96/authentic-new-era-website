<?php
/* @var $this PostController */
/* @var $model Post */

?>

<section class="ar-view">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="ar-view-wrapper">
					<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$model,
						'attributes'=>array(
							'title',
							'content',
							array(
								'name' => 'category',
								'value' => Lookup::item("PostCategory",$model->category),

							),
							array(
								'name' => 'status',
								'value' => Lookup::item("PostStatus",$model->status),
							),		
							array(
								'name' => 'create_time',
								'value' => CHtml::encode(date("d/m/Y H:m",$model->create_time)),
							),
							array(
								'name' => 'update_time',
								'value' => CHtml::encode(date("d/m/Y H:m",$model->update_time)),
							),
						),
					)); ?> 
				</div>
			</div>
		</div>
	</div>
</section>
