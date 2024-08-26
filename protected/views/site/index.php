<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="ar-hero">
  <video class="ar-home-video" autoplay>
    <source media="(min-width: 900px)" src="" type="video/mp4">
    <source media="(max-width: 889px)" src="" type="video/mp4">
  </video>
  <a class="ar-btn-home" target="_blank" href="https://discord.gg/authenticremastered"> 
      Entra nel mondo di Authentic
    <span class="ar-btn-discord">
        <i class="bi bi-discord"></i>
    </div>   
  </a>
</section>

<section class="ar-description">

</section>

<section class="ar-blog">

  <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'/post/_view',
  )); ?>

</section>