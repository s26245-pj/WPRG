<?php
class AutoZDodatkami extends NoweAuto {
    protected $alarm;
    protected $radio;
    protected $klimatyzacja;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene(): float {
        $cenaSamochodu = parent::ObliczCene();
        $cenaZDodatkami = $cenaSamochodu + $this->alarm + $this->radio + $this->klimatyzacja;
        return $cenaZDodatkami;
    }
}