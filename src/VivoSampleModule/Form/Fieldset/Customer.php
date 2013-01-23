<?php
namespace VivoSampleModule\Form\Fieldset;

use Zend\Form\Fieldset;

/**
 * Customer
 * Customer fieldset
 */
class Customer extends Fieldset
{
    public function __construct()
    {
        parent::__construct('customer');

        $this->setLabel('Customer');

        //Person
        $this->add(array(
            'type'      => 'VivoSampleModule\Form\Fieldset\Person',
            'name'      => 'person',
            'options'   => array(
                'label'     => 'Person',
            ),
        ));

        //Address
        $this->add(array(
            'type'      => 'VivoSampleModule\Form\Fieldset\Address',
            'name'      => 'address',
            'options'   => array(
                'label'     => 'Address',
            ),
        ));
    }
}