<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e9a8e95e355dfd1539333688257902c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e9a8e95e355dfd1539333688257902c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e9a8e95e355dfd1539333688257902c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
