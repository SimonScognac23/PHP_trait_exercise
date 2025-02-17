<?php

trait Calculator {

    public function sum($a, $b) {  // somma
        return $a + $b;
    }



    public function sub($a, $b) {  // sottrazione
        return $a - $b;
    }




    public function mul($a, $b) {  // moltiplicazione
        return $a * $b;
    }




    public function div($a, $b) {  // divisione
        return $a / $b;
    }



    public function sqr($a) {
        return sqrt($a);  // radice quadrata
    }



    // Metodo per calcolare l'area del rettangolo
    public function areaRettangolo($base, $altezza) {
        return $this->mul($base, $altezza);
    }



    // Metodo per calcolare il perimetro del rettangolo
    public function perimetroRettangolo($base, $altezza) {
        return $this->sum($this->mul(2, $base), $this->mul(2, $altezza));
    }



    // Metodo per calcolare la diagonale del rettangolo
    public function diagonaleRettangolo($base, $altezza) {
        return $this->sqr($this->sum($this->mul($base, $base), $this->mul($altezza, $altezza)));
    }

}








class Rettangolo {

    use Calculator;  // Implemento il trait nella classe Rettangolo

    private $base;
    private $altezza;

    public function __construct(int $_base, int $_altezza) {
        $this->base = $_base;
        $this->altezza = $_altezza;
    }

    public function getArea() {
        return $this->areaRettangolo($this->base, $this->altezza);
    }


    public function getPerimetro() {
        return $this->perimetroRettangolo($this->base, $this->altezza);
    }
    

    public function getDiagonale() {
        return $this->diagonaleRettangolo($this->base, $this->altezza);
    }
}








$rettangolo = new Rettangolo(344, 33);

echo $rettangolo->getArea() . "\n";  // Area  da qui richiamo getArea che all'interno c'è il metodo areaRettangolo che è un metodo del trait e all'interno ci sara il metodo per calcolare l'area
echo $rettangolo->getPerimetro() . "\n";  // Perimetro
echo $rettangolo->getDiagonale() . "\n";  // Diagonale


?>
















