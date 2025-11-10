<?php
namespace PlayStudy;

class Armazenamento {
    private array $dados = [];
    public function salvar(string $chave, $valor): void { $this->dados[$chave] = $valor; }
    public function ler(string $chave) { return $this->dados[$chave] ?? null; }
}
