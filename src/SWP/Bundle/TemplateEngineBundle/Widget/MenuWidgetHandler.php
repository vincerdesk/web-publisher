<?php

/*
 * This file is part of the Superdesk Web Publisher Template Engine Bundle.
 *
 * Copyright 2015 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2015 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\TemplateEngineBundle\Widget;

class MenuWidgetHandler extends TemplatingWidgetHandler
{
    protected static $expectedParameters = [
        'menu_name' => [
            'type' => 'string',
        ],
    ];

    /**
     * Render widget content.
     *
     * @return string
     */
    public function render()
    {
        return $this->renderTemplate('menu.html.twig');
    }
}
