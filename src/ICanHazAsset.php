<?php
/**
 * @link https://github.com/MadAnd/yii2-icanhaz
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\icanhaz;

use yii\web\AssetBundle;

class ICanHazAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/icanhaz';
    public $js = [
        'ICanHaz.min.js',
    ];
}
