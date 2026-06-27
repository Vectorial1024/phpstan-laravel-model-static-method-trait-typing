<?php

namespace Tests\Unit;

use App\Models\TestModel;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testTheModel(): void
    {
        $value = TestModel::getByUuid('uuid');
        $this->assertNotNull($value);
    }
}
