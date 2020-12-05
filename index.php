<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type= "text/css">
    columna-imagen{
        width:96%;
        max-width: 960px;
        margin: 0 auto;
    }
    logo{
        width: 96%;
        height: auto;
    }
    body {font-family: Arial, Helvetica, sans-serif;}

table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }
th {     font-size: 12px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
    border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }
td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
    color: #669;    border-top: 1px solid transparent; }
tr:hover td { background: #d0dafd; color: #339; }
.seleccion{
 font-size: 12px;
 font-family: 'Lucida Sans Unicode', sans-serif;
 font-weight: 400;
 color: #444;
 line-height: 1.3;
 padding: .4em 1.4em .3em .8em;
 width: 120px;
 max-width: 100%; 
 box-sizing: border-box;
 margin: 0;
 border: 1px solid #aaa;
 box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
 border-radius: .3em;
 -moz-appearance: none;
 -webkit-appearance: none;
 appearance: none;
 background-color: #fff;
 background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
   linear-gradient(to bottom, #ffffff 0%,#f7f7f7 100%);
 background-repeat: no-repeat, repeat;
 background-position: right .7em top 50%, 0 0;
 background-size: .65em auto, 100%;
}
.seleccion::-ms-expand {
 display: none;
}
.seleccion:hover {
 border-color: #888;
}
.seleccion:focus {
 border-color: #aaa;
 box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
 box-shadow: 0 0 0 3px -moz-mac-focusring;
 color: #222; 
 outline: none;
}
.seleccion option {
 font-weight:normal;
}
.btn-action{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #044083;
    border-radius: 6px;
    border: 2px solid #8712b3;
  }
  .btn-action:hover{
    color: #044083;
    background-color: #ffffff;
  }
</style>
</head>
<body>
<marquee direction="left" style="background: #ffffff; size: 10px"> Consulta tu certificado internacional IFPO </marquee>
	<br>
	<center>Si no encuentra su registro, puede comunicarse mediante este correo: <b>consulta@ifpo.es</b> </center>
	
	<center>Para buscar por nombre y apellidos recuerde colocar completamente los datos igual que se emitio su certificado</center>
	<form method="POST" action= "index.php">
		<center><img class="logo" data-origsrc="https://ifpo.es/images/logo_nuevo.png" data-src="https://ifpo.es/images/logo_nuevo.png" height="150" src="https://ifpo.es/images/logo_nuevo.png" style="border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"  /></center>
<center><table border=2 bordercolor="black" BGCOLOR="Silver">
<tr>
			 <td colspan="3" bgcolor="SteelBlue">
	<label for="opcion2" style="font-family: Verdana">Elija por cual dato desea buscar</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT NAME="datos" SIZE=1 class="seleccion">
   	<OPTION VALUE="Nombre">Nombre</OPTION>
   	<OPTION VALUE="Apellido">Apellido</OPTION>
   	<OPTION VALUE="Codigo">NºCertificación</OPTION>
   	<OPTION VALUE="Cedula">Cédula</OPTION>
   </SELECT></td>
</tr>
</tr></center>
<tr>
			 <td colspan="3" bgcolor="SteelBlue">
	<label for="opcion2" style="font-family: Verdana">Introduzca el dato</label>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="dato" id="dato"></center>
</td>
</tr>
</table>

 <br>
<center><input type="submit" value="CONSULTAR" class="btn-action" name="btn1"></center>
<br><br><br>
	</center></td></tr>
</table>
</form>
	
</body>
</html>