Advanced Configuration
======================

By default ``SonataTranslation`` provides a set of default interfaces you should implement to see your models
automatically handled.
If you have specific needs and can't use them, but this bundle gives you other ways to use it.

Here is an example with Gedmo :

.. configuration-block::

    .. code-block:: yaml

        # config/packages/sonata_translation.yaml

        sonata_translation:
            gedmo:
                enabled: true
                implements:

                    # list your custom interfaces here
                    - MyProject\MyBundle\Model\CustomTranslatableInterface
                instanceof:

                    # list your specific models or abstract classes here
                    - MyProject\MyBundle\Model\AbstractCustomTranslatable
