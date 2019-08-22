<?php

class ejercicios123 extends CI_Controller {
	
	public function index()
	{
		$this->load->view('viewejercicios');
	}

	public function mayor($numero = NULL){
            $n1=rand(1,10);
      echo $n1 ;
      echo ("--");
      $n2=rand(1,10);
      echo $n2 ;
      echo ("--");
      if ($n1>$n2){
         echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
      }
      elseif ($n1==$n2){
         echo "El primer número (".$n1.") es igual al segundo (".$n2.")";
      }
      else{
         echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
      }
            if ($n2>$n1){
               echo "El segundo número (".$n2.") es mayor que el primero (".$n1.")";
         }
         elseif ($n2==$n1){
               echo "El segundo número (".$n2.") es igual al primero (".$n1.")";
         }
         else{
               echo "El segundo número (".$n2.") es menor que el primero (".$n1.")";
         }
         }
         
         public function mes($numero = NULL){
            $numero=$_POST['Numero'];

            switch($numero)
            {
               default:
                  if ($numero < 30) {
                     echo ("estamos en el dia: $numero del mes de septiembre");
                  }
                  else{
                     echo ("se pasa de los limites correspondidos de los dias del mes");
                  }
            }
         }

   public function hola($numero = NULL){
            
      $n1=rand(-100,100);
      $n2=rand(-100,100);
      $n3=rand(-100,100);

      echo ("el primer numero es: $n1");
      echo ("<br>el segundo numero es: $n2");
      echo ("<br>el tercer numero es: $n3");

      if ($n1 > 50){
         echo("<br>el numero 1 es mayor que 50 ----- ");
      }
      else if ($n1< 20 ){
      echo("<br>el numero 1 es menor que 20 ------ ");
      }
      else if ($n1 < 0){
         echo("<br>el numero 1 es negativo ----- ");
      }

      if ($n2 > 50){
         echo("<br>el numero 2 es mayor que 50 ------ ");
      }
      else if ($n2 < 20 ){
      echo("<br>el numero 2 es menor que 20 ------ ");
      }
      else if ($n2 < 0){
         echo("<br>el numero 2 es negativo ----- ");
      }
      if ($n3 > 50){
         echo("<br>el numero 3 es mayor que 50 ------ ");
      }
      else if ($n3 < 20 ){
      echo("<br>el numero 3 es menor que 20 ----- ");
      }
      else if ($n3 < 0 ){
         echo("<br>el numero 3 es negativo ------ ");
      }
 

   }
}


?>
<a href="javascript: history.go(-1)">Volver</a>