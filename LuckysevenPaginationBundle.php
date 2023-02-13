<?php

namespace Luckyseven\Bundle\LuckysevenPaginationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LuckysevenPaginationBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
