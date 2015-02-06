<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('rutaUbicaciones/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('rutaUbicaciones/index') ?>">Regresar a la lista</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'rutaUbicaciones/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Estás seguro?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['ruta_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['ruta_id']->renderError() ?>
          <?php echo $form['ruta_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ubicacion_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['ubicacion_id']->renderError() ?>
          <?php echo $form['ubicacion_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['posicion']->renderLabel("Posición") ?></th>
        <td>
          <?php echo $form['posicion']->renderError() ?>
          <?php echo $form['posicion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
