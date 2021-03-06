<?php
use app\assets\LoginAsset;
use yii\helpers\Html;

LoginAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title>Login</title>
    <?php $this->head() ?>

</head>

<body class="gray-bg">
    <?php $this->beginBody() ?>
    <?php echo $content ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage(); ?>