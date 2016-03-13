<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class PostAdmin extends Admin
{

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('comments', $this->getRouterIdParameter().'/comments');
    }
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array('label' => 'Title'))
            ->add('content', 'text', array('label' => 'Content'))

          //  ->add('content', 'entity', array('class' => 'AppBundle\Entity\Post'))
          //  ->add('data', 'text') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('content')
            ->add('date')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('content')
            ->add('date')

        //     ->add('_action', 'actions', array(
        //     'actions' => array(
        //         'comments' => array('template' => 'AppBundle:CRUD:list_comments.html.twig')
        //     )
        // ))
        ->add('comments')
          //  ->add('comments', 'entity',  array('class' => 'AppBundle\Entity\Comment'))
        ;
    }
}
