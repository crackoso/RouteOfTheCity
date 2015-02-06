<h1>Rutas</h1>

<table>
  <thead>
    <tr>
<!--      <th>Id</th>-->
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rutas as $ruta): ?>
    <tr>
      <!--<td><a href="<?php //echo url_for('ruta/show?id='.$ruta->getId()) ?>"><?php //echo $ruta->getId() ?></a></td>-->
      <td><a href="<?php echo url_for('ruta/show?id='.$ruta->getId()) ?>"><?php echo $ruta->getNombre() ?></a></td>
      <td></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('ruta/new') ?>">Nueva Ruta</a>
