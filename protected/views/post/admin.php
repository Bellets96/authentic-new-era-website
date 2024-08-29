<?php
/* @var $this PostController */
/* @var $model Post */

$this->pageTitle=Yii::app()->name . ' - Admin';
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
						array(
							'name' => 'content',
							'value' => 'strlen($data->content) > 100 ? substr($data->content, 0, 100) . "..." : $data->content',
							'type' => 'raw',
							'htmlOptions' => array('class' => 'd-none d-lg-table-cell'),
							'headerHtmlOptions' => array('class' => 'd-none d-lg-table-cell'),
							'filterHtmlOptions' => array('class' => 'd-none d-lg-table-cell'),
						),
						array(
							'name' => 'category',
							'value' => 'Lookup::item("PostCategory",$data->category)',
							'filter' => Lookup::items('PostCategory'),
							'htmlOptions' => array('class' => 'd-none d-md-table-cell'),
							'headerHtmlOptions' => array('class' => 'd-none d-md-table-cell'),
							'filterHtmlOptions' => array('class' => 'd-none d-md-table-cell'),
						),
						array(
							'name' => 'status',
							'value' => 'Lookup::item("PostStatus",$data->status)',
							'filter' => Lookup::items('PostStatus'),
							'htmlOptions' => array('class' => 'd-none d-md-table-cell'),	
							'headerHtmlOptions' => array('class' => 'd-none d-md-table-cell'),	
							'filterHtmlOptions' => array('class' => 'd-none d-md-table-cell'),	
						),
						array(
							'header'=>'Modifica',
							'class'=>'CButtonColumn',
							'template'=>' {update} {view} {delete} ',
							"buttons"=>array(
								"update"=>array(
									'imageUrl'=>false,
									'label'=>'',
									'options'=>array(
										'class'=>'bi bi-pencil-fill'
									),
								),
								"view"=>array(
									'imageUrl'=>false,
									'label'=>'',
									'options'=>array(
										'class'=>'bi bi-eye-fill'
									),
								),
								"delete"=>array(
									'imageUrl'=>false,
									'label'=>'',
									'options'=>array(
										'class'=>'bi bi-trash-fill'
									),
								)
							),
				
						),
					),
					'template'=>'{items}',
					'htmlOptions'=>array('class'=>'ar-admin-wrapper')
				)); ?>
			</div>
		</div>
	</div>
</section>