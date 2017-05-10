<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FavoritoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Favoritos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="favorito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Favorito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'id_usuario',
            //'id_cancion',
            [
             'label'=>'Usuario',
             'format' => 'raw',
             'value'=>function ($data) {
                        return Html::a(Html::encode($data['idUsuario']->username), ['/user/profile/show', 'id' => $data['idUsuario']->id]);
                      },
            ],
            [
             'label'=>'Canción',
             'format' => 'raw',
             'value'=>function ($data) {
                        return Html::a(Html::encode($data['idCancion']->nombre), ['/canciones/view', 'id' => $data['id']]);
                      },
            ],
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
