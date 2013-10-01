<?php include "Color.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CariIDIOMAS</title>
<link href="Estilos.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#<?php Color(6,FALSE,FALSE,FALSE); ?>">
<div class="Menu" style="background-color:#<?php Color(6,FALSE,FALSE,FALSE); ?>;"><!--Menu--><a href="index.php">Menu</a></div><!--/Menu-->
<div class="Cuerpo" style="background-color:#<?php Color(6,FALSE,FALSE,FALSE); ?>;" align="center"><!--Cuerpo-->
	<div class="CuerpoInterior" align="center">
    	<table border="1" width="600">
        	<tr>
            	<td colspan="10">Idioma: <?php echo $_GET['i'];?></td>
            </tr><tr>
                <td colspan="10">Selecciona la Caricatura:</td>
            </tr><tr>
            	<td></td>
                <td>Nombre</td>
                <td align="center" width="2">Nivel</td>
            </tr><tr>
            	<td align="center">1</td>
                <td><a href="Capitulos.php?i=<?php echo $_GET['i'];?>&c=Dexter">Dexter</a></td>
                <td align="center">1</td>
            </tr><tr>
            	<td align="center">2</td>
                <td><a href="Capitulos.php?i=<?php echo $_GET['i'];?>&c=Lovo">El Lovo y los tres Cochinitos</a></td>
                <td align="center">1</td>
            </tr><tr>
            	<td align="center">3</td>
                <td><a href="Capitulos.php?i=<?php echo $_GET['i'];?>&c=Tom">Tom y Jerry</a></td>
                <td align="center">3</td>
            </tr>
        </table>
    </div>
</div><!--/Cuerpo-->
<div class="Pie"><!--Pie de Pagina--><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">Cari</font><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">DIOMAS</font></div><!--/Pie de Pagina-->
</body>
</html>