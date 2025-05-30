<?php

namespace App\Form;


use Symfony\Component\Form\Extension\Core\Type\FileType;
//importing file : 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\MenProducts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
class ProductsForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('category')
            ->add('image', FileType::class, [
                'label' => "The image of the product",

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using attributes
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File(
                        maxSize: '1024k',
                        extensions: ['jpg','png','gif'],
                        extensionsMessage: 'Please upload a valid PDF document',
                    )
                ],
            ])
            ->add('stock')
            ->add('ReleaseDate')
            ->add('review')
            ->add('Add-Update', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MenProducts::class,
        ]);
    }
}
