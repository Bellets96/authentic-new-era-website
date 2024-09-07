<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$authenticJson = file_get_contents('authentic.json');

$authentic = json_decode($authenticJson, true);

$descrizioneHome = $authentic['descrizioneHome'];

$linkHome = $authentic['linkHome'];

?>

<section class="ar-hero">
  <div class="ar-home-img">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/ar/img/logo_ar_full.png" alt="">
  </div>
  <nav class="ar-navbar">
    <ul>

      <?php foreach ($linkHome as $link) { ?>
        <li>
          <a class="ar-btn-home" href="<?php echo $link['url'] ?>"> 
            <span class="ar-btn-text">
             <?php echo $link['label'] ?>
            </span>
            <span class="ar-btn-image">
              <img src="<?php echo $link['img'] ?>" alt="">
            </span>    
          </a>
        </li>
      <?php } ?>

            <li>
        <a class="ar-btn-home" href="/portale"> 
          <span class="ar-btn-text">
            Accedi al portale del cittadino
          </span>
          <span class="ar-btn-image">
            <i class="bi bi-person-bounding-box"></i>
          </span>    
        </a>
      </li>
    </ul>
  </nav>
</section>

<section class="ar-blog">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php foreach($posts as $post) { ?>
          <article class="ar-blog-article" style="--tag-color:<?php  echo CHtml::encode(Lookup::color('PostCategory',$post->category)); ?>">
            <div class="ar-blog-wrapper">
              <h6 class="ar-blog-top"><?php echo CHtml::encode(Lookup::item('PostCategory',$post->category)); ?></h6>
              <div class="ar-blog-text">
                <h4><?php echo CHtml::encode($post->title); ?></h4>
                <div class="ar-content-wrapper"><?php echo $post->content; ?></div>
              </div>
              <small class="ar-blog-bottom"><?php echo CHtml::encode(date("d/m/Y H:m",$post->update_time)); ?></small>
            </div>
          </article>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<section class="ar-description">
  <div class="container">
    <div class="row">
      <div class="col-12">

      <?php foreach ($descrizioneHome as $descrizione) { ?>
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2><?php echo $descrizione['titolo'] ?></h2>
            <p><?php echo $descrizione['testo'] ?> </p>
          </div>
          <div class="ar-description-image">
            <img src="<?php echo $descrizione['immagine'] ?>" alt="">
          </div>
        </article>
      <?php } ?>

      </div>
    </div>
  </div>
</section>
