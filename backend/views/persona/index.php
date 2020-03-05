<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Persona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_persona',
            'nombre_persona',
            /* ORIGINAL
                [
                    'attribute'=>'attachment',
                    'format'=>'raw',
                    'value' => function($data)
                    {
                        return
                            Html::a('Download file', ['letter/download', 'id' => $data->id], ['class' => 'btn btn-primary']);
                    }
                ],*/
            [
                'attribute'=>'Ordenanza',
                'format'=>'raw',
                'value' => function($data)
                    {
                    return
                    Html::a('PDF', ['archivos/pdf_reporte.pdf'], ['class' => 'btn btn-primary']);
                    }
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



</div>
