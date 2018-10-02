<?php

namespace rollingglory\ImageOptimizer;

use Yii;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class Optimizer
{
    public static function optimize(string $pathToImage, string $pathToOutput = null)
    {
        $pathToImage = Yii::getAlias($pathToImage);

        if ($pathToOutput) {
            $pathToOutput = Yii::getAlias($pathToOutput);
        }

        return OptimizerChainFactory::create()->optimize($pathToImage, $pathToOutput);
    }
}