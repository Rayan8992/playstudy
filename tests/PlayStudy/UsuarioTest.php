<?php
use PHPUnit\Framework\TestCase;
use PlayStudy\Container;
use PlayStudy\Usuario;

class UsuarioTest extends TestCase {
    public function testUsuarioHasContainer() {
        $c = new Container('Nome', 123, 'a@a.com');
        $u = new Usuario($c);
        $this->assertInstanceOf(Container::class, $u->getContainer());
    }
}
