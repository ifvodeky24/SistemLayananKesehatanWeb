<?php
use yii\helpers\Html;
?>
<nav class="navbar navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse"
            class="navbar-toggle collapsed" type="button">
            <i class="fa fa-reorder"></i>
        </button>
        <a href="#" class="navbar-brand">Layanan Kesehatan</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav">
            <li>
                <?= Html::a('', ['#']) ?>
            </li>
            <li>
                <?= Html::a('Admin', ['/admin/index']) ?>
            </li>

            <li>
                <?= Html::a('Apotek', ['/apotek/index']) ?>
            </li>

            <li>
                <?= Html::a('Dokter Praktek', ['/dokter-praktek/index']) ?>
            </li>

            <li>
                <?= Html::a('Klinik', ['/klinik/index']) ?>
            </li>

            <li>
                <?= Html::a('Puskesmas', ['/puskesmas/index']) ?>
            </li>

            <li>
                <?= Html::a('Rumah Sakit', ['/rumah-sakit/index']) ?>
            </li>

        </ul>
        <ul class="nav navbar-top-links navbar-right">
        
            <li>
                <?= Html::a('<i class="fa fa-sign-out"></i> Log out',
                    ['/site/logout'], ['data' => ['method' => 'post']]) //optional* -if you need to add style 
                ?>
            </li>
        </ul>
    </div>
</nav>