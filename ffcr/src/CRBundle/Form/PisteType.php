<?php

namespace CRBundle\Form;

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
        $builder->add('ville', TextType::class, ['attr' => ['placeholder' => 'Ville']])
            ->add('nom', TextType::class, ['attr' => ['placeholder' => 'Nom de la piste']])
            ->add('coordx', TextType::class, ['attr' => ['placeholder' => 'Coordonnées ']])
            ->add('coordy', TextType::class, ['attr' => ['placeholder' => 'Ville']])
            ->add('cheese', TextType::class, ['attr' => ['placeholder' => 'Ville']])
            ->add('Soumettre', SubmitType::class, ['attr' => ['placeholder' => 'Ville']]);

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
