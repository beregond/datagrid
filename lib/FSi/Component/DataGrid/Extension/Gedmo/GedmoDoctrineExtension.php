<?php

/**
 * (c) Fabryka Stron Internetowych sp. z o.o <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Component\DataGrid\Extension\Gedmo;

use Doctrine\Common\Persistence\ManagerRegistry;
use FSi\Component\DataGrid\DataGridAbstractExtension;
use FSi\Component\DataGrid\Extension\Gedmo\ColumnType;

class GedmoDoctrineExtension extends DataGridAbstractExtension
{
    protected $registry;

    public function __construct(ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * {@inheritDoc}
     */
    protected function loadColumnTypes()
    {
        return array(
            new ColumnType\Tree($this->registry),
        );
    }
}
