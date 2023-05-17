<?php

declare(strict_types=1);

namespace PeibinLaravel\CodeParser;

use PhpDocReader\PhpDocReader;

class PhpDocReaderManager
{
    protected static ?PhpDocReader $instance = null;

    public static function getInstance(): PhpDocReader
    {
        if (static::$instance) {
            return static::$instance;
        }
        return static::$instance = new PhpDocReader();
    }
}
