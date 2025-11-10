<?php
namespace PlayStudy;

class Container {
    private string $nome;
    private int $numeroDeTelefone;
    private string $email;

    public function __construct(string $nome = '', int $numeroDeTelefone = 0, string $email = '') {
        $this->nome = $nome;
        $this->numeroDeTelefone = $numeroDeTelefone;
        $this->email = $email;
    }

    public function getNome(): string { return $this->nome; }
    public function setNome(string $n): void { $this->nome = $n; }

    public function getNumeroDeTelefone(): int { return $this->numeroDeTelefone; }
    public function setNumeroDeTelefone(int $num): void { $this->numeroDeTelefone = $num; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $e): void { $this->email = $e; }

    public function cadastrar(): void {}
    public function realizarTesteAvaliatio(): bool { return true; }
    public function estudar(): void {}
    public function mostrarVideosRecomendados(): void {}
    public function disponibilizarTesteAvaliativo(): void {}
}
