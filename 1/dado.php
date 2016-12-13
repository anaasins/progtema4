<?php
/**
 * Clase de dado creada por Ana Asins
 */
class jugadorDado
{
  //atributos
  private $minNumDado=0;
  private $maxNumDado=12;


//setters
  public function setminNumDado($minNumDado){
    $this->minNumDado=$minNumDado;
  }

  public function setmaxNumDado($maxNumDado){
    $this->maxNumDado=$maxNumDado;
  }

  //getters
  public function getminNumDado(){
    return $this->minNumDado;
  }
  public function getmaxNumDado(){
    return $this->maxNumDado;
  }

  //funcion tirar dado
  public function tirarDado($minNumDado, $maxNumDado){
    $tirarDado=rand($this->minNumDado, $this->maxNumDado);
    echo $tirarDado;
  }


}

 ?>
