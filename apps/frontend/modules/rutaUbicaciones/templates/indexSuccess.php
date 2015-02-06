<h1>Ubicaciones de Ruta</h1>

<table>
  <thead>
  	<tr>
  		<td>  
  			<a href="<?php echo url_for('rutaUbicaciones/new') ?>">Nueva</a>
  			<br>
  			<br>
		</td>
  	</tr>
    <tr>
      <!--<th>Id</th>-->
      <th>Ruta</th>
      <th>Ubicaci&oacute;n</th>
      <th>Posici&oacute;n</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ruta_ubicacioness as $ruta_ubicaciones): ?>
    <tr>
      <!--<td><a href="<?php //echo url_for('rutaUbicaciones/show?id='.$ruta_ubicaciones->getId()) ?>"><?php //echo $ruta_ubicaciones->getId() ?></a></td>-->
      <td><a href="<?php echo url_for('rutaUbicaciones/show?id='.$ruta_ubicaciones->getId()) ?>"><?php echo $ruta_ubicaciones->getRutaId() ?></a></td>
      <td><a href="<?php echo url_for('rutaUbicaciones/show?id='.$ruta_ubicaciones->getId()) ?>"><?php echo $ruta_ubicaciones->getUbicacionId() ?></a></td>
      <td><a href="<?php echo url_for('rutaUbicaciones/show?id='.$ruta_ubicaciones->getId()) ?>"><?php echo $ruta_ubicaciones->getPosicion() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

