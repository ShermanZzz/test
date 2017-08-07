<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>
    <?php $psObjs = \common\models\Poststatus::find()->all();
           $allstatus = \yii\helpers\ArrayHelper::map($psObjs,'id','name');
    ?>
    <?=$form->field($model,'status')
    ->dropDownList($allstatus,['prompt'=>'请选择状态']);
    ?>
    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

        <?php $psObjs = \common\models\Admin::find()->all();
    $allauthors = \yii\helpers\ArrayHelper::map($psObjs,'id','nickname');
    ?>
    <?=$form->field($model,'author_id')
        ->dropDownList($allauthors,['prompt'=>'请选择作者']);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
