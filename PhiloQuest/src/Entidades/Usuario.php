<?php
namespace PhiloQuest\Entidades;

abstract class Usuario {
    protected string $matricula;
    protected string $nome;
    protected string $senha_hash;

    public function login(string $matricula, string $senha): void {}
    public function logout(): void {}
    public function atualizarPerfil(): void {}
}