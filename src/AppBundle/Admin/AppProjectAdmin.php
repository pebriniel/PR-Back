<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AppProjectAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('lang')
            ->add('name')
            ->add('description')
            ->add('bandeauproject')
            ->add('logoproject')
            ->add('date')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper
            ->add('id')
            ->add('lang')
            ->add('name')
            ->add('description')
            ->add('date')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->add('technology', 'sonata_type_model', array(
                'required' => false,
                'expanded' => false,
                'multiple' => true,
                'btn_add' => false,
                'property' => 'name'
            ))
            ->add('screenshot', 'sonata_type_model', array(
                'required' => false,
                'expanded' => false,
                'multiple' => true,
                'btn_add' => false,
                'property' => 'name'
            ))
            ->add('lang')
            ->add('name')
            ->add('description')
            ->add('bandeauproject')
            ->add('logoproject')
            ->add('date')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('lang')
            ->add('name')
            ->add('description')
            ->add('bandeauproject')
            ->add('logoproject')
            ->add('date')
        ;
    }
}
