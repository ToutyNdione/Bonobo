<?php

namespace BP\BonoboBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('age')->add('famille')->add('race')->add('nourriture');
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    /**
     * {@inheritdoc}
     */
    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults(array(
    //         'data_class' => 'AppBundle\Entity\User'
    //     ));
    // }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


}
