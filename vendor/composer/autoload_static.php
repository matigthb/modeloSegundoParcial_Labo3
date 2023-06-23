<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce5029a105aed99e128c7f244fec8478
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mati\\ModeloSegParcial\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mati\\ModeloSegParcial\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitce5029a105aed99e128c7f244fec8478::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce5029a105aed99e128c7f244fec8478::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce5029a105aed99e128c7f244fec8478::$classMap;

        }, null, ClassLoader::class);
    }
}