<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15b2e5fea952fbf935bf9ee95fb84991
{
    public static $files = array (
        '9792b02da3111b62997015981f2467d4' => __DIR__ . '/../..' . '/app/config.php',
        'de98e88a9b7b9c3addc53d9f0301b332' => __DIR__ . '/../..' . '/app/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bng\\System\\' => 11,
            'bng\\Models\\' => 11,
            'bng\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bng\\System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/system',
        ),
        'bng\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'bng\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'bng\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'bng\\Controllers\\Main' => __DIR__ . '/../..' . '/app/controllers/Main.php',
        'bng\\Models\\Agents' => __DIR__ . '/../..' . '/app/models/Agents.php',
        'bng\\Models\\BaseModel' => __DIR__ . '/../..' . '/app/models/BaseModel.php',
        'bng\\System\\Database' => __DIR__ . '/../..' . '/app/system/Database.php',
        'bng\\System\\Router' => __DIR__ . '/../..' . '/app/system/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15b2e5fea952fbf935bf9ee95fb84991::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15b2e5fea952fbf935bf9ee95fb84991::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15b2e5fea952fbf935bf9ee95fb84991::$classMap;

        }, null, ClassLoader::class);
    }
}
