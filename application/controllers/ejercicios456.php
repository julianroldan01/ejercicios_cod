<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejercicios456 extends CI_Controller {
	
	public function index()
	{
		$this->load->view('viewejercicio4');
	}

	public function pares($numero = NULL){
      $numero = rand(1,100);
      echo ("<br>el numero es:  $numero");
      if ($numero%2==0){
         echo ("<br>el $numero es par");
         }
      else{
         echo ("<br>el $numero es impar");
         }
	}

public function menor($numero = NULL){

      $n1=rand();
      $n2=rand();
      $n3=rand();
      $n4=rand();
      $n5=rand();
      $n6=rand();
      $n7=rand();
      $n8=rand();
      $n9=rand();
      $n10=rand();
      
      $numeros = array("$n1", "$n2", "$n3", "$n4", "$n5", "$n6", "$n7", "$n8", "$n9", "$n10"); 
      rsort($numeros); 
      foreach ($numeros as $key => $val) { 
          echo "numero mayor a menor[" . $key . "] = " . $val . "<br><br>"; 
      }
      
      if ($n1/2 == 0){
         echo ("el numero: $n1 es par<br>");
      }
      else{
         echo ("el numero $n1 es impar<br>");
      }
      if ($n2/2 == 0){
         echo ("el numero:  $n2 es par<br>");
      }
      else{
         echo ("el numero $n2 es impar<br>");
      }
      if ($n3/2 == 0){
         echo ("el numero:  $n3 es par<br>");
      }
      else{
         echo ("el numero $n3 es impar<br>");
      }
      if ($n4/2 == 0){
         echo ("el numero:  $n4 es par<br>");
      }
      else{
         echo ("el numero $n4 es impar<br>");
      }
      if ($n5/2 == 0){
         echo ("el numero:  $n5 es par<br>");
      }
      else{
         echo ("el numero $n5 es impar<br>");
      }
      if ($n6/2 == 0){
         echo ("el numero:  $n6 es par<br>");
      }
      else{
         echo ("el numero $n6 es impar<br>");
      }
      if ($n7/2 == 0){
         echo ("el numero:  $n7 es par<br>");
      }
      else{
         echo ("el numero $n7 es impar<br>");
      }
      if ($n8/2 == 0){
         echo ("el numero:  $n8 es par<br>");
      }
      else{
         echo ("el numero $n8 es impar<br>");
      }
      if ($n9/2 == 0){
         echo ("el numero: $n9 es par<br>");
      }
      else{
         echo ("el numero $n9 es impar<br>");
      }
      if ($n10/2 == 0){
         echo ("el numero:  $n10 es par<br>");
      }
      else{
         echo ("el numero $n10 es impar<br>");
      }
   
	}

	public function estudiantes($numero = NULL){
      for ($i=0; $i < 26; $i++) { 
         echo ("$i,-") ;
      }
      
      
      
      
      $num1=$_POST['numero1'];
      $num2=$_POST['numero2'];
      $num3=$_POST['numero3'];
      $num4=$_POST['numero4'];
      $num5=$_POST['numero5'];
      $num6=$_POST['numero6'];
      $num7=$_POST['numero7'];
      $num8=$_POST['numero8'];
      $num9=$_POST['numero9'];
      $num10=$_POST['numero10'];
      $num11=$_POST['numero11'];
      $num12=$_POST['numero12'];
      $num13=$_POST['numero13'];
      $num14=$_POST['numero14'];
      $num15=$_POST['numero15'];
      $num16=$_POST['numero16'];
      $num17=$_POST['numero17'];
      $num18=$_POST['numero18'];
      $num19=$_POST['numero19'];
      $num20=$_POST['numero20'];
      $num21=$_POST['numero21'];
      $num22=$_POST['numero22'];
      $num23=$_POST['numero23'];
      $num24=$_POST['numero24'];
      $num25=$_POST['numero25'];
      
      $nombre=1;
      
      while ($nombre > 0) {
         if ($nombre >0) {
         $promedio=($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10+$num11+$num12+$num13
         +$num14+$num15+$num16+$num17+$num18+$num19+$num20+$num21+$num22+$num23+$num24+$num25)/25;
         echo("el promedio es:  $promedio");
         break;
         }
         else{
            echo("exitos");
         }
      }
   }
}

?>	
<a href="javascript: history.go(-1)">Volver</a>