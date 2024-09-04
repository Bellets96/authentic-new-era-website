<?php 

$authenticJson = file_get_contents('authentic.json');

$authentic = json_decode($authenticJson, true);

$fazioni = $authentic['fazioni'];

$fazione = Yii::app()->getRequest()->getParam('fazione');

$this->pageTitle=Yii::app()->name . ' - ' . $fazioni[$fazione]['label'];
?>

<section class="ar-portale" style="--custom-color:<?php echo $fazioni[$fazione]['color'] ?>">
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ar-portale-title">
                    <?php if ($fazioni[$fazione]['siteUrl'] == '') {?>
                        <div class="ar-portale-link" target="_blank" href="<?php echo $fazioni[$fazione]['siteUrl']; ?>">
                            <h2><?php echo $fazioni[$fazione]['label'] ?></h2>
                            <img src="<?php echo $fazioni[$fazione]['img'] ?>">
                        </div>
                    <?php } else {?>
                        <a class="ar-portale-link" target="_blank" href="<?php echo $fazioni[$fazione]['siteUrl']; ?>">
                            <h2><?php echo $fazioni[$fazione]['label'] ?></h2>
                            <img src="<?php echo $fazioni[$fazione]['img'] ?>">
                            <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    <?php }?>
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