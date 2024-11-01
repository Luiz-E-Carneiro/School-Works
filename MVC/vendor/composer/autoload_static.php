<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b4978dfc58a8ff41be6549d677799fb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b4978dfc58a8ff41be6549d677799fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b4978dfc58a8ff41be6549d677799fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9b4978dfc58a8ff41be6549d677799fb::$classMap;

        }, null, ClassLoader::class);
    }
}
