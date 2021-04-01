<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RumahSakit */
?>
<div class="rumah-sakit-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_rumah_sakit',
            'nama_rumah_sakit',
            'alamat:ntext',
            'kabupaten',
            'kecamatan',
            'nomor_telp',
            [
                'attribute' => 'foto',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/rumahsakit/'. $data['foto'],
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
