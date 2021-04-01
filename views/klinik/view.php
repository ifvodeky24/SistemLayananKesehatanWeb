<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Klinik */
?>
<div class="klinik-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_klinik',
            'nama_klinik',
            'kabupaten',
            'kecamatan',
            'alamat:ntext',
            [
                'attribute' => 'foto',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/klinik/'. $data['foto'],
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
