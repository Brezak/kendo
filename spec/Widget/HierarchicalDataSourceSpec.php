<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace spec\Riesenia\Kendo\Widget;

use PhpSpec\ObjectBehavior;

class HierarchicalDataSourceSpec extends ObjectBehavior
{
    public function it_is_initializable_and_extends_data_source()
    {
        $this->shouldHaveType('Riesenia\Kendo\Widget\HierarchicalDataSource');
        $this->shouldHaveType('Riesenia\Kendo\Widget\DataSource');
    }

    public function it_renders_correctly()
    {
        $this->__toString()->shouldReturn('new kendo.data.HierarchicalDataSource(null);');
    }
}
