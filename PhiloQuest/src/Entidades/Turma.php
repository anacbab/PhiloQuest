<?php
namespace PhiloQuest\Entidades;

class Turma {
    private string $nome_turma;
    private string $codigo_turma;
    private Professor $professor;
    private array $alunos = [];

    public function __construct(string $nome_turma, string $codigo_turma, Professor $professor) {
        $this->nome_turma = $nome_turma;
        $this->codigo_turma = $codigo_turma;
        $this->professor = $professor;
    }

    public function adicionarAluno(Aluno $aluno): void {
        $this->alunos[] = $aluno;
    }
}