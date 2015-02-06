<table>
  <tbody>
    <!--<tr>
      <th>Id:</th>
      <td><?php //echo $ubicacion->getId() ?></td>
    </tr>-->
    <tr>
      <th>T&iacute;tulo:</th>
      <td><?php echo $ubicacion->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $ubicacion->getFecha() ?></td>
    </tr>
    <tr>
      <th>Direcci&oacute;n:</th>
      <td><?php echo $ubicacion->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Descripci&oacute;n:</th>
      <td><?php echo $ubicacion->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Idioma:</th>
      <td><?php echo $ubicacion->getIdioma() ?></td>
    </tr>
    <tr>
      <th>Video:</th>
      <td><?php echo $ubicacion->getUrl() ?></td>
    </tr>
    <tr>
      <th>Audio</th>
      <td><?php echo $ubicacion->getAudio() ?> </td>
    </tr>
    <tr>
      <th>Im&aacute;genes</th>
      <td>
      <?php 
        if($ubicacion->getArchivo1() != "Array" && $ubicacion->getArchivo1() != null)
        {
          ?>
            <img src="../../../../web/uploads/ubicaciones/<?php echo $ubicacion->getArchivo1() ?>" width="100">
          <?php
        }
        else
            {
            echo "No se han cargado im&aacute;genes todav&iacute;a";
            }
      ?>
      </td>
      <td>
      <?php 
        if($ubicacion->getArchivo2() != "Array" && $ubicacion->getArchivo2() != null)
        {
          ?>
            <img src="../../../../web/uploads/ubicaciones/<?php echo $ubicacion->getArchivo2() ?>" width="100">
          <?php
        }
      ?>
      </td>
      <td>
      <?php 
        if($ubicacion->getArchivo3() != "Array" && $ubicacion->getArchivo3() != null)
        {
          ?>
            <img src="../../../../web/uploads/ubicaciones/<?php echo $ubicacion->getArchivo3() ?>" width="100">
          <?php
        }
      ?>
      </td>
      <td>
      <?php 
        if($ubicacion->getArchivo4() != "Array" && $ubicacion->getArchivo4() != null)
        {
          ?>
            <img src="../../../../web/uploads/ubicaciones/<?php echo $ubicacion->getArchivo4() ?>" width="100">
          <?php
        }
      ?>
      </td>
      <td>
      <?php 
        if($ubicacion->getArchivo5() != "Array" && $ubicacion->getArchivo5() != null)
        {
          ?>
            <img src="../../../../web/uploads/ubicaciones/<?php echo $ubicacion->getArchivo5() ?>" width="100">
          <?php
        }
      ?>
      </td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('ubicacion/index') ?>">Regresar</a>
&nbsp;
<a href="<?php echo url_for('ubicacion/edit?id='.$ubicacion->getId()) ?>">Editar</a>
