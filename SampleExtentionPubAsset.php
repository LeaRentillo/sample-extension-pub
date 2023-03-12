<?php

/**
 * @copyright Copyright &copy; 
 * @package iscalelea
 * @subpackage sample-extension-pub
 * @version 1.2.3
 */

namespace iscalelea\SampleExtensionPub;

use yii\web\AssetBundle;

/**
 * Asset bundle for SampleExtensionPubAsset Widget
 *
 * @author 
 * @since 1.0
 */
class SampleExtensionPubAsset extends AssetBundle
{
    public $sourcePath = '@iscalelea/SampleExtensionPub/assets';
    public $css = [
        'sample.css',
    ];
    public $js = [
        'sample.js',
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
    var_dump('ddddd'); exit;
       
        parent::init();
        
    }
}


