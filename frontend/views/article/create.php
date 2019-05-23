<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = "创建";
$this->params['breadcrumbs'][] = ['label' => '文章','url'=>['article/index'],'class'=>'breadcrumb'];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
	<div class="col-lg-9">
		<div class="panel-title box-title">
			<span>创建文章</span>
		</div>
		<dev class="panel-body">
		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
		<?= $form->field($model, 'title')->textInput(['maxlength'=>'true']) ?>
	    <?= $form->field($model, 'cat_id')->dropDownList(['1'=>'分类1','2'=>'分类2']) ?>
		<?= $form->field($model, 'content')->textInput(['maxlength'=>'true']) ?>
		<?= $form->field($model, 'label_img')->textInput(['maxlength'=>'true']) ?>
	    <?= $form->field($model, 'tags')->textInput(['maxlength'=>'true']) ?>
	    <button class="btn btn-success">提交</button>

		<?php ActiveForm::end() ?>
		</dev>
	</div>
	<div class="col-lg-3">
		<div class="panel-title box-title">
			<span>注意事项</span>
		</div>
		<div class="panel-body">
			<p>1.sfaddfd</p>
			<p>2.qwewqew</p>
		</div>
	</div>
</div>			

