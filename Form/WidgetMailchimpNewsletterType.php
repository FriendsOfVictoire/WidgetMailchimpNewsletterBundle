<?php

namespace Victoire\Widget\MailchimpNewsletterBundle\Form;

use Hype\MailchimpBundle\Mailchimp\MailChimp;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

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
            $lists[$list['id']] = $list['name'];
        }

        $builder
            ->add('listId', 'choice', [
                    'label'   => 'widget_mailchimpnewsletter.form.listId.label',
                    'choices' => $lists,
            ])
            ->add('buttonLabel', null, [
                    'label' => 'widget_mailchimpnewsletter.form.buttonLabel.label',
            ])
            ->add('icon', 'font_awesome_picker', [
                    'label' => 'widget_mailchimpnewsletter.form.icon.label',
            ])
            ->add('enableFirstName', null, [
                    'label' => 'widget_mailchimpnewsletter.form.enableFirstName.label',
            ])
            ->add('enableLastName', null, [
                    'label' => 'widget_mailchimpnewsletter.form.enableLastName.label',
            ])
            ->add('congratulationMessage', null, [
                    'label' => 'widget_mailchimpnewsletter.form.congratulationMessage.label',
            ]);

        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetMailchimpNewsletter entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\MailchimpNewsletterBundle\Entity\WidgetMailchimpNewsletter',
            'widget'             => 'MailchimpNewsletter',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_mailchimpnewsletter';
    }
}
