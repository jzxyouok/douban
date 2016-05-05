<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
if(file_exists('.dev')){
    defined('YII_ENV') or define('YII_ENV', 'dev');
}else{
    defined('YII_ENV') or define('YII_ENV', 'prod');
}

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/'.YII_ENV.'/main.php'),
    //require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/'.YII_ENV.'/main.php')
    //require(__DIR__ . '/../config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
