<?php

declare(strict_types=1);

namespace PeibinLaravel\CodeParser;

use Jean85\PrettyVersions;
use Throwable;

class Package
{
    public static function getPrettyVersion(string $package): string
    {
        try {
            return (string)PrettyVersions::getVersion($package);
        } catch (Throwable $exception) {
            return 'unknown';
        }
    }
}
