<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit106630599c2cf9a1741e0af9692f5947
{
    public static $files = array (
        '21116b7f5e1665d59cefea285830ec90' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Oedu\\Oeduhelper\\Tests\\' => 22,
            'Oedu\\Oeduhelper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Oedu\\Oeduhelper\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Oedu\\Oeduhelper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit106630599c2cf9a1741e0af9692f5947::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit106630599c2cf9a1741e0af9692f5947::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}