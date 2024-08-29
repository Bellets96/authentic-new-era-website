<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Portale';
?>

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
                        <?php 
                            $domain = Yii::app()->request->serverName; 

                            $this->widget(
                                'zii.widgets.CMenu',
                                array(
                                    'encodeLabel' => false,
                                    'items' => array(
                                        array(
                                            'label' => 'Home', 
                                            'url' => 'http://' . $domain . '/portale', 
                                            'itemOptions' => array('class' => 'nav-item active')
                                        ),
                                        array(
                                            'label' => 'Polizia di Stato', 
                                            'url' => 'http://pds.' . $domain, 
                                            'itemOptions' => array('class' => 'nav-item')
                                        ),
                                        array(
                                            'label' => 'Carabinieri', 
                                            'url' => 'http://cc.' . $domain, 
                                            'itemOptions' => array('class' => 'nav-item')
                                        ),
                                        array(
                                            'label' => 'Guardia di Finanza', 
                                            'url' => 'http://gdf.' . $domain, 
                                            'itemOptions' => array('class' => 'nav-item')
                                        ),
                                        array(
                                            'label' => 'Vigili del Fuoco', 
                                            'url' => 'http://vvf.' . $domain, 
                                            'itemOptions' => array('class' => 'nav-item')
                                        ),
                                        array(
                                            'label' => 'ASL e ARES', 
                                            'url' => 'http://asl.' . $domain, 
                                            'itemOptions' => array('class' => 'nav-item')
                                        ),
                                        array(
                                            'label' => 'Procura e Tribunale', 
                                            'url' => 'http://procura.' . $domain, 
                                            'itemOptions' => array('class' => 'nav-item')
                                        ),
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

<section class="ar-portale">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ar-portale-wrapper">
                    <div class="row">
                        <?php // prr ogni fazione foreach($posts as $post): ?>
                            <div class="ar-fazione-blog col-sm-12 col-md-6 col-lg-4">
                                <?php // per ogni post della fazione foreach($posts as $post): ?>
                                    <article class="ar-blog-article">
                                        <h6 class="ar-blog-top"><?php // echo CHtml::encode(Lookup::item('PostCategory',$post->category)); ?></h6>
                                            <div class="ar-blog-text">
                                                <h2><?php // echo CHtml::encode($post->title); ?>Lorem, ipsum.</h2>
                                                <p><?php // echo CHtml::encode($post->content); ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt totam eveniet eius officia laudantium at cum dolor soluta nulla est?</p>
                                            </div>
                                        <small class="ar-blog-bottom"><?php // echo CHtml::encode(date("d/m/Y H:m",$post->update_time)); ?></small>
                                    </article>
                                <?php // endforeach; ?>
                            </div>
                        <?php // endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>