<table>
  <tbody>
    <!--
    <tr>
      <th>Id:</th>
      <td><?php //echo $ruta_ubicaciones->getId() ?></td>
    </tr>
    -->
    <tr>
      <th>Ruta:</th>
      <td><?php echo $ruta_ubicaciones->getRutaId() ?></td>
    </tr>
    <tr>
      <th>Ubicaci&oacute;n:</th>
      <td><?php echo $ruta_ubicaciones->getUbicacionId() ?></td>
    </tr>
    <tr>
      <th>Posici&oacute;n:</th>
      <td><?php echo $ruta_ubicaciones->getPosicion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('rutaUbicaciones/edit?id='.$ruta_ubicaciones->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('rutaUbicaciones/index') ?>">Regresar</a>
