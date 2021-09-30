<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'reservaja';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.0@9f3e3f3cc5399604c0325d5ffa92609d694d950d',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => '2.8.1@242cf1a33df1b8bc5e1b86c3ebd01db07851c833',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'fig/http-message-util' => '1.1.5@9d94dc0154230ac39e5bf89398b324a86f63f765',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'laminas/laminas-diactoros' => '2.3.1@2ffc7cc816f6207b27923ee15edf6fac668390aa',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nyholm/psr7' => '1.3.0@c17f4f73985f62054a331cbc4ffdf9868c4ef256',
  'nyholm/psr7-server' => '1.0.0@862529918766fb3825116d39e96feabf1e4bee4e',
  'olivers/twig-number-abbreviation-extension' => 'v1.0.0@418891979163278f63dc1c79ae65ea1efacae53d',
  'opis/closure' => '3.6.1@943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
  'php-di/invoker' => '2.2.0@e08a7c87068daeaeef464b95d81643ea530bc535',
  'php-di/php-di' => '6.2.1@6875fe557c244b3830862c072c7719ca4ac2efe4',
  'php-di/phpdoc-reader' => '2.2.1@66daff34cbd2627740ffec9469ffbac9f8c8185c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'respect/stringifier' => '0.2.0@e55af3c8aeaeaa2abb5fa47a58a8e9688cc23b59',
  'respect/validation' => '2.0.17@314aa36e37dd3812b7d80c7bda3e83da5ee22d11',
  'slim/csrf' => '1.0.0@827c915a4cc93f1749f5a2556c33f3c86917a9ea',
  'slim/extras' => '2.0.3@a022ed23dae94e164000acd891e3394d903f9623',
  'slim/flash' => '0.4.0@9aaff5fded3b54f4e519ec3d4ac74d3d1f2cbbbc',
  'slim/http' => '1.0.0@c2e67ac1680207aa7863fd4721530b01f3436b2e',
  'slim/php-view' => '3.0.0@ea848c71870788a6df819a6f151ea246e005cdab',
  'slim/psr7' => '1.1.0@3c76899e707910779f13d7af95fde12310b0a5ae',
  'slim/slim' => '4.7.1@0905e0775f8c1cfb3bbcfabeb6588dcfd8b82d3f',
  'slim/twig-view' => '3.2.0@9ceaff0764ab8e70f9eeee825a9efd0b4e1dfc85',
  'symfony/console' => 'v4.4.18@12e071278e396cc3e1c149857337e9e192deca0b',
  'symfony/debug' => 'v4.4.18@5dfc7825f3bfe9bb74b23d8b8ce0e0894e32b544',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/error-handler' => 'v4.4.18@ef2f7ddd3b9177bbf8ff2ecd8d0e970ed48da0c3',
  'symfony/event-dispatcher' => 'v4.4.18@5d4c874b0eb1c32d40328a09dbc37307a5a910b0',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/finder' => 'v5.2.1@0b9231a5922fd7287ba5b411893c0ecd2733e5ba',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.1@a1f6218b29897ab52acba58cfa905b83625bef8d',
  'symfony/http-kernel' => 'v4.4.18@eaff9a43e74513508867ecfa66ef94fbb96ab128',
  'symfony/intl' => 'v5.2.1@53927f98c9201fe5db3cfc4d574b1f4039020297',
  'symfony/polyfill-ctype' => 'v1.22.0@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-icu' => 'v1.22.0@b2b1e732a6c039f1a3ea3414b3379a2433e183d6',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/property-access' => 'v5.2.1@243dcdda2f276cb31efa31a015d0fdb5076931ce',
  'symfony/property-info' => 'v5.2.1@f65694a05eb7742c5f2951f20676de367ffaaaea',
  'symfony/security' => '4.4.x-dev@03044f9f38f5737125e6b754f66277cc36e96418',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.2.1@5bd67751d2e3f7d6f770c9154b8fbcb2aa05f7ed',
  'symfony/var-dumper' => 'v5.2.1@13e7e882eaa55863faa7c4ad7c60f12f1a8b5089',
  'symfony/yaml' => 'v5.2.1@290ea5e03b8cf9b42c783163123f54441fb06939',
  'tuupola/callable-handler' => '1.1.0@0bc7b88630ca753de9aba8f411046856f5ca6f8c',
  'tuupola/http-factory' => '1.3.0@aa48841a9f572b9cebe9d3ac5d5d3362a83f57ac',
  'tuupola/slim-jwt-auth' => '3.5.0@af232b3f8fad5ab3ec89599e5d50fb6dcf1baad7',
  'twig/intl-extra' => 'v3.2.1@919e8f945c30bd3efeb6a4d79722cda538116658',
  'twig/twig' => 'v3.2.1@f795ca686d38530045859b0350b5352f7d63447d',
  'twilio/sdk' => '5.30.2@e54f54597849344edd40f86e12b17c1ac815e65b',
  'zircote/swagger-php' => '3.0.4@fa47d62c22c95272625624fbf8109fa46ffac43b',
  'reservaja' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
