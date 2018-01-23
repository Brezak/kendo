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
use Riesenia\Kendo\Kendo;

class BaseSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('kendoGrid');
    }

    public function it_is_initializable_with_json_serializable()
    {
        $this->shouldHaveType('Riesenia\Kendo\Widget\Base');
        $this->shouldImplement('\JsonSerializable');
    }

    public function it_has_correct_name()
    {
        $this->__toString()->shouldReturn('new kendoGrid(null);');
    }

    public function it_can_be_bound()
    {
        $this->bindTo('#id')->__toString()->shouldReturn('$("#id").kendoGrid(null);');
    }

    public function it_can_set_data()
    {
        $this->set('property', 'value')->get('property')->shouldReturn('value');
    }

    public function it_can_set_data_by_array()
    {
        $this->set(['property1' => 'value1', 'property2' => 'value2']);
        $this->get('property1')->shouldReturn('value1');
        $this->get('property2')->shouldReturn('value2');
    }

    public function it_can_add_to_data()
    {
        $this->add('property', 'key1', 'value1')->add('property', 'key2', 'value2')->get('property')->shouldReturn(['key1' => 'value1', 'key2' => 'value2']);
    }

    public function it_can_add_to_data_with_null_key()
    {
        $this->add('property', null, 'value1')->add('property', null, 'value2')->get('property')->shouldReturn([0 => 'value1', 1 => 'value2']);
    }

    public function it_json_encodes_data()
    {
        $this->set('property', 'value')->__toString()->shouldReturn('new kendoGrid({"property":"value"});');
    }

    public function it_does_not_json_encode_functions()
    {
        $this->set('property', Kendo::js('function () { str = "ľščťžýáíé"; }'))->__toString()->shouldReturn('new kendoGrid({"property":function () { str = "ľščťžýáíé"; }});');
    }

    public function it_encodes_passed_object_properly()
    {
        $this->set('dataSource', Kendo::createDataSource()->set('property', Kendo::js('function () {
            void(0);
        }')))->__toString()->shouldReturn('new kendoGrid({"dataSource":{"property":function () {
            void(0);
        }}});');
    }
}
