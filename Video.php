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
            	<td colspan="2" height="300" bgcolor="#000000" align="center"><font color="<?php Color(6,TRUE,FALSE,FALSE); ?>FFFFFF">VIDEO</font></td>
            </tr><tr>
            	<td>Episodio: <?php echo $_GET['e'] ?></td>
                <td width="135">Idioma:<select>
                		<option <?php if($_GET['i'] == "Franc&eacute;s"){echo 'selected="selected"';}?>>Franc&eacute;s</option>
                        <option <?php if($_GET['i'] == "Aleman"){echo 'selected="selected"';}?>>Aleman</option>
                        <option <?php if($_GET['i'] == "Español"){echo 'selected="selected"';}?>>Español</option></select></td>
            </tr>
        </table>
        <br /><br /><br />
        <a href="Preguntas.php?i=<?php echo $_GET['i'];?>&c=<?php echo $_GET['c'];?>&e=<?php echo $_GET['e'];?>"><div style="border-radius: 5px; background-color:#<?php Colors(6,TRUE,FALSE,FALSE); ?>; width:80px; padding: 15px 25px 15px 25px;"><font color="<?php Color(6,TRUE,FALSE,FALSE); ?>">Preguntas!</font></div></a>
        <br /><br /><br />
        <table border="0" width="600">
        	<tr>
            	<td colspan="10">Comentarios:</td>
            </tr><tr>
                <td colspan="100"><hr /></td>
            </tr><tr>
            	<td width="50">Nombre de Usuario</td>
                <td>Comentario</td>
                <td width="50">Fecha y Hora</td>
            </tr><tr>
                <td colspan="100"><hr /></td>
            </tr><tr>
            	<td>Nombre de Usuario</td>
                <td>Comentario</td>
                <td>Fecha y Hora</td>
            </tr><tr>
                <td colspan="100"><hr /></td>
            </tr><tr>
            	<td>Nombre de Usuario</td>
                <td>Comentario</td>
                <td>Fecha y Hora</td>
            </tr><tr>
                <td colspan="100"><hr /></td>
            </tr><tr>
            	<td>Dejar un Comentario:</td>
                <td colspan="10"><textarea style="height:100px; width:98%;"></textarea><br /><input type="submit" value="Enviar Comentario" /></td>
            </tr>
        </table>
        
        
    </div>
</div><!--/Cuerpo-->
<div class="Pie"><!--Pie de Pagina--><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">Cari</font><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">DIOMAS</font></div><!--/Pie de Pagina-->
</body>
</html>