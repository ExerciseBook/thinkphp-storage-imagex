<?php

declare (strict_types = 1);

namespace think\filesystem\driver;

use ExerciseBook\Flysystem\ImageX\ImageXAdapter;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Adapter\Local as LocalAdapter;
use League\Flysystem\Filesystem;
use think\filesystem\Driver;

class ImageX extends Driver
{
    protected $config = [

    ];

    protected function createAdapter(): AdapterInterface
    {
        return new ImageXAdapter($this->config);
    }
}
