<?php
use PHPUnit\Framework\TestCase;
use PlayStudy\Container;

class ContainerTest extends TestCase {
    public function testNomeSetterGetter() {
        $c = new Container();
        $c->setNome('Rayan');
        $this->assertEquals('Rayan', $c->getNome());
    }
    public function test_adiciona_assert_simples()
{
    $this->assertTrue(true);
}
}
