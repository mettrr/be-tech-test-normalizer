<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function assert_true_is_true()
    {
        $this->assertEquals(true, true);
    }
}
