<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
    
    public function dame_url_limpia($cadena)
    {
        $cadena = utf8_encode(strtr(utf8_decode($cadena), '.αινσuΑΙΝΣΪάρΡ' , '_aeiouAEIOUunn'));
        $cadena = ereg_replace("[^A-Za-z0-9]", " ", $cadena);
        $cadena = trim($cadena);
        $cadena = preg_replace('/\s(?=\s)/', '', $cadena);
        $cadena = preg_replace('/[\n\r\t]/', ' ', $cadena);
        $cadena = ereg_replace("[^A-Za-z0-9]", "-", $cadena);
        
        return strtolower($cadena);
    }
}
