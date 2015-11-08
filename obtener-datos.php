<?php
	$cole = $_POST['clave'];

  $conexi = mysql_connect('mysql.hostinger.es','u731967327_???','diseno??')
      or die ("Error al conectar a la base de datos.");
  mysql_select_db ('u731967327_libre',$conexi)
      or die ("Error al conectar a la base de datos.");
	  
	 
	  
$result ="SELECT *  FROM Guias WHERE Password= '$clave' ";
$datos=mysql_query($result,$conexi); //enviar código MySQL

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP con MySQL: Consultar datos en MySQL</title>


</head>
<body>


              <div id="libros">
			  <?php while ($row=mysql_fetch_array($datos)) { ?>
                        
            <div style="margin-left:25%; float:left; font-size:1.2em">
            
            <p style="line-height:normal;">&nbsp;<strong>Colegio:</strong> <?php echo $row['pais']; ?>.</p>
            <p style="line-height:normal;">&nbsp;<strong>Libro:</strong> <?php echo $row['isbn']; ?>.</p>
            <p style="line-height:normal;">
            <a href="Index.html"><img src="<?php echo $row['imagen']; ?>" width="200" height="154" style="margin-top:2px;"></a></p>
            <p style="line-height:normal;">&nbsp;<strong>Genero:</strong> <?php echo $row['genero']; ?>.</p>
                      
            </div>
            
	<?php } ?>
             
         </div>



</body></html>
