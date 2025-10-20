<?php

declare(strict_types=1);

namespace Yiisoft\ActiveRecord;

use Yiisoft\Db\Connection\ConnectionInterface;
use Yiisoft\Db\Connection\ConnectionProviderInterface;

final class ConnectionProviderStaticProxy
{
    private static ConnectionProviderInterface $provider;

    public static function get(string|int|null $name = null): ConnectionInterface
    {
        return self::$provider?->get($name)
                ?? throw new InvalidArgumentException("ConnectionProvider is not set or connection with name `$name` does not exist.");
    }

    public static function setProvider(ConnectionProviderInterface $provider): void
    {
        self::$provider = $provider;
    }
}
