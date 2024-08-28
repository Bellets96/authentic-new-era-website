<ul>
    <?php if (!$this->getArchivedPosts()) { ?>
        <li>
            <?php echo Yii::t("common", "0 archived posts") ?>
        </li>
    <?php } else { ?>
        <?php foreach ($this->getArchivedPosts() as $post): ?>
            <li>
                <?php echo CHtml::link(CHtml::encode($post->title), $post->getUrl()); ?>
            </li>
        <?php endforeach;
    } ?>
</ul>