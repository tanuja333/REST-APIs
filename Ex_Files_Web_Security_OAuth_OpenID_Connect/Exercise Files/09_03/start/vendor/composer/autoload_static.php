<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f2dfc2b4d0fba17eda03450344ff0dc
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '256c1545158fc915c75e51a931bdba60' => __DIR__ . '/..' . '/lcobucci/jwt/compat/class-aliases.php',
        '0d273777b2b0d96e49fb3d800c6b0e81' => __DIR__ . '/..' . '/lcobucci/jwt/compat/json-exception-polyfill.php',
        'd6b246ac924292702635bb2349f4a64b' => __DIR__ . '/..' . '/lcobucci/jwt/compat/lcobucci-clock-polyfill.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'O' => 
        array (
            'OAuth2ServerExamples\\' => 21,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Server\\' => 21,
            'League\\Event\\' => 13,
            'Lcobucci\\JWT\\' => 13,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'OAuth2ServerExamples\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'League\\OAuth2\\Server\\' => 
        array (
            0 => __DIR__ . '/../..' . '/oauth2-server/src',
        ),
        'League\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/event/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f2dfc2b4d0fba17eda03450344ff0dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f2dfc2b4d0fba17eda03450344ff0dc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9f2dfc2b4d0fba17eda03450344ff0dc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9f2dfc2b4d0fba17eda03450344ff0dc::$classMap;

        }, null, ClassLoader::class);
    }
}