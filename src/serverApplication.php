<?php
  class Imc {
    private function getImc($weigth, $height)
    {
      return number_format($weigth / pow($height,2), 2);
    }

    public function getClassificationIMC($weigth, $height)
    {
      $imc = $this->getImc($weigth, $height);

      if ($imc < 18.5) {
        return $this->getMessage($imc, "abaixo do peso");
      }

      if ($imc >= 18.5  and $imc <= 24.9) {
        return $this->getMessage($imc, "com o peso normal");
      }

      if ($imc >= 25 and $imc <= 29.9 ) {
        return $this->getMessage($imc, "com sobre peso");
      }

      if ($imc >= 30) {
        return $this->getMessage($imc, "com obesidade");
      }
    } 

    private function getMessage($imcValue, $imcClassification){
      return "Seu imc é $imcValue, e você está $imcClassification";
    }
  }
?>