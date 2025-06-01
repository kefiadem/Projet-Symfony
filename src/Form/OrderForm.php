<?php

namespace App\Form;

use App\Entity\Orders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // <-- Add this

class OrderForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('shipping_address',TextType::class, [
                'label' => 'Shipping Address',
            ])
            ->add('buyerEmail', TextType::class, [
                'label' => 'Email',
            ])
            ->add('buyerPhone', TextType::class, [
                'label' => 'Phone Number',
            ])
            ->add('buyerFullName', TextType::class, [
                'label' => 'Full Name',
                'required' => false
            ])
            ->add('paymentMethod', ChoiceType::class, [
                'choices' => Orders::PAYMENT_METHODS,
                'expanded' => true,
                'multiple' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Orders::class,
        ]);
    }
}
