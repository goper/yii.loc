<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Журнал категорий', 'url'=>array('index')),	
);
?>

<h1>Создать категорию</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>