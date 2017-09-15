<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf524e3101b3a6eef7f43be3407567140
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HelloWorld\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HelloWorld\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'HelloWorld\\Greetings' => __DIR__ . '/../..' . '/src/greetings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf524e3101b3a6eef7f43be3407567140::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf524e3101b3a6eef7f43be3407567140::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf524e3101b3a6eef7f43be3407567140::$classMap;

        }, null, ClassLoader::class);
    }
}