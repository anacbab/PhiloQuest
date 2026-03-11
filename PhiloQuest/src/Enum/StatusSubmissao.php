<?php
namespace PhiloQuest\Enum;

enum StatusSubmissao {
    case AGUARDANDO_VALIDACAO;
    case APROVADO;
    case NECESSITA_REVISAO; // Corrigido erro de grafia
}