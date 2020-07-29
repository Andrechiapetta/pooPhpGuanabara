<?php

class Caneta {
    private $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct() {
        $this->cor = "Azul";
        $this->tampar();
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p) {
        return $this->ponta = $p;
    }

    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!<p>";
        } else {
            echo "<p>Estou rabiscanso.....<p>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}