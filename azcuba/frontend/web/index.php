<?php
use common\models\Config;

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../../common/config/main-local.php',
    require __DIR__ . '/../config/main.php',
    require __DIR__ . '/../config/main-local.php'
);

//Clase para cargar el objeto Config al iniciar
class AppApplication extends yii\web\Application
{
    public $config;
    public $num_limit;

    public function init() {
        $this->config = Config::find()->where(['id' => 1])->one();
        return parent::init();
    }
}

(new AppApplication($config))->run();
