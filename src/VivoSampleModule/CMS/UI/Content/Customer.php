<?php
namespace VivoSampleModule\CMS\UI\Content;

use VivoSampleModule\Form\Customer as CustomerForm;

use Vivo\CMS\UI\AbstractForm;

use Zend\Form\Form as ZfForm;
use Zend\Http\PhpEnvironment\Request;

class Customer extends AbstractForm
{
    public function init()
    {
        parent::init();
        $form   = $this->getForm();
        $date   = new \DateTime();
        $data   = array(
            'customer'  => array(
                'dob'       =>   $date,
            ),
        );
        $form->setData($data);
    }

    public function view()
    {
        $viewModel  = parent::view();
        $viewModel->doc = $this->document;
        return $viewModel;
    }

    public function submit()
    {
        $form   = $this->getForm();
        if ($form->isValid()) {
            //Form is valid
            $validatedData  = $form->getData();
            \Zend\Debug\Debug::dump($validatedData);
            die('Debug die');
        }
    }

    public function autocomplete()
    {
//        $data   = array(
//            array(
//                'value' => 'dlouha',
//                'label' => 'Dlouhá',
//            ),
//            array(
//                'value' => 'kratka',
//                'label' => 'Krátká',
//            ),
//        );
        $term   = $this->request->getQuery('term');
        $data   = array($term, 'Dlouhá', 'Krátká', 'Široká', 'Úzká');
        $jsonModel  = new \Zend\View\Model\JsonModel();
        $jsonModel->setVariables($data);
        return $jsonModel;
    }

    /**
     * Creates ZF form and returns it
     * Factory method
     * @return ZfForm
     */
    protected function doGetForm()
    {
        $form   = new CustomerForm();
        //Set form name if needed
//        $form->setName('customer_form');
        //Prepend form name to elements if needed
//        $form->setWrapElements(true);
        return $form;
    }
}
