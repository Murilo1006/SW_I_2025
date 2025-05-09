<?php
    class Lampada{
        public $Fabricante;
        public $Tenso;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }
        public function Desligar(){
            $this->Status = False;
        }
        public function MostrarDados(){
            echo "FABRICANTE: ". $this->Fabricante. "<br>";
            echo "TENSO: ". $this->Tenso. "<br>";
            echo "POTENCIA: ". $this->Potencia. "<br>";
            echo "COR: ". $this->Cor. "<br>";
            if ($this->Status == 1){
                echo"STATUS DA LAMPADA: LIGADA <br>";
            }else{
                echo"STATUS DA LAMPADA: DESLIGADA <br>";
            }
        }
    }
?>