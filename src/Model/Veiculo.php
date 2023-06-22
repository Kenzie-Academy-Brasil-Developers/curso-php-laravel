<?php

abstract class Veiculo {
    public function __construct(
        protected string $modelo,
        protected string $cor,
        protected int $ano
    ) {
    }

    abstract public function obterIdadeDoCarro();
    abstract public function obterMarca();
    abstract public function obterCor();
    abstract public function alterarCor(string $cor);
    abstract public function obterAno();
}