<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;    

/* @var $this yii\web\View */

$this->title = 'Google Drive Files List';
?>

<?php 
    $style= <<< CSS
        .grid-view td {
            white-space: nowrap;
            width:20px;
        }
    CSS;
    $this->registerCss($style);
?>

<?= GridView::widget([
    'dataProvider' => $provider,
    // 'tableOptions' => ['class' => 'table table-striped table-bordered table-responsive'],
    'columns' => [
        [
            'attribute' => 'title',
            'label' => 'Title',
            'contentOptions' => ['style' => 'width:100px; white-space: normal;']
        ],
        [
            'attribute' => 'thumbnailLink',
            'format' => 'html',
            'label' => 'Thumbnail',
            'value' => function ($model) {
                return (isset($model['thumbnailLink'])) ? Html::img($model['thumbnailLink'], ['width' => '60px']) : null;
            },
        ],
        [
            'attribute' => 'embedLink',
            'format' => 'html',
            'label' => 'View Link',
            'value' => function ($model) {
                return (isset($model['embedLink'])) ? Html::a('Show', $model['embedLink'], ['class' => 'btn btn-success btn-xs']) : null;
            },
        ],
        [
            'attribute' => 'modifiedDate',
            'format' => ['date', 'php:Y-m-d']
        ],
        'fileSize',
        'ownerNames'
    ],
]); ?>