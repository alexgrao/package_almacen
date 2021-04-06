<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11431fcb8546f40f2dd56b0b98b9cb51
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alexgrao\\PackageAlmacen\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alexgrao\\PackageAlmacen\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit11431fcb8546f40f2dd56b0b98b9cb51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11431fcb8546f40f2dd56b0b98b9cb51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11431fcb8546f40f2dd56b0b98b9cb51::$classMap;

        }, null, ClassLoader::class);
    }
}