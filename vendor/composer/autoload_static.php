<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf89c2dd408d2ecc4ee2eaadcb2e50dc7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf89c2dd408d2ecc4ee2eaadcb2e50dc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf89c2dd408d2ecc4ee2eaadcb2e50dc7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf89c2dd408d2ecc4ee2eaadcb2e50dc7::$classMap;

        }, null, ClassLoader::class);
    }
}
