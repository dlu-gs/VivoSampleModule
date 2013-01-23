<?php
namespace VivoSampleModule\Form\Fieldset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

/**
 * Address
 * Address fieldset
 */
class Address extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('address');

        $this->setLabel('Address');

        //Street
        $this->add(array(
            'name'      => 'street',
            'options'   => array(
                'label'     => 'Street',
            ),
            'attributes'    => array(
                'type'          => 'text',
                'id'            => 'street',
            ),
        ));

        //Town
        $this->add(array(
            'name'      => 'town',
            'options'   => array(
                'label'     => 'Town',
            ),
            'attributes'    => array(
                'type'          => 'text',
            ),
        ));

        //Zip
        $this->add(array(
            'name'      => 'zip',
            'options'   => array(
                'label'     => 'Post Code',
            ),
            'attributes'    => array(
                'type'          => 'text',
                'id'            => 'zip',
            ),
        ));
    }

    /**
     * Should return an array specification compatible with
     * {@link Zend\InputFilter\Factory::createInputFilter()}.
     * @return array
     */
    public function getInputFilterSpecification()
    {
        return array(
            'zip'  => array(
                'required'  => true,
                'validators'    => array(
                    array(
                        'name' => 'not_empty',
                    ),
                    array(
                        'name' => 'string_length',
                        'options' => array(
                            'min' => 4,
                            'max' => 7,
                        ),
                    ),
                    array(
                        'name' => 'digits',
                    ),
                ),
            ),
        );
    }

}