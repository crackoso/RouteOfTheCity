<?php

/**
 * Ubicacion form.
 *
 * @package    Rutisima Madre
 * @subpackage form
 * @author     Hibran Martinez
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 Z Kris.Wallsmith $
 */
class UbicacionForm extends BaseUbicacionForm
{
  public function configure()
  {
      $this->setWidget('fecha', new sfWidgetFormInputText());
      $this->setWidget('url', new sfWidgetFormInputText());
      $this->setWidget('audio', new sfWidgetFormInputFile());
      $this->setWidget('archivo1', new sfWidgetFormInputFile());
      $this->setWidget('archivo2', new sfWidgetFormInputFile());
      $this->setWidget('archivo3', new sfWidgetFormInputFile());
      $this->setWidget('archivo4', new sfWidgetFormInputFile());
      $this->setWidget('archivo5', new sfWidgetFormInputFile());
      $this->setWidget('archivo6', new sfWidgetFormInputFile());      

     
      $this->setValidator('fecha', new sfValidatorString(array(
        'required' => false,
      )));
	  
      $this->setValidator('direccion', new sfValidatorString(array(
        'required' => false,
      )));
      $this->setValidator('descripcion', new sfValidatorString(array(
        'required' => false,
      )));

      $this->setValidator('audio', new sfValidatorFile(array(
        'mime_types' => array('audio/mpeg'),
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
	  
	 
      $this->setValidator('archivo1', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
      $this->setValidator('archivo2', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
      $this->setValidator('archivo3', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
      $this->setValidator('archivo4', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
      $this->setValidator('archivo5', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
      $this->setValidator('archivo6', new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/ubicaciones',
        'required' => false,
      )));
  }
}
