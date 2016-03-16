<?php

namespace Victoire\Widget\MailchimpNewsletterBundle\Resolver;

use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;

class WidgetMailchimpNewsletterContentResolver extends BaseWidgetContentResolver
{
    protected $mailchimpFormBaseUrl;

    /**
     * @param string $mailchimpFormBaseUrl
     */
    public function __construct($mailchimpFormBaseUrl)
    {
        $this->mailchimpFormBaseUrl = $mailchimpFormBaseUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetStaticContent(Widget $widget)
    {
        $parameters = parent::getWidgetStaticContent($widget);

        //appventus.us8.list-manage.com/subscribe/post?u=UID&amp;id=listId
        $parameters['mailchimpFormUrl'] = sprintf(
            '%s&id=%s',
            $this->mailchimpFormBaseUrl,
            $parameters['listId']
        );

        return $parameters;
    }
}
