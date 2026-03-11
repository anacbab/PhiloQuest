<?php
namespace PhiloQuest\Entidades;

use DateTime;

class Missao {
    private string $titulo;
    private string $descricao;
    private int $xp_recompensa;
    private DateTime $data_limite;
    private Professor $criador;

    public function __construct(string $titulo, string $descricao, int $xp_recompensa, DateTime $data_limite, Professor $criador) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->xp_recompensa = $xp_recompensa;
        $this->data_limite = $data_limite;
        $this->criador = $criador;
    }
}