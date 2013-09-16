<?php
App::uses('AppController', 'Controller');
/**
 * Responses Controller
 *
 * @property Response $Response
 */
class ResponsesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function text()
    {
        $this->layout = 'ajax';
	    $this->set('responses', $this->request->data['value']);
	}
}