<?php

namespace AssoB2GBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\Common\Persistence\ObjectManager;

class EvenementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('systName')
            ->add('commanditaire')
            ->add('description')
            ->add('role')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('lieu')
            ->add('membre', 'entity', array(
			    'class' => 'AssoB2GBundle:Membre',
			    'choice_label' => function ($membre) {
			        return ($membre->getNom().' '.$membre->getPrenom());
			    },
			    'multiple'=>true,
			    'expanded'=>true,
			));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AssoB2GBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'assob2gbundle_evenement';
    }
}
