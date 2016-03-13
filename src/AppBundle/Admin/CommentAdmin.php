<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentAdmin extends Admin
{
  //  protected $parentAssociationMapping = 'post';

    // OR

    public function getParentAssociationMapping()
    {
        return 'post';
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('author', 'text', array('label' => 'Author'))
            ->add('content', 'text', array('label' => 'Content'))

          //  ->add('content', 'entity', array('class' => 'AppBundle\Entity\Post'))
          //  ->add('data', 'text') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('author')
            ->add('content')
            ->add('date')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('author')
            ->add('content')
            ->add('date')
        ;
    }
}
