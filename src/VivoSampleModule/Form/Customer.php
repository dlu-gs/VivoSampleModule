<?php
namespace VivoSampleModule\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

/**
 * Customer
 * Customer form
 */
class Customer extends Form
{
    public function __construct()
    {
        parent::__construct('customer');

        $this->setAttribute('method', 'post');
        $this->setInputFilter(new InputFilter());

        //Customer fieldset
        $this->add(array(
            'type'      => 'VivoSampleModule\Form\Fieldset\Customer',
            'name'      => 'customer',
            'options'   => array(
                'use_as_base_fieldset'  => true,
            ),
        ));

        //Submit
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Login',
            ),
        ));
    }
}