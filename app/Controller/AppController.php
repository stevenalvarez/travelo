<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	// added the debug toolkit
	// sessions support
	// authorization for login and logut redirect
	public $components = array(
        'Cookie',
		'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Usuario',
                    'fields' => array('username' => 'email', 'password' => 'password')
                )
            ),
            'loginAction' => array('controller' => 'pages', 'action' => 'display', 'admin_login'),
            'loginRedirect' => "/admin",
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
			'authError' => 'You must be logged in to view this page.',
			'loginError' => 'Invalid Email or Password entered, please try again.',
            'authorize' => array('Controller') 
        )
    );
	
    function beforeFilter()
    {
        /**
         * Cambia el layout segun el prefijo, ejemplo: admin
        **/
        if($this->params["prefix"]=='admin'){
            
            $user_auth = $this->Session->read('Auth.User');
            if($user_auth){
                if(!$this->isAuthorized($user_auth)){
                    $this->redirect($this->Auth->redirect());
                }
            }else{
                $this->redirect($this->Auth->redirect());
            }
            $this->layout = 'admin';
            $this->Auth->allow();
                        
        }else if(isset($this->params['pass'][0]) && $this->params['pass'][0] == "admin_login"){
            $user_auth = $this->Session->read('Auth.User');
            if($user_auth){
                if($this->isAuthorized($user_auth)){
                    $this->redirect(array('admin' => true, 'controller' => 'usuarios', 'action' => 'index'));
                }
            }
            
            $this->layout = 'login';
            $this->Auth->allow('display','login');
            
        }else{            
            /**
             * Le permitimos solo las acciones publicas en el frontend (home|contacto,etc)
            **/
            $this->Auth->allow('display','login');
        }
    }    
	
	public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['tipo']) && $user['tipo'] === 'admin') {
            return true;
        }
    
        // Default deny
        return false;
	}
	
}