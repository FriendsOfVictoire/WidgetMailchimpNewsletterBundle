<?php

namespace Victoire\Widget\MailchimpNewsletterBundle\Form;

use Hype\MailchimpBundle\Mailchimp\MailChimp;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\FormBundle\Form\Type\FontAwesomePickerType;

/**
 * WidgetMailchimpNewsletter form type.
 */
class WidgetMailchimpNewsletterType extends WidgetType
{
    protected $mailchimp;

    /**
     * @param MailChimp $mailchimp
     */
    public function __construct(MailChimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $lists = [];
        $_lists = $this->mailchimp->getList()->lists();
        foreach ($_lists['data'] as $list) {
            $lists[$list['name']] = $list['id'];
        }

        $builder
            ->add('listId', ChoiceType::class, [
                'label'   => 'widget_mailchimpnewsletter.form.listId.label',
                'choices' => $lists,
                'choices_as_values' => true,
            ])
            ->add('buttonLabel', null, [
                'label' => 'widget_mailchimpnewsletter.form.buttonLabel.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.button.placeholder',
                ]
            ])
            ->add('emailPlaceholder', null, [
                'label' => 'widget_mailchimpnewsletter.form.emailPlaceholder.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.email.placeholder',
                ]
            ])
            ->add('emailLabel', null, [
                'label' => 'widget_mailchimpnewsletter.form.emailLabel.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.email.placeholder',
                ]
            ])
            ->add('firstnamePlaceholder', null, [
                'label' => 'widget_mailchimpnewsletter.form.firstnamePlaceholder.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.firstname.placeholder',
                ]
            ])
            ->add('firstnameLabel', null, [
                'label' => 'widget_mailchimpnewsletter.form.firstnameLabel.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.firstname.placeholder',
                ]
            ])
            ->add('lastnamePlaceholder', null, [
                'label' => 'widget_mailchimpnewsletter.form.lastnamePlaceholder.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.lastname.placeholder',
                ]
            ])
            ->add('lastnameLabel', null, [
                'label' => 'widget_mailchimpnewsletter.form.lastnameLabel.label',
                'attr' => [
                    'placeholder' => 'victoire_mailchimp_newsletter.show.signupForm.lastname.placeholder',
                ]
            ])
            ->add('icon', FontAwesomePickerType::class, [
                'label' => 'widget_mailchimpnewsletter.form.icon.label',
            ])
            ->add('enableFirstName', null, [
                'label' => 'widget_mailchimpnewsletter.form.enableFirstName.label',
            ])
            ->add('enableLastName', null, [
                'label' => 'widget_mailchimpnewsletter.form.enableLastName.label',
            ])
            ->add('congratulationMessage', TextareaType::class, [
                'label' => 'widget_mailchimpnewsletter.form.congratulationMessage.label',
            ]);

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\MailchimpNewsletterBundle\Entity\WidgetMailchimpNewsletter',
            'widget'             => 'MailchimpNewsletter',
            'translation_domain' => 'victoire',
        ]);
    }
}
