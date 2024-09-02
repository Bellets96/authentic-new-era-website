<?php 

$fazioniJson = file_get_contents('fazioni.json');

$fazioni = json_decode($fazioniJson, true);

$fazione = Yii::app()->getRequest()->getParam('fazione');

$this->pageTitle=Yii::app()->name . ' - ' . $fazioni[$fazione]['label'];
?>

<section class="ar-portale" style="--custom-color:<?php echo $fazioni[$fazione]['color'] ?>">
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ar-portale-title">
                    <a target="_blank" href="<?php echo($fazioni[$fazione]['siteUrl']); ?>">
                        <h2><?php echo $fazioni[$fazione]['label'] ?></h2>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
                <div class="ar-portale-wrapper">
                    <?php foreach ($fazioni[$fazione]['urls']  as $type => $dati) { ?>
                        <article class="ar-portale-modulo">
                            <a target="_blank" href="<?php echo($dati['url']); ?>">
                                <h3><?php echo($dati['label']); ?></h3>
                                <img src="<?php echo($dati['img']); ?>">
                            </a>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div> 
</section>