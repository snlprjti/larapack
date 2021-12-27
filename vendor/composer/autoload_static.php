<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf01be720a80fab39c46a878f8b7f0ff3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sunil\\Ecomm\\' => 12,
        ),
        'M' => 
        array (
            'Modules\\Core\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sunil\\Ecomm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Modules\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/snlprjpti/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf01be720a80fab39c46a878f8b7f0ff3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf01be720a80fab39c46a878f8b7f0ff3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf01be720a80fab39c46a878f8b7f0ff3::$classMap;

        }, null, ClassLoader::class);
    }
}