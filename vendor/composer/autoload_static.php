<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde47a9a62452a2303fe09754342732bb
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'primakurzy\\Shortcode\\' => 21,
        ),
        'T' => 
        array (
            'Thunder\\Shortcode\\' => 18,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'primakurzy\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/primakurzy/shortcode/src',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitde47a9a62452a2303fe09754342732bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde47a9a62452a2303fe09754342732bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde47a9a62452a2303fe09754342732bb::$classMap;

        }, null, ClassLoader::class);
    }
}
