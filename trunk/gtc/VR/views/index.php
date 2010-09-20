﻿<?php Yii::import('VRGenerator.widgets.ddeditor.*'); ?>
<h1>View Renderer Generator</h1>
<p>This generator helps you to quickly generate the skeleton code for a new view renderer class.</p>
<?php $form=$this->beginWidget('CCodeForm', array('model'=>$model)); ?>
 <?php $this->widget('system.web.widgets.CTabView', array('tabs'=>array(
    'tab1'=>array(
	    'title'=>'Component', 'view'=>'__class',
        'data'=>array('model'=>$model,'form'=>$form),
	 ),
    'tab2'=>array(
	    'title'=>'Comment', 'view'=>'__comment',
        'data'=>array('model'=>$model,'form'=>$form),
	 ),
    'tab4'=>array(
	    'title'=>'Info', 'view'=>'__infos',
        'data'=>array('model'=>$model,'form'=>$form),
	 ),
)));
?>
<?php $this->endWidget(); ?>