<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\models\forms\good\GoodForm
 * @var array $categories
 *
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\models\forms\good\GoodForm;

?>

<div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'method' => 'post']) ?>

    <?= $form->field($model, 'title')->textInput()?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'category_id')->textInput() //dropDownList( $categories, ['prompt' => 'Выберите категорию']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList( GoodForm::getStatuses(), ['prompt' => 'Выберите статус']) ?>
        </div>
    </div>


    <?= $form->field($model, 'description')->textarea(['rows' => 7])?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'price')->input('number')?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'amount')->input('number')?>
        </div>
    </div>

    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success' ])?>

    <?php ActiveForm::end() ?>

</div>