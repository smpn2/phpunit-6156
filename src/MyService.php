<?php

declare(strict_types=1);

namespace Nre\Phpunit6154;

class MyService
{
    public function get(int $id): string
    {
        return strval($id);
    }
}