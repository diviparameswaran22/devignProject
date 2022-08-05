<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of AdminModel
 *
 * @author lenovo
 */
class AdminModel extends Model {
    
    public function getByUserName()
    {
        
        $db      = \Config\Database::connect();
        $builder = $db->table('admins');
        $query = $builder->getWhere(['user' => $username], $limit, $offset);
        return $query;
    }
    //put your code here
}
