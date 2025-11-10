<?php
namespace PlayStudy;

class PlayStudy {
    private Container $container;
    public function __construct(Container $container) { $this->container = $container; }
    public function iniciarAula(): void {}
    public function solicitarTeste(): bool { return $this->container->realizarTesteAvaliatio(); }
}
