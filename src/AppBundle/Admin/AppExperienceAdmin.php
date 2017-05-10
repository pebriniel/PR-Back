<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AppExperienceAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('category')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('type')
            ->add('ordernumber')
            ->add('description')
            ->add('workplace')
            ->add('city')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('category')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('type')
            ->add('ordernumber')
            ->add('description')
            ->add('workplace')
            ->add('city')
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
        ->add('company', 'sonata_type_model', array(
                'expanded' => true,
                'required' => true,
                'multiple' => true,
                'btn_add' => true,
                'property' => 'company'
            ))
            ->add('category')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('type')
            ->add('ordernumber')
            ->add('description')
            ->add('workplace')
            ->add('city')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('category')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('type')
            ->add('ordernumber')
            ->add('description')
            ->add('workplace')
            ->add('city')
        ;
    }
}
