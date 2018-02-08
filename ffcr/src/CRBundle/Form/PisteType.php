<?php

namespace CRBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        $builder->add('ville', TextType::class, ['attr' => ['placeholder' => 'Nom de la ville, du lieu *']])
            ->add('nom', TextType::class, ['attr' => ['placeholder' => 'Nom de la piste *']])
            ->add('coordx', TextType::class, ['attr' => ['placeholder' => 'Latitude (Coordonnées exactes) *']])
            ->add('coordy', TextType::class, ['attr' => ['placeholder' => 'Longitude (Coordonnées exactes) *']])
            ->add('cheese', TextType::class, ['required' => false, 'attr' => ['placeholder' => 'Fromage sponsor']])
            ->add('level', ChoiceType::class, array(
                'choices' => array('Blanche' => 0, 'Verte' => 1, 'Bleue' => 2, 'Rouge' => 3, 'Noire' => 4)
            ))
            ->add('Soumettre', SubmitType::class, ['attr' => ['class' => 'form-control btn btn-success']]);

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
