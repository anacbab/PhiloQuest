<?php
namespace PhiloQuest\Entidades;

abstract class Usuario {
    protected string $matricula; // protected permite que o Aluno acesse
    protected string $nome;
    protected string $senha_hash;

    // Métodos comuns a todos os usuários podem vir aqui
    public function getNome(): string { return $this->nome; }
    public function getMatricula(): string { return $this->matricula; }
}