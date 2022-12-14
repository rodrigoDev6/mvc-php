<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16372b162c72968212d987f9a3ab9e42
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rodrigo\\MvcPhp\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rodrigo\\MvcPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16372b162c72968212d987f9a3ab9e42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16372b162c72968212d987f9a3ab9e42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16372b162c72968212d987f9a3ab9e42::$classMap;

        }, null, ClassLoader::class);
    }
}
