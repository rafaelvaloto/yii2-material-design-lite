<?php 
namespace rafaelvaloto\mdl\material;

use yii\web\AssetBundle;

/**
 * 
 **/
class MaterialDesignLiteAsset extends AssetBundle
{
	public 	$sourcePath = '@vendor/bower/bower-asset/material-design-lite';

	public $css = [
		'material-design-lite.min.css'	
	];
	public $js = [	
		'material-design-lite.min.js'	
	];	
}

?>
