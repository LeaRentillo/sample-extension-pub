<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace iscalelea\SampleExtensionPub;

use yii\web\AssetBundle;

/**
 * AuthChoiceAsset is an asset bundle for [[AuthChoice]] widget.
 *
 * @see AuthChoiceStyleAsset
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 2.0
 */
class ExtensionAsset extends AssetBundle
{
    public $sourcePath = '@iscalelea/sample-extension-pub/assets/js';
    public $js = [
        'sample.js',
    ];
    public $depends = [
        'iscalelea\sample-extension-pub\AuthChoiceStyleAsset',
        'yii\web\YiiAsset',
    ];
}
