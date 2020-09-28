<?php

namespace App\Tests\Algorithms\Php;

use App\Algorithms\Php\Cypher;
use App\Tests\BaseTestCase;

class CypherTest extends BaseTestCase
{
    private $cypher;

    public function setUp(): void
    {
        parent::setUp();

        $this->cypher = new Cypher();

    }

    public function testEncryptionChangesAllOccurrencesOfCharsToTheConcreteVersion(): void
    {
        $this->assertEquals($this->cypher->cypherString('Ricard'), 'R1c4rd');
        $this->assertEquals($this->cypher->cypherString('Javi'), 'J4v1');
        $this->assertEquals($this->cypher->cypherString('Brave soldiers who sacrificed their lives'), '8r4v3 60ld13r6 wh0 64cr1f1c3d th31r l1v36');
        $this->assertEquals($this->cypher->cypherString('Anna, Cris and Mavi'), '4nn4, Cr16 4nd M4v1');
        $this->assertEquals($this->cypher->cypherString('Holaluz is a great place to work'), 'H0l4luz 16 4 gr34t pl4c3 t0 w0rk');
        $this->assertEquals($this->cypher->cypherString('This exercise is a bit quirky!'), 'Th16 3x3rc163 16 4 81t qu1rky!');
        $this->assertEquals($this->cypher->cypherString('AEIOBSzzzzaeiobszzzz!'), '431086zzzz431086zzzz!');
    }
}