<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 2;
    }

    public static function getComponentName(): string
    {
        return 'Ubiquity';
    }

    public static function getComponentSlug(): string
    {
        return 'ubiquity';
    }

    public static function isPhp56Enabled(): bool
    {
        return false;
    }

    public static function isPhp70Enabled(): bool
    {
        return false;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'index.php?c=benchmark/rest';
    }

    public static function getCoreDependencyName(): string
    {
        return 'phpmv/ubiquity';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 2;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 1;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 2;
    }

    public static function getBenchmarkType(): int
    {
        return 3;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/controllers/rest/RestApiController.php#L17',
            'controller' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/controllers/rest/RestApiController.php',
            'randomizeLanguageDispatchEvent' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/controllers/rest/RestApiController.php#L30',
            'randomizeLanguageEventListener' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/eventListener/DefineLocaleEventListener.php',
            'translations' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/translations/en_GB/phpbenchmarks.php',
            'translate' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/normalizer/UserNormalizer.php#L30',
            'serialize' => 'https://github.com/phpbenchmarks/ubiquity-common/blob/2.3.0/normalizer/UserNormalizer.php'
        ];
    }
}