<?php

namespace Resume\ResumeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResumeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null,array('attr' => array('class'=>'form-control')))
            ->add('label',null,['attr' => ['class' => 'form-control']])
            ->add('picture', null,['attr' => ['class' => 'form-control']])
            ->add('email',null,['attr' => ['class' => 'form-control']])
            ->add('phone',null,['attr' => ['class' => 'form-control']])
            ->add('website',null,['attr' => ['class' => 'form-control']])
            ->add('summary',null,['attr' => ['class' => 'form-control']]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Resume\ResumeBundle\Entity\Resume'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'resume_resumebundle_resume';
    }


}
