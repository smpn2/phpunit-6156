<?php

declare(strict_types=1);

namespace Nre\Phpunit6154\test;

use Nre\Phpunit6154\MyService;
use PHPUnit\Framework\TestCase;

class MyServiceTest extends TestCase
{
    public function testMockGet(): void
    {
        $mockedService = $this->createMock(MyService::class);

        $mockedService
            ->expects($this->exactly(1))
            ->method('get')
            ->with(24)
            ->willReturn('24');

        $this->assertSame('24', $mockedService->get(24));
    }
}
