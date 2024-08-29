<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="ar-hero">
  <video class="ar-home-video" muted autoplay>
    <source media="(min-width: 768px)" src="<?php echo Yii::app()->request->baseUrl; ?>/ar/video/video_ar.webm" type="video/webm">
    <source media="(max-width: 767px)" src="https://videos.pexels.com/video-files/3832278/3832278-uhd_1440_2732_25fps.mp4" type="video/mp4">
  </video>
  <nav class="ar-navbar">
    <ul>
      <li>
        <a class="ar-btn-home" target="_blank" href="https://discord.gg/authenticremastered"> 
          <span class="ar-btn-text">
            Unisciti al Discord
          </span>
          <span class="ar-btn-image">
            <i class="bi bi-discord"></i>
          </span>   
        </a>
      </li>
      <li>
        <a class="ar-btn-home" target="_blank" href="#"> 
          <span class="ar-btn-text">
            Entra nel mondo di Authentic
          </span>
          <span class="ar-btn-image">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
              <polygon fill="currentColor" points="5,45 9,34 21,22 15,45"></polygon>
              <polygon fill="currentColor" points="25,18 33,45 43,45 32,12"></polygon>
              <polygon fill="currentColor" points="16.059,14.164 20,3 28,3"></polygon>
              <polygon fill="currentColor" points="10.731,29.002 23,17 23,15 11.58,26.667"></polygon>
              <polygon fill="currentColor" points="15.142,16.429 13,22 29.724,5.725 28.818,3.178"></polygon>
              <polygon fill="currentColor" points="23.932,14.055 24.377,15.626 30.941,9.178 30.385,7.702"></polygon>
            </svg>
          </span>   
        </a>
      </li>
      <li>
        <a class="ar-btn-home" target="_blank" href="#"> 
          <span class="ar-btn-text">
            Esplora il regolamento
          </span>
          <span class="ar-btn-image">
            <i class="bi bi-book-half"></i> 
          </span>    
        </a>
      </li>
      <li>
        <a class="ar-btn-home" target="_blank" href="/portale"> 
          <span class="ar-btn-text">
            Accedi al portale del cittadino
          </span>
          <span class="ar-btn-image">
            <i class="bi bi-person-bounding-box"></i>
          </span>    
        </a>
      </li>
      <li>
        <a class="ar-btn-home" target="_blank" href="#"> 
          <span class="ar-btn-text">
            Instagram
          </span> 
          <span class="ar-btn-image">
            <i class="bi bi-instagram"></i>
          </span>    
        </a>
      </li>
      <li>
        <a class="ar-btn-home" target="_blank" href="#"> 
            <span class="ar-btn-text">
              TikTok
            </span>
          <span class="ar-btn-image">
            <i class="bi bi-tiktok"></i>
          </span>    
        </a>
      </li>
      <li>
        <a class="ar-btn-home" target="_blank" href="#"> 
          <span class="ar-btn-text">
            YouTube
          </span> 
          <span class="ar-btn-image">
            <i class="bi bi-youtube"></i>
          </span>    
        </a>
      </li>
    </ul>
  </nav>
</section>
      
<section class="ar-socials">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul>
           
        </ul>
     </div>
    </div>
  </div>
</section>

<section class="ar-blog">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php foreach($posts as $post): ?>
          <article class="ar-blog-article" style="--tag-color:<?php  echo CHtml::encode(Lookup::color('PostCategory',$post->category)); ?>">
            <div class="ar-blog-wrapper">
              <h6 class="ar-blog-top"><?php echo CHtml::encode(Lookup::item('PostCategory',$post->category)); ?></h6>
              <div class="ar-blog-text">
                <h2><?php echo CHtml::encode($post->title); ?></h2>
                <p><?php echo CHtml::encode($post->content); ?></p>
              </div>
              <small class="ar-blog-bottom"><?php echo CHtml::encode(date("d/m/Y H:m",$post->update_time)); ?></small>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="ar-description">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2>Chi siamo</h2>
            <p>Vi diamo il benvenuto su Authentic Remastered, il server roleplay ambientato nel cuore dell’Italia, fondato nel mese di Dicembre 2022 portando con determinazione il server ad essere conosciuto nel panorama italiano. </p>
          </div>
          <div class="ar-description-image">
            <img src="https://placehold.co/1920x1080" alt="">
          </div>
        </article>
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2>Il nostro obbiettivo</h2>
            <p>Server nato per simulare al meglio la vita reale senza tralasciare il piacere e il divertimento del gioco di ruolo; l'obiettivo è, anche in questa versione, di portare su FiveM la maggiore espressione di role play, andando a limitare la presenza di giocatori non adatti alla nostra community, pilastro importante per il nostro server, poiché siamo sempre attenti ai feedback dei giocatori. </p>
          </div>
          <div class="ar-description-image">
            <img src="https://placehold.co/1920x1080" alt="">
          </div>
        </article>
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2>L'ambientazione</h2>
            <p>Il server è ambientato nella città eterna, Roma, la quale trasporterà la vostra esperienza di gioco in un viaggio senza precedenti, qui si svolgerà la vostra avventura, in un'ambientazione dove la cultura e la storia della nostra Capitale si uniscono al caratteristico    caos urbano creando un'esperienza di gioco autentica e coinvolgente. </p>
          </div>
          <div class="ar-description-image">
            <img src="https://placehold.co/1920x1080" alt="">
          </div>
        </article>
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2>Le nostre unicità</h2>
            <p>Esplora la nostra nuova versione, tutti gli edifici e i punti di interesse presenti all’interno del nostro server sono stati creati con cura per garantire un'esperienza di gioco realistica, come ad esempio lo Stadio Olimpico presente solamente nel nostro server. </p>
          </div>
          <div class="ar-description-image">
            <img src="https://placehold.co/1920x1080" alt="">
          </div>
        </article>
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2>La tua vita</h2>
            <p>Scegli il tuo destino tra una vasta gamma di lavori, tra i quali possiamo trovare: forze dell'ordine, famiglie e bande criminali, imprenditori, soccorritori e molti altri. </p>
          </div>
          <div class="ar-description-image">
            <img src="https://placehold.co/1920x1080" alt="">
          </div>
        </article>
        <article class="ar-description-wrapper">
          <div class="ar-description-text">
            <h2>Te</h2>
            <p>Ogni scelta influenzerà la tua storia e il mondo circostante, cerca, con il tuo PG, di vivere l’esperienza di gioco che ti permetta di poter soddisfare le tue emozioni e le tue ambizioni.</p>
          </div>
          <div class="ar-description-image">
            <img src="https://placehold.co/1920x1080" alt="">
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
