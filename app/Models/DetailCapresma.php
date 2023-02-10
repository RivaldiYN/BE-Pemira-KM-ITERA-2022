<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailCapresma extends Model {
    protected $table = 'detail_capresma';
    
    public function getData($id = false){
        if ($id === false){
            return $this->findAll();
        } else {
            // return $this->getWhere(['Id' => $id]);
    
            $this->where('id', $id);                // where clause
            $query = $this->get()->getResult();
            return $query;
        }
    }

    // public function getData($id){
    //     return $id;
    // }


}


?>