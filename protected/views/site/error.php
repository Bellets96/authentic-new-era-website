<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
?>

<section class="ar-error">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ar-error-wrapper">
                    <h2>Errore <span><?php echo $code; ?></span></h2>
                    <h3><?php echo CHtml::encode($message); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>