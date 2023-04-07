<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit375f32dc94bb0625bad549cebc950531
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Silah\\AutogenerateModel\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Silah\\AutogenerateModel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit375f32dc94bb0625bad549cebc950531::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit375f32dc94bb0625bad549cebc950531::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit375f32dc94bb0625bad549cebc950531::$classMap;

        }, null, ClassLoader::class);
    }
}
