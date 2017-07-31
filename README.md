Victoire MailchimpNewsletter Widget
============

## What is the purpose of this bundle

This bundle gives you access to the *MailChimp Newsletter Widget*.

## Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

## Install the bundle :

Run the following composer command :

    php composer.phar require friendsofvictoire/mailchimpnewsletter-widget

### Reminder

Declare the bundle in your AppKernel:

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

## Preset

Be sure the HypeMailChimpBundle is correctly installed by reading the [README](https://github.com/AhmedSamy/HypeMailChimpBundle).
