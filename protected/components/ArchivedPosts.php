<?php

Yii::import('zii.widgets.CPortlet');

class ArchivedPosts extends CPortlet
{
    public $title;
    public $maxPosts = 5;

    public function __construct()
    {
        $this->title = Yii::t('common', 'Archived Posts');
    }

/*     public function getArchivedPosts()
    {
        return Post::model()->getArchivedPosts();
    } */

    protected function renderContent()
    {
        $this->render('archivedPosts');
    }
}