<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArtistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artista-ultimos">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Añadir artista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => '/artistas/viewSearch',
        'layout' => "{items}\n{pager}",
        ]) ?>
    </div>
</div>
