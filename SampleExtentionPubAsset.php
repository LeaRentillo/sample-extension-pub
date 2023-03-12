<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2018
 * @package yii2-widgets
 * @subpackage yii2-widget-touchspin
 * @version 1.2.3
 */

 namespace iscalelea\SampleExtensionPub;

use kartik\base\AssetBundle;

/**
 * Asset bundle for TouchSpin Widget
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class SampleExtentionPubAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/sample']);
        $this->setupAssets('js', ['js/sample']);
        parent::init();
    }
}
