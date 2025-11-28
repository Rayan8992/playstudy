<?php
use PHPUnit\Framework\TestCase;
use PlayStudy\Container;
use PlayStudy\PlayStudy;

class PlayStudyTest extends TestCase {
    public function testSolicitarTesteReturnsBool() {
        $c = new Container();
        $p = new PlayStudy($c);
        $this->assertIsBool($p->solicitarTeste());
    }
    public function test_adiciona_assert_simples()
{
    $this->assertTrue(true);
}

}
