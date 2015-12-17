<?php 
namespace rafaelvaloto\mdl;

use yii\web\AssetBundle;

/**
 * 
 **/
class MaterialDesignLiteAsset extends AssetBundle
{
	public 	$sourcePath = '@vendor/bower/bowerAsset/material-design-lite';

	public $css = [
		'material-design-lite.min.css'	
	];
	public $js = [	
		'material-design-lite.min.js'	
	];	
}

?>
