<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a3e6de692635eaa0a0f2671b1b9df8b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a3e6de692635eaa0a0f2671b1b9df8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a3e6de692635eaa0a0f2671b1b9df8b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}