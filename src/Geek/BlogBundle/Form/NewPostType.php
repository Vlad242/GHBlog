<?php

namespace Geek\BlogBundle\Form;

use Geek\BlogBundle\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Geek\BlogBundle\Entity\Category;

class NewPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'Name',
                'label' => 'Category'
            ])
            ->add('title', TextType::class, [
                'label' => 'Title'
            ])
            ->add('content' , TextareaType::class, [
                'label' => 'Content'
            ])
            ->add('submit', SubmitType::class, ['label' => 'add post'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class
        ]);
    }
}
