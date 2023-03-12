<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace SampleExtensionPub;

use yii\web\AssetBundle;

/**
 * AuthChoiceAsset is an asset bundle for [[AuthChoice]] widget.
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 2.0
 */
class ExtensionStyleAsset extends AssetBundle
{
    public $sourcePath = '@iscalelea/sample-extension-pub/assets/css';
    public $css = [
        'sample.css',
    ];
}