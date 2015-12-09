<?php

namespace Cache\Doctrine\Tests;

use Cache\Doctrine\CachePool;
use Cache\IntegrationTests\TaggableCachePoolTest;
use Doctrine\Common\Cache\ArrayCache;

class FunctionaTaglTest extends TaggableCachePoolTest
{
    function createCachePool()
    {
        $doctrineCache = new ArrayCache();

        return new CachePool($doctrineCache);
    }
}