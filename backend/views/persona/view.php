<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */

$this->title = $model->id_persona;
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="persona-view">

    <h1><?= Html::encode($this->title) ?></h1>

   
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_persona], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_persona], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_persona',
            'nombre_persona',
        ],
    ]) ?>

<?php
       
         echo '<br /><a href="'.'/archivos/pdf_reporte.pdf"'.'>algo</a>';
        
    ?>

</div>
