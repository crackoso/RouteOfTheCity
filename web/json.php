<?php

$host="localhost";
$user="rutisimamadre";
$password="pel2012";
$db="rutisimamadre";
$order=$_GET["order"];
$idioma=$_GET['idioma'];

$conexion = mysql_connect($host, $user, $password);
mysql_select_db($db);

$query = "SELECT * FROM view_rutas WHERE idioma LIKE '".$idioma."%' ORDER BY ".$order;

$consulta=  mysql_query($query);
//echo $query;
$json=array();

while($datos = mysql_fetch_assoc($consulta))
{
    $row_array['nombre'] = utf8_encode($datos['nombre']);
    $row_array['titulo'] = utf8_encode($datos['titulo']);
    $row_array['fecha'] = utf8_encode($datos['fecha']);
    $row_array['direccion'] = utf8_encode($datos['direccion']);
    $row_array['descripcion'] = utf8_encode($datos['descripcion']);
    $row_array['posicion'] = htmlentities($datos['posicion']);
    $row_array['audio'] = $datos['audio'];
    $row_array['url'] = htmlentities($datos['url']);
    $row_array['idioma'] = htmlentities($datos['idioma']);
    $row_array['latitud'] = htmlentities($datos['latitud']);
    $row_array['longitud'] = htmlentities($datos['longitud']);
    $row_array['archivo1'] = $datos['archivo1'];
    $row_array['archivo2'] = $datos['archivo2'];
    $row_array['archivo3'] = $datos['archivo3'];
    $row_array['archivo4'] = $datos['archivo4'];
    $row_array['archivo5'] = $datos['archivo5'];
    $row_array['archivo6'] = $datos['archivo6'];
    $row_array['status'] = "Activado";
    
    array_push($json, $row_array);
}
//echo "SELECT * FROM view_rutas WHERE idioma = '".$idioma."' ORDER BY ".$order;



echo json_encode($json);

mysql_close($conexion);
?>
