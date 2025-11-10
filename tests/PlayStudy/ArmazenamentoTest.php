<?php
use PHPUnit\Framework\TestCase;
use PlayStudy\Armazenamento;

class ArmazenamentoTest extends TestCase {
    public function testSalvarELer() {
        $a = new Armazenamento();
        $a->salvar('chave', 123);
        $this->assertEquals(123, $a->ler('chave'));
    }
}
