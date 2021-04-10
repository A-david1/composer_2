<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e6082a51e6794dc1fb5f020395b5781
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e6082a51e6794dc1fb5f020395b5781::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e6082a51e6794dc1fb5f020395b5781::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9e6082a51e6794dc1fb5f020395b5781::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9e6082a51e6794dc1fb5f020395b5781::$classMap;

        }, null, ClassLoader::class);
    }
}
