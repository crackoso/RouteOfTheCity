<table>
  <tbody>
<!--
      <tr>
      <th>Id:</th>
      <td><?php //echo $ruta->getId() ?></td>
    </tr>
-->
    <tr>
      <th>Nombre:</th>
      <td><?php echo $ruta->getNombre() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('ruta/edit?id='.$ruta->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('ruta/index') ?>">Regresar</a>
