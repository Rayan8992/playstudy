<?php
namespace PlayStudy;

class Usuario {
    private Container $container;
    public function __construct(Container $container) { $this->container = $container; }
    public function getContainer(): Container { return $this->container; }
    public function realizarCadastro(): void { $this->container->cadastrar(); }
}
