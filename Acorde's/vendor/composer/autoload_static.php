<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba419e9a8f480da9413f242ee86bbba6
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GuitarShop\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GuitarShop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba419e9a8f480da9413f242ee86bbba6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba419e9a8f480da9413f242ee86bbba6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
