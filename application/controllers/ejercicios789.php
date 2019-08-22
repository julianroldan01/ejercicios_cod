<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejercicios789 extends CI_Controller {
	
	public function index()
	{
		$this->load->view('viewejercicio7');
	}

	public function arreglo($numero = NULL){
      $num1=$_POST['numero1'];
      $num2=$_POST['numero2'];
      $num3=$_POST['numero3'];
      $num4=$_POST['numero4'];
      $num5=$_POST['numero5'];
      $num6=$_POST['numero6'];
      $num7=$_POST['numero7'];
      $num8=$_POST['numero8'];

      $arreglo= array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8);
      echo "la suma es: " . array_sum($arreglo);
   }
    public function array($numero = NULL){
        $numero=rand(1, 20);
        $con_pares = 0;
        $con_impara = 0;


        $acu_par = 0;
        $acu_impar = 0;
        for ($i=1; $i <=$numero ; $i++) {
            $numero2=rand(1, 20);
            $array[$i]=$numero2;
            echo $array[$i],"<br>";
            if ($array[$i]%2 == 0) {
                $con_pares++;
                $acu_impar = $acu_impar + $array[$i];
            } else {
                $con_impara++;
                $acu_par = $acu_par + $array[$i];
            }
        }
        
        echo "Total numero pares", $con_pares, "<br>";
        echo "Total suma numero pares $acu_par <br>";
        echo "Total numero impar $con_impara <br>";
        echo "Total suma numero impar $acu_impar <br>";
	}
}
