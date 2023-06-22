<?php

require_once 'Carro.php';

class Caminhao extends Carro {
    public function __construct(
        string $modelo,
        string $cor,
        int $ano,
        private int $tamanhoBau
    ) {
        parent::__construct(
            $modelo,
            $cor,
            $ano
        );
    }

    public function obterTamanhoBau() {
        return $this->tamanhoBau;
    }

    public function obterMarca() {
        return 'Caminhão';
    }
}

// método construtor