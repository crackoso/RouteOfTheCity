<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://prepagoelectronico.com.mx/vende/scripts/jquery-1.7.1.js" ></script>
<!--
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
</style>
-->
<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?sensor=true">
</script>
<script>
var map = null;
var infoWindow = null;
 
function openInfoWindow(marker) {
    var markerLatLng = marker.getPosition();
    document.getElementById("ubicacion_latitud").value = markerLatLng.lat();
    document.getElementById("ubicacion_longitud").value = markerLatLng.lng();
}
 
function initialize() {
    var latitud = $("#ubicacion_latitud").val();
    var longitud = $("#ubicacion_longitud").val();
    var myLatlng;
    if(latitud.length!=0 && longitud.length!=0)
        {
             var myLatlng = new google.maps.LatLng(latitud, longitud);
             //alert("latitud: "+latitud+ " Longitud: "+longitud);
        }
        else
            { 
                    var myLatlng= new google.maps.LatLng(19.434381,-99.133501)
            }
    
    var myOptions = {
      zoom: 14,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
 
    map = new google.maps.Map($("#map_canvas").get(0), myOptions);
 
    infoWindow = new google.maps.InfoWindow();
 
    var marker = new google.maps.Marker({
        position: myLatlng,
        draggable: true,
        map: map,
        title:"Ubica un punto en el mapa"
    });
 
    google.maps.event.addListener(marker, 'dragend', function(){
        openInfoWindow(marker);
    });
}
 
$(document).ready(function() {
    initialize();
});</script>

</head>
<body>
<form action="<?php echo url_for('ubicacion/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<div id="latitud"></div>
<div id="longitud"></div>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('ubicacion/index') ?>">Regresar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'ubicacion/delete?id='.$form->getObject()->getId(), array('method' => 'Delete', 'confirm' => 'Estás seguro?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['titulo']->renderLabel("Título") ?></th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel("Fecha") ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['direccion']->renderLabel("Dirección") ?></th>
        <td>
          <?php echo $form['direccion']->renderError() ?>
          <?php echo $form['direccion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['descripcion']->renderLabel("Descripción") ?></th>
        <td>
          <?php echo $form['descripcion']->renderError() ?>
          <?php echo $form['descripcion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['url']->renderLabel('Id Youtube') ?></th>
        <td>
          <?php echo $form['url']->renderError() ?>
          <?php echo $form['url'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['audio']->renderLabel() ?></th>
        <td>
          <?php echo $form['audio']->renderError() ?>
          <?php echo $form['audio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['idioma']->renderLabel() ?></th>
        <td>
          <?php echo $form['idioma']->renderError() ?>
          <?php echo $form['idioma'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['archivo1']->renderLabel('Archivo 1') ?></th>
        <td>
          <?php echo $form['archivo1']->renderError(array('required' => 'Escoja al menos una imágen')) ?>
          <?php echo $form['archivo1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['archivo2']->renderLabel('Archivo 2') ?></th>
        <td>
          <?php echo $form['archivo2']->renderError() ?>
          <?php echo $form['archivo2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['archivo3']->renderLabel('Archivo 3') ?></th>
        <td>
          <?php echo $form['archivo3']->renderError() ?>
          <?php echo $form['archivo3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['archivo4']->renderLabel('Archivo 4') ?></th>
        <td>
          <?php echo $form['archivo4']->renderError() ?>
          <?php echo $form['archivo4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['archivo5']->renderLabel('Archivo 5') ?></th>
        <td>
          <?php echo $form['archivo5']->renderError() ?>
          <?php echo $form['archivo5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['archivo6']->renderLabel('Archivo 6') ?></th>
        <td>
          <?php echo $form['archivo6']->renderError() ?>
          <?php echo $form['archivo6'] ?>
        </td>
      </tr>
      <tr>
          <td colspan="2">
              <div id="map_canvas" style="width: 700px; height:300px"></div>
        </td>
      </tr>
      </table>
    <div style="display:none;">
      <tr>
        <th><?php echo $form['latitud']->renderLabel() ?></th>
        <td>
          <?php echo $form['latitud']->renderError() ?>
          <?php echo $form['latitud'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['longitud']->renderLabel() ?></th>
        <td>
          <?php echo $form['longitud']->renderError() ?>
          <?php echo $form['longitud'] ?>
        </td>
      </tr>
      </div>
</tbody>
		</table>
</form>
</body>
</html>

