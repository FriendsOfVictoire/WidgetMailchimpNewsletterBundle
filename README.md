Victoire MailchimpNewsletter Widget
============

Need to add a Mmailchimp Newsletter in a victoire website ?

First you need to have a valid Symfony2 Victoire edition.

Then run :
```
    php composer.phar require friendsofvictoire/mailchimpnewsletter-widget
```

Declare the bundle in your AppKernel:

```php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\MailchimpNewsletterBundle\VictoireWidgetMailchimpNewsletterBundle(),
            );

            return $bundles;
        }
    }
```

Be sure the HypeMailChimpBundle is correctly installed by reading the [README](https://github.com/AhmedSamy/HypeMailChimpBundle).