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

namespace Sonata\AdminBundle\Builder;

use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Datagrid\DatagridInterface;
use Sonata\AdminBundle\FieldDescription\FieldDescriptionInterface;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
interface DatagridBuilderInterface extends BuilderInterface
{
    /**
     * @param string|null            $type
     * @param AdminInterface<object> $admin
     */
    public function addFilter(
        DatagridInterface $datagrid,
        $type,
        FieldDescriptionInterface $fieldDescription,
        AdminInterface $admin
    );

    /**
     * @param AdminInterface<object> $admin
     * @param array<string, mixed>   $values
     *
     * @return DatagridInterface
     */
    public function getBaseDatagrid(AdminInterface $admin, array $values = []);
}

interface_exists(FieldDescriptionInterface::class);
