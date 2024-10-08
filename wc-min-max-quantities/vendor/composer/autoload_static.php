<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita669c94c0748f20dc46817e5bb557377
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WooCommerceMinMaxQuantities\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WooCommerceMinMaxQuantities\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
            1 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WooCommerceMinMaxQuantities\\Admin\\Actions' => __DIR__ . '/../..' . '/includes/Admin/Actions.php',
        'WooCommerceMinMaxQuantities\\Admin\\Admin' => __DIR__ . '/../..' . '/includes/Admin/Admin.php',
        'WooCommerceMinMaxQuantities\\Admin\\MetaBoxes' => __DIR__ . '/../..' . '/includes/Admin/MetaBoxes.php',
        'WooCommerceMinMaxQuantities\\Admin\\Notices' => __DIR__ . '/../..' . '/includes/Admin/Notices.php',
        'WooCommerceMinMaxQuantities\\Admin\\Settings' => __DIR__ . '/../..' . '/includes/Admin/Settings.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Admin\\Flash' => __DIR__ . '/../..' . '/lib/ByteKit/Admin/Flash.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Admin\\Notices' => __DIR__ . '/../..' . '/lib/ByteKit/Admin/Notices.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Admin\\Settings' => __DIR__ . '/../..' . '/lib/ByteKit/Admin/Settings.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Interfaces\\Pluginable' => __DIR__ . '/../..' . '/lib/ByteKit/Interfaces/Pluginable.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Interfaces\\Scriptable' => __DIR__ . '/../..' . '/lib/ByteKit/Interfaces/Scriptable.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Plugin' => __DIR__ . '/../..' . '/lib/ByteKit/Plugin.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Scripts' => __DIR__ . '/../..' . '/lib/ByteKit/Scripts.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Services' => __DIR__ . '/../..' . '/lib/ByteKit/Services.php',
        'WooCommerceMinMaxQuantities\\ByteKit\\Traits\\HasPlugin' => __DIR__ . '/../..' . '/lib/ByteKit/Traits/HasPlugin.php',
        'WooCommerceMinMaxQuantities\\Cart' => __DIR__ . '/../..' . '/includes/Cart.php',
        'WooCommerceMinMaxQuantities\\Installer' => __DIR__ . '/../..' . '/includes/Installer.php',
        'WooCommerceMinMaxQuantities\\Plugin' => __DIR__ . '/../..' . '/includes/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita669c94c0748f20dc46817e5bb557377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita669c94c0748f20dc46817e5bb557377::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita669c94c0748f20dc46817e5bb557377::$classMap;

        }, null, ClassLoader::class);
    }
}
