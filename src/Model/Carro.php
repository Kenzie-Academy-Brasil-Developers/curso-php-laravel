<?php

require_once 'Veiculo.php';


class Carro extends Veiculo {
    private array $marca;

    public function __construct(
        string $modelo,
        string $cor,
        int $ano
    ) {
        parent::__construct(
            $modelo,
            $cor,
            $ano
        );

        $this->marca = [
            'Hb20' => 'Hyundai',
            'Civic' => 'Honda',
            'X1' => 'BMW'
        ];
    }

    // get
    public function obterCor() {
        return $this->cor;
    }

    public function obterAno() {
        return $this->ano;
    }

    // set
    public function alterarCor(string $cor) {
        $this->cor = $cor;
    }

    public function obterIdadeDoCarro() {
        $date = new DateTime('now');
        // 2023-06-22
        return $date->format('Y') - $this->ano;
    }

    public function obterMarca() {
        return $this->marca[$this->modelo];
    }
}

// método construtor