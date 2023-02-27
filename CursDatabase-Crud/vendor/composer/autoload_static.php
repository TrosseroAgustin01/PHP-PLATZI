<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5effdb8f21b77a063228cb4e4d01589f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/router',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5effdb8f21b77a063228cb4e4d01589f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5effdb8f21b77a063228cb4e4d01589f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5effdb8f21b77a063228cb4e4d01589f::$classMap;

        }, null, ClassLoader::class);
    }
}
