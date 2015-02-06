<?php

/**
 * ubicacion actions.
 *
 * @package    rutatragica
 * @subpackage ubicacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ubicacionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ubicacions = Doctrine_Core::getTable('Ubicacion')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ubicacion = Doctrine_Core::getTable('Ubicacion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->ubicacion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UbicacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UbicacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ubicacion = Doctrine_Core::getTable('Ubicacion')->find(array($request->getParameter('id'))), sprintf('Object ubicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new UbicacionForm($ubicacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ubicacion = Doctrine_Core::getTable('Ubicacion')->find(array($request->getParameter('id'))), sprintf('Object ubicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new UbicacionForm($ubicacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ubicacion = Doctrine_Core::getTable('Ubicacion')->find(array($request->getParameter('id'))), sprintf('Object ubicacion does not exist (%s).', $request->getParameter('id')));
    $ubicacion->delete();

    $this->redirect('ubicacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ubicacion = $form->save();

      $this->redirect('ubicacion/index');
      //$this->redirect('ubicacion/edit?id='.$ubicacion->getId());
    }
  }
}
