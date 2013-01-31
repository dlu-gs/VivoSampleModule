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

        //DOB
        $this->add(array(
            'type'      => 'Zend\Form\Element\DateTime',
            'name'      => 'dob',
            'options'   => array(
                'label'     => 'Date of birth',
            ),
        ));
        /** @var $dob \Zend\Form\Element\DateTime */
        $dob    = $this->get('dob');
        $dob->setFormat('Y');
    }
}