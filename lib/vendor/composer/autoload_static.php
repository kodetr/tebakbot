<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit225c3cddf16529c6ba15093e325ab306
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit225c3cddf16529c6ba15093e325ab306::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit225c3cddf16529c6ba15093e325ab306::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
