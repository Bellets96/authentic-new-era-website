<?php 

$fazioniJson = file_get_contents('fazioni.json');

$fazioni = json_decode($fazioniJson, true);

$fazione = Yii::app()->getRequest()->getParam('fazione');

$this->pageTitle=Yii::app()->name . ' - ' . $fazioni[$fazione]['label'];
?>

<section class="ar-portale">
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ar-portale-title">
                    <h2><?php echo $fazioni[$fazione]['label'] ?></h2>
                </div>
                <div class="ar-portale-wrapper">
                    <?php foreach ($variable as $key => $value) {
                        # code...
                    } ?>
                </div>
            </div>
        </div>
    </div> 
</section>