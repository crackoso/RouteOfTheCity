<?php

/**
 * RutaUbicaciones form.
 *
 * @package    rutatragica
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RutaUbicacionesForm extends BaseRutaUbicacionesForm
{
  public function configure()
  {
    
      $this->widgetSchema['ruta_id']  = new sfWidgetFormDoctrineChoice(array(
          'model' => 'Ruta',
          'method'=> 'getNombre',
          ));

      $this->widgetSchema['ubicacion_id']  = new sfWidgetFormDoctrineChoice(array(
          'model' => 'Ubicacion',
          'method'=> 'getTitulo',
          ));
  }
}
