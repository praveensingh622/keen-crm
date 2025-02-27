<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc933b1d0f91bed1bfa6a5b7cb6e709e7
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitc933b1d0f91bed1bfa6a5b7cb6e709e7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc933b1d0f91bed1bfa6a5b7cb6e709e7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc933b1d0f91bed1bfa6a5b7cb6e709e7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
