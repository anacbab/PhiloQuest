<?php
namespace PhiloQuest\Entidades;

use PhiloQuest\Enum\StatusSubmissao;
use DateTime;

class SubmissaoEtapa {
    private Aluno $aluno;
    private string $conteudo;
    private StatusSubmissao $status;
    private DateTime $data_envio;

    public function __construct(Aluno $aluno, string $conteudo) {
        $this->aluno = $aluno;
        $this->conteudo = $conteudo;
        $this->status = StatusSubmissao::AGUARDANDO_VALIDACAO;
        $this->data_envio = new DateTime();
    }
}