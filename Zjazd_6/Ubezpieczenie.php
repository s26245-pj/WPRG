<?php
class Ubezpieczenie extends AutoZDodatkami {
    protected $procentUbezpieczenia;
    protected $liczbaLat;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentUbezpieczenia, $liczbaLat) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentUbezpieczenia = $procentUbezpieczenia;
        $this->liczbaLat = $liczbaLat;
    }

    public function ObliczCene(): float {
        $cenaZDodatkami = parent::ObliczCene();
        $cenaUbezpieczenia = $this->procentUbezpieczenia * ($cenaZDodatkami * ((100 - $this->liczbaLat) / 100));
        return $cenaUbezpieczenia;
    }
}