<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8739ce8655556d1f0f5bf8db443b727d
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Underscore\\' => 11,
        ),
        'P' => 
        array (
            'Patchwork\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Underscore\\' => 
        array (
            0 => __DIR__ . '/..' . '/anahkiasen/underscore-php/src',
            1 => __DIR__ . '/..' . '/anahkiasen/underscore-php/tests',
        ),
        'Patchwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/patchwork/utf8/src/Patchwork',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'Normalizer' => __DIR__ . '/..' . '/patchwork/utf8/src/Normalizer.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8739ce8655556d1f0f5bf8db443b727d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8739ce8655556d1f0f5bf8db443b727d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8739ce8655556d1f0f5bf8db443b727d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8739ce8655556d1f0f5bf8db443b727d::$classMap;

        }, null, ClassLoader::class);
    }
}
