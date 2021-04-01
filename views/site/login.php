    <?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <br><br><br><br><br><br><br><br>
            <h3>Selamat datang</h3>
            <!-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            <!-- </p> -->
            <p>Silahkan Login.</p>
            <?php $form = ActiveForm::begin(); ?>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control','placeholder'=>'Username', 'required' => ''])->label(false) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control','placeholder'=>'Password', 'required' => ''])->label(false) ?>
                </div>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>

            </form>
            <p class="m-t"> <small> Layanan Masyarakat &copy; 2020</small> </p>
            <?php ActiveForm::end(); ?>
        </div>
    </div>



