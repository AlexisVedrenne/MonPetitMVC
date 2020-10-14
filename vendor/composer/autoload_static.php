<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91ea4cb151bf5506e132deaa0cf99c7a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'APP\\Entity\\Client' => __DIR__ . '/../..' . '/src/Entities/Client.php',
        'APP\\Entity\\Commande' => __DIR__ . '/../..' . '/src/Entities/Commande.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91ea4cb151bf5506e132deaa0cf99c7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91ea4cb151bf5506e132deaa0cf99c7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91ea4cb151bf5506e132deaa0cf99c7a::$classMap;

        }, null, ClassLoader::class);
    }
}
