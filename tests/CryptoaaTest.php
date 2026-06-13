<?php
/**
 * Tests for CryptoAA
 */

use PHPUnit\Framework\TestCase;
use Cryptoaa\Cryptoaa;

class CryptoaaTest extends TestCase {
    private Cryptoaa $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoaa(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoaa::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
