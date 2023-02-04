<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailCapresma extends Model {
    protected $table = 'detail_capresma';
    public function getData($id = false){
        if ($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['Id' => $id]);
        }
    }
}


?>