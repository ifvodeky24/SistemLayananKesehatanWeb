<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Puskesmas */
?>
<div class="puskesmas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_puskesmas',
            'nama_puskesmas',
            'alamat:ntext',
            'kabupaten',
            'kecamatan',
            'nomor_telp',
            [
                'attribute' => 'foto',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/puskesmas/'. $data['foto'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            'fasilitas',
            'deskripsi',
            'latitude',
            'longitute',
        ],
    ]) ?>

</div>
