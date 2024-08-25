<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="ar-hero">
  <video class="ar-home-video" autoplay>
    <source media="(min-width: 900px)" src="" type="video/mp4">
    <source media="(max-width: 889px)" src="" type="video/mp4">
  </video>
  <a href="#">
    Authentic
  </a>
</section>

<section class="ar-">

</section>

<section class="ar-blog">

  <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'/post/_view',
  )); ?>

</section>