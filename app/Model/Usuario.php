<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Pais $Pais
 * @property Ciudad $Ciudad
 */
class Usuario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'urlamigable' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellidos' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'required' => array(
				'rule' => array('email', true),    
				'message' => 'Please provide a valid email address.'    
			),
			 'unique' => array(
				'rule'    => array('isUniqueEmail'),
				'message' => 'This email is already in use',
			),
			'between' => array( 
				'rule' => array('between', 6, 60), 
				'message' => 'Usernames must be between 6 to 60 characters'
			)
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'tipo' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'usuario')),
                'message' => 'Please enter a valid tipo',
                'allowEmpty' => false
            )
        ),        
		'genero' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fechanacimiento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'validado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciudade' => array(
			'className' => 'Ciudade',
			'foreignKey' => 'ciudad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    
	/**
	 * Before isUniqueEmail
	 * @param array $options
	 * @return boolean
	 */
	function isUniqueEmail($check) {

		$email = $this->find(
			'first',
			array(
				'fields' => array(
					'Usuario.id'
				),
				'conditions' => array(
					'Usuario.email' => $check['email']
				)
			)
		);

		if(!empty($email)){
			if($this->data[$this->alias]['id'] == $email['Usuario']['id']){
				return true; 
			}else{
				return false; 
			}
		}else{
			return true; 
		}
    }
    
	/**
	 * Before Save
	 * @param array $options
	 * @return boolean
	 */
    public function beforeSave() {
        if (isset($this->data[$this->alias]['password'])) {
            $new_password = $this->data[$this->alias]['password'];
            
            $usuario_id = isset($this->data[$this->alias]['id'])?$this->data[$this->alias]['id']:null;
            $password = $this->get_attribute_by_id($usuario_id, 'password');
            if(empty($password)){
                $this->data[$this->alias]['password'] = AuthComponent::password($new_password);
            }else{
                if($password != $new_password){
                    $this->data[$this->alias]['password'] = AuthComponent::password($new_password);
                }
            }
        }
        
		// fallback to our parent
		return parent::beforeSave($options);
    }
    
    /**
     * get_attribute_by_id method
     * only fields of Usuario
     */
    public function get_attribute_by_id($usuario_id = "", $field = ""){
        $value = "";
        $this->recursive = -1;
        $usuario = $this->find('first', array('conditions' => array('Usuario.id' => $usuario_id)));
        
        if($usuario){
            $value = $usuario['Usuario']["$field"];
        }
        
        return $value; 
    }

     /**
     * hash_password method
     * return encrit password 
     */     
    public function hash_password($password){
        return AuthComponent::password($password);
    }
    
}
