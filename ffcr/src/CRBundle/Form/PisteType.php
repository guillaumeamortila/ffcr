<?php

namespace CRBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PisteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ville', TextType::class, ['label' => false])
            ->add('nom', TextType::class, ['label' => false])
            ->add('coordx', TextType::class, ['label' => false])
            ->add('coordy', TextType::class, ['label' => false])
            ->add('cheese', TextType::class, ['label' => false, 'required' => false])
            ->add('level', ChoiceType::class, array('label' => false,
                'choices' => array('Blanche' => 'blanche', 'Verte' => 'verte', 'Bleue' => 'bleue', 'Rouge' => 'rouge', 'Noire' => 'noire')
            ))
            ->add('description', TextareaType::class, ['label' => false])
            ->add('date', DateType::class, ['label' => false])
            ->add('Soumettre', SubmitType::class, ['attr' => ['class' => 'form-control button btn ']]);

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRBundle\Entity\Piste'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'crbundle_piste';
    }


}
