<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Apotek */
?>
<div class="apotek-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_apotek',
            'nama_apotek',
            'kabupaten',
            'kecamatan',
            'alamat',
            [
                'attribute' => 'foto',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/apotek/'. $data['foto'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            'fasilitas',
            'deskripsi',
            'latitude',
            'longitude',
        ],
    ]) ?>

</div>
