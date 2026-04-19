<?php
/**
 * Tests for ChainMesh
 */

use PHPUnit\Framework\TestCase;
use Chainmesh\Chainmesh;

class ChainmeshTest extends TestCase {
    private Chainmesh $instance;

    protected function setUp(): void {
        $this->instance = new Chainmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
