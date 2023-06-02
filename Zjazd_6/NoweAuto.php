<?php
class NoweAuto {
    protected String $model;
    protected float $cenaEuro;
    protected float $kursEuroPLN;

    public function __construct($model, $cenaEuro, $kursEuroPLN) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function ObliczCene(): float
    {
        return $this->cenaEuro * $this->kursEuroPLN;
    }
}
