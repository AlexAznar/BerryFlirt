<?php

namespace BlueFlirt\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mac')
            ->add('nickname')
            ->add('comment')
            ->add('age')
            ->add('email')
            ->add('avatar')
            ->add('verifyCode')
            ->add('active')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlueFlirt\ApiBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'blueflirt_apibundle_usertype';
    }
}
