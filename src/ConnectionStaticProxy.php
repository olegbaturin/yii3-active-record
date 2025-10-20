<?php

declare(strict_types=1);

namespace Yiisoft\ActiveRecord;

use InvalidArgumentException;
use Yiisoft\Db\Connection\ConnectionInterface;

final class ConnectionStaticProxy
{
    private static ConnectionInterface $connection;

    public static function get(): ConnectionInterface
    {
        return self::$connection ?? throw new InvalidArgumentException('Connection in not set.');
    }

    public static function set(ConnectionInterface $connection): void
    {
        self::$connection = $connection;
    }
}
