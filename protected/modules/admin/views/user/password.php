<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Журнал пользователей', 'url'=>array('index')),
	array('label'=>'Создать пользователя', 'url'=>array('create')),
	array('label'=>'Просмотр пользователя', 'url'=>array('view', 'id'=>$model->id)),
 
);
?>
<p>Укажите пароль</p>
<?php 
echo CHtml::form();
echo CHtml::textField('password');
echo CHtml::submitButton('Изменить');
echo CHtml::endForm();