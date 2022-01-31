<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf74286d2f9f463ba8f91c37ca7d71d21
{
    public static $files = array (
        '6c200413eed8aeea54dbaf934a31b127' => __DIR__ . '/..' . '/weglot/simplehtmldom/src/simple_html_dom.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Weglot\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Morphism\\' => 9,
        ),
        'L' => 
        array (
            'Languages\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Weglot\\' => 
        array (
            0 => __DIR__ . '/..' . '/weglot/weglot-php/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Morphism\\' => 
        array (
            0 => __DIR__ . '/..' . '/gmulti/morphism-php/lib',
        ),
        'Languages\\' => 
        array (
            0 => __DIR__ . '/..' . '/weglot/weglot-php/node_modules/@weglot/languages/dist',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WGSimpleHtmlDom' => 
            array (
                0 => __DIR__ . '/..' . '/weglot/simplehtmldom/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Weglot\\TranslationDefinitions' => __DIR__ . '/..' . '/weglot/translation-definitions/index.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf74286d2f9f463ba8f91c37ca7d71d21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf74286d2f9f463ba8f91c37ca7d71d21::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf74286d2f9f463ba8f91c37ca7d71d21::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf74286d2f9f463ba8f91c37ca7d71d21::$classMap;

        }, null, ClassLoader::class);
    }
}
