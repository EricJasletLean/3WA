<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc44f3a4ed37d7e648e454b6c01e2055b
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc44f3a4ed37d7e648e454b6c01e2055b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc44f3a4ed37d7e648e454b6c01e2055b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc44f3a4ed37d7e648e454b6c01e2055b::$classMap;

        }, null, ClassLoader::class);
    }
}
