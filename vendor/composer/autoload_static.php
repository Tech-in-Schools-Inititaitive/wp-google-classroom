<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit190dc99b7eace94e7e22d0e97df923b1
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        '09f3eb77356feb43e3ff26128ee984dc' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrconst.php',
        '7ea152209b6d6f6a9c379bb5777c0ff9' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrconfig.php',
        '0c73d356ebe9ce34ec2059e5155823be' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrtools.php',
        'a6b89a5fdd4a45864c9d75fca423fdcb' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrspec.php',
        '76e161fe34177ecacb03579a570da33b' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrimage.php',
        '6934d3d3dd2f40f5c944c32fb0e9566b' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrinput.php',
        '73e13c3d4549528d6df25b21caee9214' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrbitstream.php',
        '40f3173498d8854542e4bc240d49802c' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrsplit.php',
        '3c7b74ad213a2a1ab62a229331ccfd04' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrrscode.php',
        '82d47331eef5f250db6555d8f44750aa' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrmask.php',
        '5149e0960d38700a8aac9bc1d73d3744' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrencode.php',
        '5fef4f446d3e633cd2a9d935ec82b2a3' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrarea.php',
        '4fc6f9dc41a061719f952ba2ebe7ad91' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrcanvas.php',
        '5e4857b820d3c9a355e9a1271473e3f9' => __DIR__ . '/..' . '/ziplr/php-qr-code/src/qrsvg.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Google\\Auth\\' => 12,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Google_Service_' => 
            array (
                0 => __DIR__ . '/..' . '/google/apiclient-services/src',
            ),
            'Google_' => 
            array (
                0 => __DIR__ . '/..' . '/google/apiclient/src',
            ),
        ),
    );

    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'Google_Service_Exception' => __DIR__ . '/..' . '/google/apiclient/src/Google/Service/Exception.php',
        'Google_Service_Resource' => __DIR__ . '/..' . '/google/apiclient/src/Google/Service/Resource.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit190dc99b7eace94e7e22d0e97df923b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit190dc99b7eace94e7e22d0e97df923b1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit190dc99b7eace94e7e22d0e97df923b1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit190dc99b7eace94e7e22d0e97df923b1::$classMap;

        }, null, ClassLoader::class);
    }
}