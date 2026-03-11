<?php
namespace PhiloQuest\Entidades;

class Professor extends Usuario {
    public function criarMissao(string $titulo, string $descricao): void {}
    public function validarEtapa(SubmissaoEtapa $submissao): void {}
}