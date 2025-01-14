<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\bootstrap;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap'.( YII_ENV_DEV ? '.js' : '.min.js' ),
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
