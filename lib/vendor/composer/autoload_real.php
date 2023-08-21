<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite0ed1d4b6b658b719d991e16bb2ce4f9
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

        spl_autoload_register(array('ComposerAutoloaderInite0ed1d4b6b658b719d991e16bb2ce4f9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite0ed1d4b6b658b719d991e16bb2ce4f9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite0ed1d4b6b658b719d991e16bb2ce4f9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
