<?php

declare(strict_types=1);

namespace Odiseo\SyliusReportPlugin\Form\Type\DataFetcher;

use Odiseo\SyliusReportPlugin\Form\Builder\QueryFilterFormBuilderInterface;
use Symfony\Component\Form\AbstractType;

abstract class BaseDataFetcherType extends AbstractType
{
    protected QueryFilterFormBuilderInterface $queryFilterFormBuilder;

    public function __construct(QueryFilterFormBuilderInterface $queryFilterFormBuilder)
    {
        $this->queryFilterFormBuilder = $queryFilterFormBuilder;
    }
}
