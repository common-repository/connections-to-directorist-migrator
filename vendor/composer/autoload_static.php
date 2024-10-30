<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98ae8520e386a00622a1c03d5878aca0
{
    public static $files = array (
        'f0e7aa27aaacc78aae683247712c1680' => __DIR__ . '/../..' . '/helper/const.php',
        'c0fd3ed02fb1efc3c90f0c77a4affa9a' => __DIR__ . '/../..' . '/helper/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Connections_To_Directorist_Migrator\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Connections_To_Directorist_Migrator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit98ae8520e386a00622a1c03d5878aca0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98ae8520e386a00622a1c03d5878aca0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98ae8520e386a00622a1c03d5878aca0::$classMap;

        }, null, ClassLoader::class);
    }
}
