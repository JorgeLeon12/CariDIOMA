<?php include "Color.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CariIDIOMAS</title>
<link href="Estilos.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#<?php Color(6,FALSE,FALSE,FALSE); ?>">
<div class="Menu" style="background-color:#<?php Color(6,FALSE,FALSE,FALSE); ?>;"><!--Menu-->
	<a href="index.php">Menu</a>
</div><!--/Menu-->
<div class="Cuerpo" style="background-color:#<?php Color(6,FALSE,FALSE,FALSE); ?>;" align="center"><!--Cuerpo-->
	<div class="CuerpoInterior" align="center">
        <div style="height:150px;"></div>
        <div style="width:80%;">
            <a href="Seleccion.php?i=Aleman">
                <div class="Botones" style="float:left; background-image:url(Imagenes/Alemania.png);" align="center">
                    <h1><font color="#000000">Aleman</font></h1>
                </div>
            </a>
            <a href="Seleccion.php?i=Fran&eacute;s">
                <div class="Botones" style="float:right; background-image:url(Imagenes/Francia.jpg); background-position:inherit; background-repeat:no-repeat;" align="center">
                    <h1><font color="#000000">Francés</font></h1>
                </div>
            </a>
        </div>
        <div style="height:400px;"></div>
    </div>
</div><!--/Cuerpo-->
<div class="Pie"><!--Pie de Pagina--><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">Cari</font><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">DIOMAS</font></div><!--/Pie de Pagina-->
</body>
</html>