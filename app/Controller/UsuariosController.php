<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), $layout = 'default', $params = array("class" => "success"));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		}
		$pais = $this->Usuario->Paise->find('list');
		$ciudads = $this->Usuario->Ciudade->find('list');
		$this->set(compact('pais', 'ciudads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), $layout = 'default', $params = array("class" => "success"));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
		}
		$pais = $this->Usuario->Paise->find('list');
		$ciudads = $this->Usuario->Ciudade->find('list');
		$this->set(compact('pais', 'ciudads'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($tipo = "") {
		$this->Usuario->recursive = 0;
        $conditions["Usuario.id <>"] = "1";
        if($tipo != ""){
            $conditions["Usuario.tipo"] = $tipo;
        }
        $this->paginate = array(
            'conditions' => $conditions,
        );        
		$this->set('usuarios', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
            
            //imagen
            $imagen = $this->request->data["Usuario"]["imagen"];
            if(!empty($imagen['name'])) {
                $this->Image = $this->Components->load("Image");
                
                $this->request->data["Usuario"]["imagen"] = $this->Image->upload($this->request->data["Usuario"]["imagen"]);
                $this->Image->copia_optimizada('usuarios/',2500,2500);
                $this->Image->copia_optimizada('usuarios/thumbnails/',120,120);
                $this->Image->borrar_tmp();
            }else{
                $this->request->data["Usuario"]["imagen"] = "";
            }
            if(isset($this->request->data["Usuario"]["nombre"])){
                $title = trim($this->request->data["Usuario"]["nombre"]);
                $title.= isset($this->request->data["Usuario"]["apellidos"])? " ".trim($this->request->data["Usuario"]["apellidos"]):"";
                $this->request->data["Usuario"]["title"] = $title;
            }else{
                $title = 'Anónimo';
                $this->request->data["Usuario"]["title"] = $title;
            }
            
            $this->request->data["Usuario"]["urlamigable"] = $this->Usuario->dame_url_limpia($title);
			
            if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), $layout = 'default', $params = array("class" => "success"));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		}
		$pais = $this->Usuario->Paise->find('list');
		$ciudads = $this->Usuario->Ciudade->find('list',array("conditions"=> array("Ciudade.pais_id" => "28")));
		$this->set(compact('pais', 'ciudads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
		  
            //imagen
            $name_image = $this->request->data["Usuario"]["imagen"]['name'];
            //Si existe imagen seleccionada se la coloca la nueva y se borra la antigua
            if($name_image != ""){
                $this->Image=$this->Components->load("Image");
                $this->request->data["Usuario"]["imagen"]= $this->Image->upload($this->request->data["Usuario"]["imagen"]);
                $this->Image->copia_optimizada('usuarios/',2500,2500);
                $this->Image->copia_optimizada('usuarios/thumbnails/',120,120);
                $this->Image->borrar_tmp();
                
    			//Si actualiza la imagen borramos la antigua la grande y la pequeña
                $old_image = $this->request->data["Usuario"]["imagen_old"];
                $path_image = WWW_ROOT . DS ."img/usuarios/".$old_image;
                if (is_file($path_image)) {
                    unlink($path_image);
                }
                
                $path_image_thumbnails = WWW_ROOT . DS ."img/usuarios/thumbnails/".$old_image;
                if (is_file($path_image_thumbnails)) {
                    unlink($path_image_thumbnails);
                }
                
            }else{
                $this->request->data["Usuario"]["imagen"] = $this->request->data["Usuario"]["imagen_old"];
            }
            
            unset($this->request->data["Usuario"]["imagen_old"]);
            
            if(isset($this->request->data["Usuario"]["nombre"])){
                $title = trim($this->request->data["Usuario"]["nombre"]);
                $title.= isset($this->request->data["Usuario"]["apellidos"])? " ".trim($this->request->data["Usuario"]["apellidos"]):"";
                $this->request->data["Usuario"]["title"] = $title;
            }else{
                $title = 'Anónimo';
                $this->request->data["Usuario"]["title"] = $title;
            }
            
            $this->request->data["Usuario"]["urlamigable"] = $this->Usuario->dame_url_limpia($title);                        
          
			if ($this->request->data["Usuario"]["id"] != "1" && $this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), $layout = 'default', $params = array("class" => "success"));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
		}
		$pais = $this->Usuario->Paise->find('list');
		$ciudads = $this->Usuario->Ciudade->find('list',array("conditions"=> array("Ciudade.pais_id" => "28")));
		$this->set(compact('pais', 'ciudads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Usuario->id = $id != 1 ? $id : null;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The usuario has been deleted.'), $layout = 'default', $params = array("class" => "success"));
		} else {
			$this->Session->setFlash(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * login method
 *
 * @return void
 */
    public function login() {
        
		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('action' => 'index'));
		}
        
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            } else {
                /* mensaje para el login del admin */
                $this->Session->setFlash(__('Par&aacute;metros incorrectos'));
                $this->redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
            $this->redirect(array('controller'=>'pages','action'=>'display','home'));
        }
    }    
    
/**
 * logout method
 *
 * @return void
 */    
    public function logout() {
        $user = $this->Session->read('Auth.User');
        $this->Auth->logout();
        // Eliminamos las cookies
        $this->Cookie->delete('Auth.User');
        $this->Cookie->destroy();
        
        /* redireccionamos al login del admin si es un usuario admin */
        $this->redirect($this->Auth->logout());
    }
        
}
