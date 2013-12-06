<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Журнал категорий', 'url'=>array('index')),
	array('label'=>'Создать категорию', 'url'=>array('create')),
	//array('label'=>'Просмотр', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Изменение категорий <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>