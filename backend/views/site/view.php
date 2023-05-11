<?php
use yii\widgets\DetailView;

$this->title = 'Apple';

/** @var yii\web\View $this */

echo '<h1>Яблоко</h1>';

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'color',
        'status',
        'count_of_eat',
        'date_birth:datetime',
        'date_fall:datetime',
    ],
]);

