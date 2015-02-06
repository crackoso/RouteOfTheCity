<?php

/**
 * ruta actions.
 *
 * @package    rutatragica
 * @subpackage ruta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rutaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rutas = Doctrine_Core::getTable('Ruta')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ruta = Doctrine_Core::getTable('Ruta')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->ruta);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RutaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RutaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ruta = Doctrine_Core::getTable('Ruta')->find(array($request->getParameter('id'))), sprintf('Object ruta does not exist (%s).', $request->getParameter('id')));
    $this->form = new RutaForm($ruta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ruta = Doctrine_Core::getTable('Ruta')->find(array($request->getParameter('id'))), sprintf('Object ruta does not exist (%s).', $request->getParameter('id')));
    $this->form = new RutaForm($ruta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ruta = Doctrine_Core::getTable('Ruta')->find(array($request->getParameter('id'))), sprintf('Object ruta does not exist (%s).', $request->getParameter('id')));
    $ruta->delete();

    $this->redirect('ruta/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ruta = $form->save();

  //    $this->redirect('ruta/edit?id='.$ruta->getId());
      $this->redirect('ruta/index');
    }
  }
}
