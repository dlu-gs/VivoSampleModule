<?php
/**
 * SampleModule configuration file
 *
 */
return array(
    'templates' => array (
        'template_map' => array(
            'VivoSampleModule\CMS\UI\Content\Customer'
                => __DIR__.'/../view/VivoSampleModule/CMS/UI/Content/Customer.phtml',
        ),
    ),
    'component_mapping' => array (
        'front_component' => array (
            'VivoSampleModule\CMS\Model\Content\Customer'
                => 'VivoSampleModule\CMS\UI\Content\Customer',
        ),
    ),
    'service_manager' => array (
        //configuration of service manager
        'invokables' => array (
        ),
        'factories' => array (
            'VivoSampleModule\CMS\UI\Content\Customer'
                => 'VivoSampleModule\CMS\Service\UI\Content\CustomerFactory',
        ),
        'aliases' => array(
        ),
        'shared' => array(
        ),
        'initializers' => array(
        ),
    ),
);
