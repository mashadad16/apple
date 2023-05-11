<?php

use yii\grid\GridView;

/** @var yii\web\View $this */

$this->title = 'Garden';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Яблоневый сад</h1>
    </div>

    <div class="body-content">

        <div class="row">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'color',
                    'status',
                    'count_of_eat',
                    'date_birth:datetime',
                    'date_fall:datetime',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]) ?>

        </div>

    </div>
</div>
