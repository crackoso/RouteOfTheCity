<?php

/**
 * rutaUbicaciones actions.
 *
 * @package    rutatragica
 * @subpackage rutaUbicaciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rutaUbicacionesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ruta_ubicacioness = Doctrine_Core::getTable('RutaUbicaciones')
      ->createQuery('a')
      ->execute();
    
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ruta_ubicaciones = Doctrine_Core::getTable('RutaUbicaciones')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->ruta_ubicaciones);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RutaUbicacionesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RutaUbicacionesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ruta_ubicaciones = Doctrine_Core::getTable('RutaUbicaciones')->find(array($request->getParameter('id'))), sprintf('Object ruta_ubicaciones does not exist (%s).', $request->getParameter('id')));
    $this->form = new RutaUbicacionesForm($ruta_ubicaciones);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ruta_ubicaciones = Doctrine_Core::getTable('RutaUbicaciones')->find(array($request->getParameter('id'))), sprintf('Object ruta_ubicaciones does not exist (%s).', $request->getParameter('id')));
    $this->form = new RutaUbicacionesForm($ruta_ubicaciones);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ruta_ubicaciones = Doctrine_Core::getTable('RutaUbicaciones')->find(array($request->getParameter('id'))), sprintf('Object ruta_ubicaciones does not exist (%s).', $request->getParameter('id')));
    $ruta_ubicaciones->delete();

    $this->redirect('rutaUbicaciones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ruta_ubicaciones = $form->save();

  //    $this->redirect('rutaUbicaciones/edit?id='.$ruta_ubicaciones->getId());
      $this->redirect('rutaUbicaciones/index');
    }
  }
}
