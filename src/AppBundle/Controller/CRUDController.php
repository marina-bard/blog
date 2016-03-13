<?php
// src/AppBundle/Controller/CRUDController.php

namespace AppBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;

class CRUDController extends Controller
{
    /*public function showCommentsAction()
    {
        $object = $this->admin->getSubject();

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        return new RedirectResponse($this->admin->generateUrl('list'));

        // if you have a filtered list and want to keep your filters after the redirect
        // return new RedirectResponse($this->admin->generateUrl('list', $this->admin->getFilterParameters()));
    }*/
}
