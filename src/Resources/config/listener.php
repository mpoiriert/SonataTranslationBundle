<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Sonata\TranslationBundle\EventListener\LocaleSwitcherListener;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // Use "service" function for creating references to services when dropping support for Symfony 4.4
    $containerConfigurator->services()

        ->set('sonata_translation.listener.locale_switcher', LocaleSwitcherListener::class)
            ->tag('kernel.event_listener', [
                'event' => 'sonata.block.event.sonata.admin.edit.form.top',
                'method' => 'onBlock',
            ])
            ->tag('kernel.event_listener', [
                'event' => 'sonata.block.event.sonata.admin.show.top',
                'method' => 'onBlock',
            ])
            ->tag('kernel.event_listener', [
                'event' => 'sonata.block.event.sonata.admin.list.table.top',
                'method' => 'onBlock',
            ]);
};
