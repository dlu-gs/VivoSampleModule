<?php
namespace VivoSampleModule\Form\Fieldset;

use Zend\Form\Fieldset;

/**
 * Person
 * Person fieldset
 */
class Person extends Fieldset
{
    public function __construct()
    {
        parent::__construct('person');

        $this->setLabel('Person');

        //First name
        $this->add(array(
            'name'      => 'first_name',
            'options'   => array(
                'label'     => 'First name',
            ),
            'attributes'    => array(
                'type'          => 'text',
            ),
        ));

        //Last name
        $this->add(array(
            'name'      => 'last_name',
            'options'   => array(
                'label'     => 'Last name',
            ),
            'attributes'    => array(
                'type'          => 'text',
            ),
        ));

        //Degrees
        $this->add(array(
            'name'      => 'degrees',
            'options'   => array(
                'label'     => 'Degrees',
            ),
            'attributes'    => array(
                'type'          => 'text',
            ),
        ));
    }
}