<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    	$albums = new Application_Model_DbTable_Album();
    	$this->view->albums = $albums->fetchAll();
    	
    }


}

