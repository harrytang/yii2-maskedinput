<?php

// ensure we get report on all possible php errors
error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
define('YII_ENV', 'test');
$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@yiiunit/maskedinput', __DIR__);
Yii::setAlias('@yii/maskedinput', dirname(__DIR__) . '/src');

if (isset(Yii::$classMap)) {
    // @todo remove after switch to "yii2:2.1"
    Yii::$classMap[yii\widgets\MaskedInput::class] = dirname(__DIR__) . '/src/MaskedInput.php';
}
