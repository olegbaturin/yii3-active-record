<?php

declare(strict_types=1);

namespace Yiisoft\ActiveRecord\Trait;

use Yiisoft\ActiveRecord\AbstractActiveRecord;
use Yiisoft\ActiveRecord\ConnectionStaticProxy;
use Yiisoft\Db\Connection\ConnectionInterface;

/**
 * Trait to implement a custom connection name for ActiveRecord.
 *
 * @see AbstractActiveRecord::db()
 */
trait ConnectionProviderTrait
{
    public function db(): ConnectionInterface
    {
        return ConnectionStaticProxy::get();
    }
}
