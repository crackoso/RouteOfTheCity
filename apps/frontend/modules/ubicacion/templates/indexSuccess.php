<h1>Lista de Ubicaciones</h1>

<table>
  <thead>
  	<tr>
  		<td>
			<a href="<?php echo url_for('ubicacion/new') ?>">Nueva</a>
  			<br>
  			<br>
  		</td>
  	</tr>
    <tr>
      <!--<th>Id</th>-->
      <th>Titulo</th>
      <th>Descripci&oacute;n</th>
      <th>Idioma</th>
      <!--<th>Latitud</th>-->
      <!--<th>Longitud</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ubicacions as $ubicacion): ?>
    <tr>
      <!--<td><a href="<?php //echo url_for('ubicacion/show?id='.$ubicacion->getId()) ?>"><?php //echo $ubicacion->getId() ?></a></td>-->
      <td width="20%"><a href="<?php echo url_for('ubicacion/show?id='.$ubicacion->getId()) ?>"><?php echo $ubicacion->getTitulo() ?></a></td>
      <td width="70%"><a href="<?php echo url_for('ubicacion/show?id='.$ubicacion->getId()) ?>"><?php echo $ubicacion->getDescripcion() ?><br><br></a></td>
      <td width="10%"><a href="<?php echo url_for('ubicacion/show?id='.$ubicacion->getId()) ?>"><?php echo $ubicacion->getIdioma() ?></a></td>
      <!--<td><a href="<?php //echo url_for('ubicacion/show?id='.$ubicacion->getId()) ?>"><?php //echo $ubicacion->getLatitud() ?></a></td>-->
      <!--<td><a href="<?php //echo url_for('ubicacion/show?id='.$ubicacion->getId()) ?>"><?php //echo $ubicacion->getLongitud() ?></a></td>-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
