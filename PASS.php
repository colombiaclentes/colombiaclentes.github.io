<html><head>
  <title>Bancolombia Sucursal Virtual Personas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta charset="ISO-8859-1">
  <meta content="es" http-equiv="Content-Language">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Todo1">
  <meta name="author" content="Todo1 Services">
  <meta name="Copyright" content="(c) 2014  Todo1 Services. All rights reserved.">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <link href="styles/styles.css" media="all" rel="stylesheet" type="text/css">
  <link href="https://sucursalpersonas.transaccionesbancolombia.com/mua/css/bootstrap.css" media="all" rel="stylesheet" type="text/css">  
  <link href="https://sucursalpersonas.transaccionesbancolombia.com/mua/css/keyboard_util.css?v=3.0.5.RC4_1592698732886" rel="stylesheet" type="text/css">
   
  <!--[if lt IE 8]>
    <link href="/mua/css/bootstrap-ie7.css" rel="stylesheet">
<![endif]-->

      <!--[if lt IE 9]>
      <script src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/html5shiv.js"></script>
      <script src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/respond.min.js"></script>
   <![endif]-->

	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/patterns/jquery.validate-1.11.1.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/patterns/validations.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/patterns/jquery-validations.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/patterns/blockKeys.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/jquery-ui.js"></script>
	<script type="text/javascript" src="jquery.js"></script>









	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/bluebird.min.js"></script>











	


<script type="text/javascript">
'use strict';
var loadScripts = null;

try {
	loadScripts = new Promise(
	function(resolve, reject) {
		var TCLIIDVK = "iJQAFiY1HS9Vdn1w9l%2BCe7xhuv8%3D";
		var TSESIDVK = "cc4d8e32-3c17-48c2-a97f-fed340350858";

		var _0x22219 = ['https://cdn.todo1.com/js/cDZQdujDp2/t1analytics.js?v=3.0.5.RC4_1592698732886'];
		var _0x34345 = [
				'text/javascript', 'src', 'appendChild', 'anydata', 'length',
				'split', 'getElementsByTagName', 'head', 'createElement', 'script',
				'type' ];
		(function(_0x34346, _0x34347) {
			var _0x34349 = function(_0x34348) {
				while (--_0x34348) {
					_0x34346['push'](_0x34346['shift']());
				}
			};
			_0x34349(++_0x34347);
		}(_0x34345, 0x116));
		var _0x201922 = function(_0x20192c, _0x20192d) {
			_0x20192c = _0x20192c - 0x0;
			var _0x20192f = _0x34345[_0x20192c];
			return _0x20192f;
		};
		for (var _0x3c886f = [ _0x201922('0x0') ], _0x24a388 = 0x0; _0x24a388 < _0x3c886f[_0x201922('0x1')]; _0x24a388++) {
			var _0x83c3d2 = document[_0x201922('0x3')](_0x201922('0x4'))[0x0];
			for (var _0x222020 = 0; _0x222020 < _0x22219[_0x201922('0x1')]; _0x222020++) {
				var _0x4303f4 = _0x22219[_0x222020][_0x201922('0x2')]('/'), _0x56835c = document[_0x201922('0x5')]
					(_0x201922('0x6'));
				_0x56835c['id'] = _0x4303f4[_0x4303f4[_0x201922('0x1')] - 0x2];
				_0x56835c[_0x201922('0x7')] = _0x201922('0x8');
				_0x56835c[_0x201922('0x9')] = _0x22219[_0x222020];
				_0x83c3d2[_0x201922('0xa')](_0x56835c);
			}
		};
		resolve("loaded");
	});
}catch(err){
	console.log("error in loading ant-libs");
	loadScripts = null;
}

		
function collect() {
	try{
		var dataPti;
		loadScripts.then(function(dataPti) {
			if((typeof MPFingerprintV2 === 'undefined') || (MPFingerprintV2 === null)){
				setDevicePrintValue('');
			}else {
				var instancia = MPFingerprintV2.getData();
				instancia.then(function(_data) {
					try{
						dataPti = _data;
						var devprint = urlEncode(JSON.stringify(devicePrint(dataPti)));
						setDevicePrintValue(devprint);
					}catch(err1){
						setDevicePrintValue('');
					}
				});
			}
		});
	}catch(err){
		setDevicePrintValue('');
	}
};

function setDevicePrintValue(valueDP){
	document.forms[0].deviceprint.value = valueDP;
}

function post_fingerprints(a) {
	try{
		var dataPti;
		loadScripts.then(function(dataPti) {
			if((typeof MPFingerprintV2 === 'undefined') || (MPFingerprintV2 === null)){
				setDevicePrintValuePostFinger(a, '');
			}else {
				var instancia = MPFingerprintV2.getData();
				instancia.then(function(_data) {
					try{
						dataPti = _data;
						var devprint = encodeURIComponent(JSON.stringify(devicePrint(dataPti)));
						setDevicePrintValuePostFinger(a, devprint);
					}catch(err2){
						setDevicePrintValuePostFinger(a, '');
					}
				});
			}
		});
	}catch(err){
		setDevicePrintValuePostFinger(a, '');
	}
};

function setDevicePrintValuePostFinger(a, valueDP){
	a.deviceprint.value = valueDP;
}

function urlEncode(c){var d=encodeURIComponent(c).replace(/\~/g,"%7E").replace(/\!/g,"%21").replace(/\*/g,"%2A").replace(/\(/g,"%28").replace(/\)/g,"%29").replace(/\'/g,"%27").replace(/\-/g,"%2D").replace(/\_/g,"%5F").replace(/\./g,"%2E");
return d
};
</script><script id="cDZQdujDp2" type="text/javascript" src="https://cdn.todo1.com/js/cDZQdujDp2/t1analytics.js?v=3.0.5.RC4_1592698732886"></script>



	
		<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer',"GTM-KFWRD89");</script>
	

	<link href="/mua/css/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="/mua/css/ui.css" media="all" rel="stylesheet" type="text/css">
   

   

	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyEncript/jsbn2.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyEncript/prng4.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyEncript/rng.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyEncript/base64.js"></script>
	<script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyEncript/rsa-t1.js"></script><script id="IZMVl8G0kJ" type="text/javascript" src="https://cdn.todo1.com/js/IZMVl8G0kJ/fpd2.js"></script><script id="TliQwvoLFF" type="text/javascript" src="https://cdn.todo1.com/js/TliQwvoLFF/td1json.js"></script><script id="cDZQdujDp2" type="text/javascript" src="https://cdn.todo1.com/js/cDZQdujDp2/bt1pre.js"></script>
	<script language="JavaScript">
	var t1Assertion="ovex5FoF2uFZB3l21gpF";
	function processPassword(password){var rsa = new RSAKey();rsa.setPublic("A6CA1BB4BD803E5704A071E8F7370FD68F2A42CAB574A765693F0F54796CB8AD2CF1B624005119FE651227F7992FF6A6D1979C9B72EA0EAD789F1CBADAB9851779CB8F5F82F40BC71C5C303A10298ED6DC5657E3401AE5720F06836F098366441AC30AB35F13FAB8B6CE81955A1181FCA0AD4EA471CC09C51EAE8EDA42E8C615F933483449CBC67883F407430CB856E4EEC1919BFDD38850CCF5837EC67D8CF802EC30836099592FCDB6CEF4D4AB8EC7F95229B6B262DC6F9A62BFD082CCF98D8FC73FADFA2CCBDDBD17126206E0EC41FE85ECDB9B7631A7EDEF193E4971ADA3E4AB3FFE05F5146907255AD29D0AFB91160C95E225514E1CD07E35BA157A44D1", "10001");var res2 = rsa.encrypt(password + "|" + t1Assertion);return hex2b64(res2);}  
	</script>

   
<script language="javascript">
$(document).ready(function() {	
function obtenerError(message){
	return "<script>document.getElementById('summary').innerHTML='"+message+"'; document.getElementById('tabError').style.display='';</"+"script>";
}
var validator = $("#loginUserForm").bind("invalid-form.validate", function() {		
}).validate({
onsubmit: false,
onkeyup: false,
onclick: false,
onfocusout: false,
rules: {
errorContainer: $("#summary"),
password:{
required:true,
"passwordLength":true
}
},
messages: {
password: {
required:       obtenerError('Por favor ingrese su clave'),
passwordLength: obtenerError('La clave no cumple con los requerimientos m&iacute;nimos de seguridad, por favor intente nuevamente.')
}
}
});
});
function reloadValidate(contError) {	
$("#contentError").html(contError);
}
</script>
   <script type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/bootstrap.js"></script>

	<script language="JavaScript" type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/AC_OETags.js"></script>
	
	<script language="JavaScript" type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyboard/keyboard.js?v=3.0.5.RC4_1592698732886"></script>
	<script language="JavaScript" type="text/javascript" src="https://sucursalpersonas.transaccionesbancolombia.com/mua/js/keyboard/layer_lib_util.js?v=3.0.5.RC4_1592698732886"></script>
	
	



<script language="JavaScript">
function addEventsButton(id_button){
var IE = navigator.appName=="Microsoft Internet Explorer";
if( navigator.userAgent.match( /iPad/i ) ) {
document.getElementById(id_button).addEventListener('touchstart', function(){recoveryPassword();xpKzVeg_khXl();document.authenticationForm.userId.value = '0';  return ILHaqxdCVVUS();}, false);
}
else if(IE){
document.getElementById(id_button).attachEvent('onclick', function(){recoveryPassword(); qFNioTIWKzWh(); document.authenticationForm.userId.value = '0';  return ILHaqxdCVVUS();});
document.getElementById(id_button).attachEvent('onmouseover', function(){xpKzVeg_khXl();});
document.getElementById(id_button).attachEvent('onmouseout', function(){jk_OpoVxBBtj();});
}else{
document.getElementById(id_button).addEventListener('click', function(){recoveryPassword(); qFNioTIWKzWh(); document.authenticationForm.userId.value = '0';  return ILHaqxdCVVUS();}, false);
document.getElementById(id_button).addEventListener('mouseover', function(){xpKzVeg_khXl();}, false);
document.getElementById(id_button).addEventListener('mouseout', function(){jk_OpoVxBBtj();}, false);
}
}
function clearByError(){
if(document.forms[0].userId.value == '' || isEmpty(passwordMinLength[0]) || (passwordMinLength[0] < DEF_MAXLENGTH - 1)){
clearKeys();
document.forms[0].password.value='';
}
}

function validateAndClear(){
var validate = ILHaqxdCVVUS();
if (isNaN(validate) || validate == null || validate == false){
if( navigator.userAgent.match( /iPad/i ) ) {
clearByErrorIpad();
} else {
clearByError();
}
return false;	
}
return true;
}

function clearByErrorIpad(){
document.forms[0].userId.value='';
document.forms[0].password.value='';
document.forms[0].tempUserID.value='';
return true;
}
function addEventsButtonSinCero(id_button){
var IE = navigator.appName=="Microsoft Internet Explorer";
if( navigator.userAgent.match( /iPad/i ) ) {
document.getElementById(id_button).addEventListener('touchstart', function(){recoveryPassword(); xpKzVeg_khXl(); if(validateAndClear()){validateForm();}}, false);
}
else if(IE){

document.getElementById(id_button).attachEvent('onmouseover', function(){qFNioTIWKzWh();});
document.getElementById(id_button).attachEvent('onmouseout', function(){changeToOrigKeyboard();});
}else{

document.getElementById(id_button).addEventListener('mouseover', function(){qFNioTIWKzWh();}, false);
document.getElementById(id_button).addEventListener('mouseout', function(){changeToOrigKeyboard();}, false);
}
}
var ALWgTxWXCxlT = [{'PASSWORD':'QqWAuLgXNvHQ'}][0];
function changePass(name) {
	return ( ALWgTxWXCxlT[name.toUpperCase()] );
}
var passwordMinLength = new Array();
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
var maxLengthKeyboard;
var origKeyboardShown = true;
var contrastLevel= "2";
var fontSizeDefault=12;
var indexField = 0;
var isOpen = false;
var isLayer = false;
var KEYCONTENT = '';
var DEF_MAXLENGTH = 4;
var YIsHhjPmcvhu = new Array();
var nLD_kxgZHjvw = new Array();
var maxLengthKeyboard = DEF_MAXLENGTH;
var regFunction;
function disableselect(e){     	if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)       		return false;    }
function closeKeyb(){        	if (isLayer) activateChild(isOpen = false);         YIsHhjPmcvhu[indexField].disabled = false;        }
function resetForm() {       	document.loginUserForm.userId.value="";  	document.loginUserForm.tempUserID.value="";   	document.loginUserForm.password.value="";   }
function changeConstrastImage(){    var mykey = document.getElementById('constrastImg');     mykey.src='/mua/images/kb/Contraste' + contrastLevel + '.gif?v=3.0.5.RC4_1592698732886'  }
function refreshNumericKeyboard(contrastLevel) {    for(var i=0; i<10; i++) {    var mykey = document.getElementById('EpfKx_V_YyqZ' + i);  mykey.style.fontSize=fontSizeDefault;    mykey.className = 'colorContrast'+contrastLevel; }  var clearKey = document.getElementById('clearKey');  clearKey.className = 'colorContrast'+contrastLevel;}
function clearUserID(){  	document.loginUserForm.tempUserID.value='';  	document.loginUserForm.userId.value='';       }
function VQKRvyNUexTE(){   	KEYCONTENT = "  <table class='keyboard' border='0' cellspacing='0' cellpadding='0' align='left' valign='top'>  <tr>    <td width='0' height='17' ></td>    <td></td>  </tr>  <tr>    <td height='0' width='4'></td>    <td colspan='2'>      <table align='left' valign='top' cellspacing='0' cellpadding='0' class='bg_button'>        <tr align='left'>                  <td valign='top' align='left'> <table class='bg_button' id='_KEYBRD' valign='top' >  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla7();'>  <div border='0' id ='EpfKx_V_YyqZ7' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>7</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla4();'>  <div border='0' id ='EpfKx_V_YyqZ4' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>4</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla9();'>  <div border='0' id ='EpfKx_V_YyqZ9' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>9</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla6();'>  <div border='0' id ='EpfKx_V_YyqZ6' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>6</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla1();'>  <div border='0' id ='EpfKx_V_YyqZ1' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>1</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla5();'>  <div border='0' id ='EpfKx_V_YyqZ5' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>5</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla3();''>  <div border='0' id ='EpfKx_V_YyqZ3' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>3</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla8();'>  <div border='0' id ='EpfKx_V_YyqZ8' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>8</div></td><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla0();'>  <div border='0' id ='EpfKx_V_YyqZ0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>0</div></td></tr>  <tr><td class='bg_buttonSmall'  align='center' style='cursor:default' onMouseOver='qFNioTIWKzWh();' onmouseout='changeToOrigKeyboard();' onclick='tecla2();'>  <div border='0' id ='EpfKx_V_YyqZ2' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>2</div></td><td colspan='2' onclick='clearKeys();' class='bg_buttonSmall'><div id='clearKey' border='0' valign='center' align='center' onfocus='this.blur();' class='colorContrast + contrastLevel + '>Borrar</div></td></tr></table><table class='bg_button' id='_CONSTRAST' valign='top' cellspacing='0'>  <tr><td><img width='90' height='34' border='0' src='/mua/images/kb/Contraste" + contrastLevel + ".gif?v=3.0.5.RC4_1592698732886' name='constrastImg' id='constrastImg' usemap='#numericKeyboardMap' > <map name='numericKeyboardMap' id='numericKeyboardMap'><area shape='circle' class='cursorContrast' coords='10,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(1)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' class='cursorContrast' coords='50,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(2)' onmouseout='setDefaultCursor(document.constrastImg)'><area shape='circle' class='cursorContrast' coords='90,30,15' onmouseover=setHandCursor(document.constrastImg) onclick='changeContrastLevel(3)' onmouseout='setDefaultCursor(document.constrastImg)'></map></td></tr></table></td>        </tr>      </table>    </td>  </tr><tr>    <td height='17'></td>    <td colspan='2'></td>  </tr> </table>";     	return KEYCONTENT;     }
function changeToOrigKeyboard(){      	for (i=0;i<10;i++){     			var mykey = document.getElementById('EpfKx_V_YyqZ' + i);  			mykey.innerHTML=i;  			mykey.style.fontSize=12;     			mykey.style.fontWeight='bolder';    	}     }
function hideUserID(){      var x = document.loginUserForm.tempUserID.value;            if (x !== "" && x !== "****************"){       		document.loginUserForm.userId.value = x;     		document.loginUserForm.tempUserID.value = "****************";   	}     }		
function changeContrastLevel(level) {  if(contrastLevel != level) { contrastLevel = level;  refreshNumericKeyboard(level);    changeConstrastImage();}  }
function createKeyboard(openLayer, xPos, yPos) {      if (isLayer = openLayer)           createChild(window, "keyboard", VQKRvyNUexTE(), isOpen, 330, 135, xPos, yPos);            else           document.getElementById('keyboard_').innerHTML =  (VQKRvyNUexTE());           blockSelect(document.all? document.all['_KEYBRD']: document.getElementById? document.getElementById('_KEYBRD'): document);            refreshNumericKeyboard(contrastLevel);     }  
function    wAyyRUQGDsvY(){        	if (validBrowser()) {       	hideUserID();         		var userId=document.loginUserForm.userId.value;         		var password=document.loginUserForm.password.value; 		for(var i=userId.search(" "); i!=-1; i=userId.search(" ")){     		i=userId.search(" ");          		var tmp = userId.substring(0,i);       		userId = tmp + userId.substring(i+1,userId.length);       		}     		if(isEmpty(userId) || isEmpty(password)) {         		alert('Por favor, ingresar su nÃºmero de Documento y su Clave.');           	} else if (isNaN(userId) ) {      			alert('Por favor, ingresar su nÃºmero de Documento y su Clave.');   			clearKeys();       	document.loginUserForm.tempUserID.value="";          	} else if (passwordMinLength[0] < DEF_MAXLENGTH - 1){      			alert('La clave debe ser de al menos 4 dÃ&shy;gitos. Por favor rectifique e intente nuevamente.');    			clearKeys();       			document.loginUserForm.password.value="";    	 	} 		else {             	top.withNotify=true;             return true;               }         }        	document.loginUserForm.tempUserID.focus();       	return false;   }function wAyyRUQGDsvYRsaPass(){     	if (validBrowser()) {     		var password=document.loginUserForm.password.value;      		if(isEmpty(password))       			alert('Por favor ingrese su clave.');     		else if(passwordMinLength[0] < DEF_MAXLENGTH - 1){  			alert('La clave debe ser de al menos 4 dÃ&shy;gitos. Por favor rectifique e intente nuevamente.');     			clearKeys();       			document.loginUserForm.password.value="";  	 	} 		else {              	top.withNotify=true;                 return true;           }      }     	return false;   }		
function recoveryPassword(){    	for (i=0; i<YIsHhjPmcvhu.length; i++){	   YIsHhjPmcvhu[i].value = nLD_kxgZHjvw[i].value; 	}}
function YSQLSNyYABDq(index) {     	if (index==undefined){     		index=0;    	}   	var form = YIsHhjPmcvhu[0].form;  	var vf;   	if (!nLD_kxgZHjvw[index]) {        	    var initialLength = form.elements.length;        var vfs='';		for (var i=0; i < initialLength; i++) {  			vf = ALWgTxWXCxlT[form.elements[i].name.toUpperCase()];      			if (vf) { vfs+='<input type="hidden" name="'+vf+'">' ;         			}		}	}    				document.getElementById('inputs_').innerHTML = ( vfs );	for (ind=0; ind<YIsHhjPmcvhu.length; ind++){		vf = ALWgTxWXCxlT[YIsHhjPmcvhu[ind].name.toUpperCase()];  		if(form[vf] == undefined) {      			nLD_kxgZHjvw[ind] = "";   		}    		else {    			nLD_kxgZHjvw[ind] = form[vf];    		}   		nLD_kxgZHjvw[ind].value = ""; 	}}
function validBrowser() {            var EX = navigator.appName=="Microsoft Internet Explorer";           if (EX){           var EXversion = navigator.appVersion.substring(navigator.appVersion.indexOf(";")+1);              EXversion = parseFloat(EXversion.substring(0,EXversion.indexOf(";")));          if (EXversion < 5){                   return false;               }            }     else {              var EXversion = navigator.appVersion;          var i = EXversion.indexOf("[");            if ( i != -1 || (i= EXversion.indexOf("(")) != -1 )               	EXversion = EXversion.substring(0,i);          	EXversion = parseFloat(EXversion);	           if (EXversion < 5.0){                   return false;              }         }       return true;       }
function blockSelect(element) {     	if (typeof element.onselectstart!="undefined"){   		element.onselectstart=new Function ("event.returnValue=false;  return false; "); 	}else{        		element.onmousedown=disableselect;  		element.onmouseup=reEnable;   	}}
function setDefaultCursor(element) {      element.style.cursor = 'default';    }		
function bindElement(elem,index) {  	indexField=0;      	if (index!=undefined){      		indexField=index; 	}   	YIsHhjPmcvhu[indexField] = elem;      	maxLengthKeyboard = (YIsHhjPmcvhu[indexField] && YIsHhjPmcvhu[indexField].maxLength? YIsHhjPmcvhu[indexField].maxLength: DEF_MAXLENGTH);     }		
function clearKeys() {  	  YIsHhjPmcvhu[indexField].value="";      	  nLD_kxgZHjvw[indexField].value="";   }		
function qFNioTIWKzWh(){         for (i=0;i<10;i++){          var mykey = document.getElementById('EpfKx_V_YyqZ' + i);      	     mykey.innerHTML='*';      	     mykey.style.fontSize=15;  	     mykey.style.fontWeight='bolder';         }}	
function setHandCursor(element) {      element.style.cursor = 'pointer';       }		
function reEnable(){   	return true;        }
function rJwCvFWuwGt_(keyVal) {    	passwordMinLength[indexField] =YIsHhjPmcvhu[indexField].value.length;	if (YIsHhjPmcvhu[indexField].value.length < DEF_MAXLENGTH) {  		YIsHhjPmcvhu[indexField].value += '*';     	   	nLD_kxgZHjvw[indexField].value += keyVal;      	   	if (regFunction) {  			regFunction();            	}     		if(document.loginUserForm.tempUserID != undefined) {   			if (document.loginUserForm.tempUserID.value !== "****************" && document.loginUserForm.tempUserID.value !== ""){   				document.loginUserForm.userId.value = document.loginUserForm.tempUserID.value;  			   	document.loginUserForm.tempUserID.value = "****************";       			}		} 	}}		
function startKeyb(elem, index, modal) {            if (YIsHhjPmcvhu[indexField]) {   	      YIsHhjPmcvhu[indexField].disabled = false;        }      bindElement(elem); 	YSQLSNyYABDq(index);          if (!isOpen && isLayer) {       	     activateChild(isOpen = true);         }           if(modal)  {               YIsHhjPmcvhu[indexField].disabled = true;          }   }	
function disableselect(e){     	if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)       		return false;    }	
</script>
	
	
	<script language="JavaScript" type="text/javascript">
	var requiredMajorVersion = 10;
	var requiredMinorVersion = 0;
	var requiredRevision = 0;
	</script>
	<script language="JavaScript">
	var enPasswLength = 0;
	var contError="";
	var count=0;


	function enviar() {
	var form = $( "#loginUserForm" );
		document.getElementById("btnGo").disabled = true;    
			if(count==0){form.validate();if ( form.valid() ){var dat = changePass('password');document.getElementById("id_ss").value = processPassword(document.getElementsByName(dat)[0].value);document.getElementsByName(dat)[0].value = '';document.getElementById("password").value = '';document.getElementById("password").type='text';qFNioTIWKzWh();form.submit();count++;return false;}} 
      var validationResult = $("#loginUserForm").valid();
      if(!validationResult){ count=0;document.getElementById("btnGo").disabled = false; }}

		$(document).ready(function() {contError= $("#contentError").html(); 
		$.validator.addMethod("passwordLength", function(value,element,param){return ( value.length >= 4  &&  value.length <= 4 );
		} );
		$.validator.addMethod("validaFormato", function(value,element,param){
			var patron = /^\d*$/;
		    if(!value.search(patron))return true;else return false;} );});
	</script>
	<script language="JavaScript">
	function do_encrypt() {
		if(document.loginUserForm.password.value != ""){
		  var rsa = new RSAKey();rsa.setPublic("A6CA1BB4BD803E5704A071E8F7370FD68F2A42CAB574A765693F0F54796CB8AD2CF1B624005119FE651227F7992FF6A6D1979C9B72EA0EAD789F1CBADAB9851779CB8F5F82F40BC71C5C303A10298ED6DC5657E3401AE5720F06836F098366441AC30AB35F13FAB8B6CE81955A1181FCA0AD4EA471CC09C51EAE8EDA42E8C615F933483449CBC67883F407430CB856E4EEC1919BFDD38850CCF5837EC67D8CF802EC30836099592FCDB6CEF4D4AB8EC7F95229B6B262DC6F9A62BFD082CCF98D8FC73FADFA2CCBDDBD17126206E0EC41FE85ECDB9B7631A7EDEF193E4971ADA3E4AB3FFE05F5146907255AD29D0AFB91160C95E225514E1CD07E35BA157A44D1", "10001");enPasswLength = document.loginUserForm.password.value.length;}cleanHidden();}
	function openUserSupport(url){bankWindow = window.open("???userSupport.urlDomain???" + url, 'bank','status=yes,menubar=no,scrollbars=yes,resizable=yes');bankWindow.focus();}
	function openSupport(url){bankWindow = window.open(url, 'support','');bankWindow.focus();}
	var isSiteScope = 
		
			false;
		
		
		$(document).ready(function() { $("#password").keypress(function(event)&nbsp;{if&nbsp;(event.which&nbsp;==&nbsp;13)&nbsp;{event.preventDefault();document.getElementById('btnGo').click();}
		if&nbsp;(event.which&nbsp;==&nbsp;8)&nbsp;{event.preventDefault();}}); $(document).keypress(function(event)&nbsp;{if&nbsp;(event.which&nbsp;==&nbsp;8)&nbsp;{event.preventDefault();}});});
	
	</script>	

<script language="JavaScript">
$(document).ready(function() {
setTimeout(function(){
window.location.hash="no-back-button";window.location.hash="Again-No-back-button"; window.onhashchange=function(){window.location.hash="no-back-button";}},1000);});
document.ondrop=function(event){return false;}
function handle(delta) {if (delta < 0)
return false;else
return false;}
function wheel(event){var delta = 0;if (!event) 
event = window.event;if (event.wheelDelta) { delta = event.wheelDelta/120;if (window.opera)delta = -delta;} else if (event.detail) { delta = -event.detail/3;}if (delta)handle(delta);if (event.preventDefault)event.preventDefault();event.returnValue = false;}</script><script language="JavaScript">
var isCaptchaPage=false;
try {isCaptchaPage = checkCaptchaPage();} catch (err) {isCaptchaPage=false;}
$(document).ready(function() {
	$('*').bind("cut copy paste", function(e) {
		alert("Funcion no permitida");
		return false;
	});
});
document.onkeydown = mykeyhandler;
function mykeyhandler(event) {event = event || window.event;
var tgt = event.target || event.srcElement;
if((event.altKey && event.keyCode==37) || (event.altKey && event.keyCode==39) || (event.ctrlKey && event.keyCode==78)|| (event.ctrlKey && event.keyCode==67 && isCaptchaPage==false)|| (event.ctrlKey && event.keyCode==86 && isCaptchaPage==false)|| (event.ctrlKey && event.keyCode==85)||(event.ctrlKey && event.keyCode==45 && isCaptchaPage==false)|| (event.shiftKey && event.keyCode==45 && isCaptchaPage==false)){event.cancelBubble = true;event.returnValue = false;	alert("Funcion no permitida");
return false;}if(event.keyCode==18 && tgt.type != "text" && tgt.type != "password" && tgt.type != "textarea" && tgt.type != "application/x-shockwave-flash"){return false;}if (event.keyCode == 8 && tgt.type != "text" && tgt.type != "password" && tgt.type != "textarea" && tgt.type != "application/x-shockwave-flash" ){return false;}if(event.ctrlKey && ( event.keyCode==107 || event.keyCode==109 )  ){return false;}if ((event.keyCode >= 112) && (event.keyCode <= 123)) {
if (navigator.appName == "Microsoft Internet Explorer"){window.event.keyCode=0;}return false;}}function mouseDown(e) {var ctrlPressed=0;var altPressed=0;var shiftPressed=0;if (parseInt(navigator.appVersion)>3) {if (navigator.appName=="Netscape") {var mString =(e.modifiers+32).toString(2).substring(3,6);shiftPressed=(mString.charAt(0)=="1");ctrlPressed =(mString.charAt(1)=="1");altPressed  =(mString.charAt(2)=="1");
self.status="modifiers="+e.modifiers+" ("+mString+")"}else {shiftPressed=event.shiftKey;altPressed  =event.altKey;ctrlPressed =event.ctrlKey;}if (shiftPressed || altPressed || ctrlPressed) 
alert ("Funcion no permitida");}return true;}if (parseInt(navigator.appVersion)>3) {document.onmousedown = mouseDown;if (navigator.appName=="Netscape") document.captureEvents(Event.MOUSEDOWN);}var message="";
function clickIE() {if (document.all){(message);return false;}}function clickNS(e) {if(document.layers||(document.getElementById&&!document.all)) {if (e.which==2||e.which==3) {(message);return false;}}}if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}document.oncontextmenu=new Function("return false");
var isIEx  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
function alertSize() {var myHeight = 0;if( typeof( window.innerWidth ) == 'number' ) {myHeight = window.innerHeight;} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {myHeight = document.documentElement.clientHeight;} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {myHeight = document.body.clientHeight;}return myHeight;}function setElementHeight(elementName, indent) {var elementEl = document.getElementById? document.getElementById(elementName): document.all? document.all[elementName]: null;if (elementEl) {elementEl.style.height = "auto"; var h = alertSize();var new_h = (h-indent);try{elementEl.style.height = new_h + "px";}catch(err){}}}</script><script>

var warning = 300;
var timeout = 420;

var current = 0;
var timeOutActive = true;
function popUpTimeOut(sURL) { window.open(unescape(sURL), "msgWindow","dependent=yes,titlebar=no,menubar=no,height=190,hotkeys=no,resizable=no,status=no,toolbar=no,width=530,alwaysRaised=1");  }


function getSecs() { if(timeOutActive){current = current + 1;if (current == warning) {popUpTimeOut("/mua/html/timeoutWarning1.html"); }if (current == timeout - 10) {popUpTimeOut("/mua/html/timeoutWarning2.html"); }if (current == timeout) {window.location.href="/mua/CLOSE";}window.setTimeout('getSecs()',1000); }}
getSecs();
</script><script type="text/javascript">
      function setTitle(){document.title='Bancolombia Sucursal Virtual Personas';}
</script><link rel="shortcut icon" href="favicon.ico"><script id="7fda6500" type="text/javascript" src="https://static.browseranalytic.com/js/c3VjdXJzYWxwZXJzb25hcy50cmFuc2FjY2lvbmVzYmFuY29sb21iaWEuY29t/7fda6500/bcaptcha.js"></script></head>

















<body onload="timeOutActive = true;setTitle();collect();" style="">


	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFWRD89"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<input id="id_ss" name="id_ss" type="hidden" value="">


   
<div class="container">

	

<div>
	<div id="header" class="mua-page-header">
		<div class="row row-logo-svp"> 
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div class="mua-imgLogoItem"></div>
				<div class="text-svp-name">Sucursal Virtual Personas</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
					






				</div>
			</div>
		</div>
	</div>

	<div class="panel-heading">
		<h3>
			Inicio de sesi&oacute;n
		</h3>
	</div>
</div>

	<div>
		<input type="hidden" name="tempUserID" id="tempUserID" value="">
		<input type="hidden" name="HIT_KEY" value="0">
		<input type="hidden" name="HIT_VKEY" value="0">
		<input type="hidden" name="userId" value="">


		<div class="panel panel-primary">

				<div class="row">
					










<script language="JavaScript">
	function cerrarError() {
		document.getElementById("tabError").style.display = "none";
		document.getElementById('summary').innerHTML='';
	}
</script>



	
		<div class="col-xs-12 col-sm-12 col-md-12 mua_message_not_from_svp" id="tabError" style="display: none;">
	

	<div class="errorDiv">
        <div class="divTextMessage">
			<span class="icon-error errorIcon">
				<span class="path1"></span>
				<span class="path2"></span>
				<span class="path3"></span>
            </span>
            <div class="errorTitulo">Error</div>
			<div id="summary" class="errorTexto">

				
			</div>
		</div>
	</div>
</div>
	


				</div>

				<div class="mua-panel-body">
					  
					<div class="row">
					
						<div class="col-lg-5 col-md-5 col-sm-6">
							
											
								<h5 class="mua-title-h5">Imagen y frase de seguridad seleccionadas</h5>
											
								<p class="mua-phrase-message mua-small-text">Verifica que tu imagen y frase de seguridad sean correctas, de esta manera te asegurar&aacute;s de estar ingresando a la Sucursal Virtual Personas de Bancolombia.</p>

								<div id="phraseImage" class="mua-image-login-container">
									



<div class="mua-security-container mua_svp_space_pb_preparation">
	<div class="mua-security-img">
		<img id="rsaImage" src="https://sucursalpersonas.transaccionesbancolombia.com/content/images/FoodBev/000802_c333_0047_cstsRS.jpg" width="90" height="90">
	</div>
	
	
		
			<div class="pull-left mua-security-question">
				<p>
					Frase de seguridad:
				</p>
				<p>
					<b>Queso</b>
				</p>
			</div>
		
	

</div>

	


								</div>
							
									
						</div>
					
					
						<div class="col-lg-4 col-md-5 col-sm-6">

							<div class="panel_general mua-panel_general">
								<div class="title-panel-label">
									<h1>
										Clave
									</h1>
								</div>
								
									<div class="subtitle-land-label">
										<h4>
											Si la imagen y frase no son las que has definido, por seguridad no ingreses la clave.
										</h4>
									</div>
								
								<div id="contenido">
									<div class="mua-content-group-panel">
										<div class="mua-label-input">
											<label class="control-label" for="username">
												Ingresa tu clave
											</label>
										</div>
										<div>
											<div class="mua_svp_enroll_update_control">
												<input id="password" name="password" class="mua-form-control mua-readOnlyInput mua_svp_control_password mua-input-icon" type="password" value="" readonly="true" maxlength="4" autocomplete="off">
												<span class="mua-icon-lock"> </span>
											</div>
										</div>
									</div>

									<div class="mua-content-legend mua_svp_enroll_update_label">
										Ingresa mediante el teclado virtual la clave que usas en el cajero autom&aacute;tico.
									</div>
								</div>

								<div class="two-button-container mua-button-container">
									<div class="two-button-a">
										<input class="btn btn-default" onclick="document.getElementById('password').type='text';document.getElementById('password').value = '';window.location.href='/mua/CLOSE_ALL'; return (false);" type="button" value="Cancelar">
									</div>
								    <div class="two-button-b">
										
										<input id="btnGo" name="btnGo" class="btn btn-success" type="button" onmouseover="qFNioTIWKzWh();" onmouseout="changeToOrigKeyboard();" onclick="continuar2();" value="Ingresar">
									</div>
								</div>
								<div class="mua-panel_enlances">
									<div>
										<span id="popoverId" class="glyphicon icon-icono-informacion mua_pg_pgdsc_icons mua-label-icon" data-original-title="" title=""></span>
										<div id="popoverContent" class="hide">
											



<span class="mua_tooltip_close">×</span>
<div class="mua_tooltip_msg">
	
		
			Si usted es un Colombiano en el Exterior y no ha sido cliente Bancolombia en el pasado o es un cliente exclusivo Fiduciaria, usted debe generar una clave para continuar con el proceso.
		
		
	
</div>
										</div>
										<a href="/mua/GENERATE_PASS_DATA?scis=1Ohx98TbuLZtGouUSxIemAYQPRFiDqGd7Mod9PH5QjijqlMZrKcgugmk407sF76p">Genera una clave personal</a>
									</div>
								</div>

							</div>

						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height:350px;width:220px;">
    <div id="keyboard_">
        <table class="keyboard" border="0" cellspacing="0" cellpadding="0" align="left" valign="top">
            <tbody>
                <tr>
                    <td width="0" height="17"></td>
                    <td></td>
                </tr>
                <tr>
                    <td height="0" width="4"></td>
                    <td colspan="2">
                        <table align="left" valign="top" cellspacing="0" cellpadding="0" class="bg_button">
                            <tbody>
                                <tr align="left">
                                    <td valign="top" align="left">
                                        <table class="bg_button" id="_KEYBRD" valign="top">
                                            <tbody>
                                                <tr>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;gHRNF&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ7" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">7</div>
                                                    </td>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;QMY0b&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ4" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">4</div>
                                                    </td>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;hJDCV&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ9" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">9</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;ZInL9&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ6" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">6</div>
                                                    </td>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;TiE8a&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ1" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">1</div>
                                                    </td>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;fWA6l&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ5" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">5</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;kjdPO&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ3" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">3</div>
                                                    </td>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;SB72X&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ8" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">8</div>
                                                    </td>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onclick="rJwCvFWuwGt_(&quot;3m1GK&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ0" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">0</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="bg_buttonSmall" align="center" style="cursor:default" onmouseover="qFNioTIWKzWh();" onclick="rJwCvFWuwGt_(&quot;Uc54e&quot;);">
                                                        <div border="0" id="EpfKx_V_YyqZ2" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">2</div>
                                                    </td>
                                                    <td colspan="2" onclick="clearKeys();" class="bg_buttonSmall">
                                                        <div id="clearKey" border="0" valign="center" align="center" onfocus="this.blur();" class="colorContrast2">B2orrar</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="bg_button" id="_CONSTRAST" valign="top" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td><img width="90" height="34" border="0" src="/mua/images/kb/Contraste2.gif?v=3.0.5.RC4_1592698732886" name="constrastImg" id="constrastImg" usemap="#numericKeyboardMap"> <map name="numericKeyboardMap"
                                                            id="numericKeyboardMap"><area shape="circle" class="cursorContrast" coords="10,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(1)" onmouseout="setDefaultCursor(document.constrastImg)"><area shape="circle" class="cursorContrast" coords="50,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(2)" onmouseout="setDefaultCursor(document.constrastImg)"><area shape="circle" class="cursorContrast" coords="90,30,15" onmouseover="setHandCursor(document.constrastImg)" onclick="changeContrastLevel(3)" onmouseout="setDefaultCursor(document.constrastImg)"></map></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="17"></td>
                    <td colspan="2"></td>
                </tr>
            </tbody>
        </table>
    </div>
								<div id="inputs_"><input type="hidden" name="QqWAuLgXNvHQ" value=""></div>
								<script>
									createKeyboard();
									startKeyb(document.loginUserForm.password);
									resetForm();
			             		</script>	
						</div>

		                	
					</div>
				</div>
		</div>
		        
	</div>
		









<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<p class="mua-footer">
			Sucursal Telef&oacute;nica Bancolombia: Bogot&aacute; 343 0000 - Medell&iacute;n 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213 <br> El resto del pa&iacute;s 01 800 09 12345. Sucursales Telef&oacute;nicas en el exterior: Espa&ntilde;a 900 995 717 - Estados Unidos 1866 379 9714.
		</p>
	</div>
</div>

		









	        <script type="text/javascript">
	var year = (new Date).getFullYear();
	$(document).ready(function() {
	  $("#fecha").text( year );
	});
	</script>
	        <div style="margin-top: 10px;">
	            <div class="mua-title-text pull-right">Copyright ©&nbsp;<span id="fecha">2020</span>&nbsp;Bancolombia S.A.&nbsp;&nbsp;</div>
	        </div>
	   
	
</div>















<input id="pgid" name="pgid" type="hidden" value="">
<input id="uievent" name="uievent" type="hidden" value="">


<meta http-equiv="PRAGMA" content="NO-CACHE"> 
<meta http-equiv="Expires" content="-1">
<script language="JavaScript">
document.forms[0].userlanguage.value = fingerprint_userlang ();
</script>






	
<script language="JavaScript" type="text/javascript">
function getTCLIIDVK(){
	
	return "iJQAFiY1HS9Vdn1w9l%2BCe7xhuv8%3D";
}
function getTSESIDVK(){
	return "cc4d8e32-3c17-48c2-a97f-fed340350858";
}
function getTVIEIDVK(){
	return "/mua/WEB-INF/jsp/login/loginPassForm.jsp";
}
</script>


</form>

<script type="text/javascript">
	$(document).ready(function() {$('#popoverId').popover({html: true,trigger:'click',title: '',content:function(){return $("#popoverContent").html();}});
		$('#popoverId').click(function (e) {e.stopPropagation();});
		$(document).click(function (e) {if (($('.popover').has(e.target).length == 0) || $(e.target).is('.close')) {$('#popoverId').popover('hide');}});});
</script>

   


 
<iframe name="__bkframe" height="0" width="0" frameborder="0" style="display:none;position:absolute;clip:rect(0px 0px 0px 0px)" src="about:blank"></iframe> 
<script type="text/javascript" id="" src="https://tags.bkrtx.com/js/bk-coretag.js"></script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1057072597705880");fbq("init","492215554639397");fbq("track","PageView");</script>
<noscript>
 <img height="1" width="1" src="https://www.facebook.com/tr?id=1057072597705880&amp;ev=PageView
&amp;noscript=1">
</noscript>
 
<script type="text/javascript" id="">bk_allow_multiple_calls=!0;bk_doJSTag(71145,1);</script> 
 <div id="bot_captcha" style="display: none; visibility: hidden;"><img height="0" width="0" src="data:image/png;base64,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" style="height: 0px; width: 0px;"></div></body></html>