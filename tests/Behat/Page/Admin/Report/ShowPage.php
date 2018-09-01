<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Odiseo\SyliusReportPlugin\Behat\Page\Admin\Report;

use Sylius\Behat\Page\SymfonyPage;

class ShowPage extends SymfonyPage implements ShowPageInterface
{
    /**
     * {@inheritdoc}
     */
    public function getHeaderTitle()
    {
        return $this->getElement('header_title')->getText();
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteName()
    {
        return 'odiseo_sylius_report_admin_report_show';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefinedElements()
    {
        return array_merge(parent::getDefinedElements(), [
            'header_title' => '#wrapper .header .content',
        ]);
    }
}
