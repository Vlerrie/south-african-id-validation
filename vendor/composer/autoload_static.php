<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75f2c522987c764dae9ad8249ce28d73
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vlerrie\\SouthAfricaIdValidation\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vlerrie\\SouthAfricaIdValidation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75f2c522987c764dae9ad8249ce28d73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75f2c522987c764dae9ad8249ce28d73::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75f2c522987c764dae9ad8249ce28d73::$classMap;

        }, null, ClassLoader::class);
    }
}
