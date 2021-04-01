<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

$url = Yii::$app->urlManagerFrontEnd->baseUrl;
 
/* @var $this yii\web\View */
/* @var $model app\models\Puskesmas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puskesmas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_puskesmas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>
    
     <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'nomor_telp')->textInput(['maxlength' => true]) ?>
    
    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->foto)){
            
                $img[] = Html::img($url.'/web/gambar/puskesmas/'.$model->foto, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->foto, Url::to(['/file/delete-upload']),
                      'key' => 'foto '.  $model->id_puskesmas, 
                ];
            }
        ?>

     <?= $form->field($model, 'foto')->widget(FileInput::className(),[
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showRemove'=> false,
            'showUpload' => false,
            'showCancel' => false,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $json,
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['jpg','png','jpeg'],
        ]
     ])?>
    <?php else : ?>
         <?= $form->field($model, 'foto')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?= $form->field($model, 'fasilitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitute')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
