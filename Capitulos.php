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
    	<div style="padding-bottom:50px; height:300px;">
        	<a href="Video.php?i=<?php echo $_GET['i'];?>&c=<?php echo $_GET['c'];?>&e=1"><img src="./Imagenes/Tom/1.jpg" height="300" width="400" align="left" /></a>
            <a href="Video.php?i=<?php echo $_GET['i'];?>&c=<?php echo $_GET['c'];?>&e=2"><img src="./Imagenes/Tom/2.jpg" height="300" width="400" align="right" /></a>
        </div>
        <div style="padding-bottom:50px; height:300px;">
        	<a href="Video.php?i=<?php echo $_GET['i'];?>&c=<?php echo $_GET['c'];?>&e=3"><img src="./Imagenes/Tom/3.jpg" height="300" width="400" align="left" /></a>
            <a href="Video.php?i=<?php echo $_GET['i'];?>&c=<?php echo $_GET['c'];?>&e=4"><img src="./Imagenes/Tom/4.jpg" height="300" width="400" align="right" /></a>
        </div>
    </div>
</div><!--/Cuerpo-->
<div class="Pie"><!--Pie de Pagina-->
	<font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">Cari</font><font color="#<?php Colors(6,FALSE,FALSE,FALSE); ?>">DIOMAS</font>
</div><!--/Pie de Pagina-->
</body>
</html>