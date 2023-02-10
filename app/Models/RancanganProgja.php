<?php

namespace App\Models;

use CodeIgniter\Model;

class RancanganProgja extends Model {
    protected $table = 'rancangan_progja';
    public function getData($id = false){
        if ($id === false){
            return $this->findAll();
        } else {
            // return $this->getWhere(['Id' => $id]);
            $this->where('id', 1);                // where clause
            $query = $this->get()->getResult();
            return $query;
        }
    }
}


?>