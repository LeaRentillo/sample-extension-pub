<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2018
 * @package yii2-widgets
 * @subpackage yii2-widget-touchspin
 * @version 1.2.3
 */

namespace iscalelea\SampleExtensionPub;

use iscalelea\SampleExtensionPub\SampleExtentionPubAsset;
use kartik\base\InputWidget;

/**
 */
class SampleExtensionPub extends InputWidget
{
    /**
     * @inheritdoc
     */
    public $pluginName = 'SampleExtensionPub';
    


    /**
     * @inheritdoc
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        parent::run();
        $this->setPluginOptions();
        $this->registerAssets();
    }


    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        SampleExtentionPubAsset::registerBundle($view, $this->bsVersion);
        $this->registerPlugin($this->pluginName);
    }
}



use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetWhitelabel extends AssetBundle
{
    
}